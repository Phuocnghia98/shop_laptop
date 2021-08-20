<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Orderdetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;




class OrderDetailCustomerController extends Controller
{
    public function ShowOrderDetail(Request $resquest)
    {

        if (Auth::check()) {
            $id = Auth::user()->id;
        } else {
            return redirect('/login2');
        }

        $orders = Orders::where('user_id', '=', $id)->with('customers')->get();

        // $order = Orders::where('user_id', '=', $id)->get();
        // $customer = Customers::where('user_id', '=', $id)->get();
        // // dd($order);
        // // dd(session()->get('cart'));

        // foreach ($customer as $value) {
        //     $id_customers = $value->id_customers;
        // }
        // $order = Orders::where('customer_number', '=', $id_customers)->get();
        // // dd($order);
        foreach ($orders as $item) {
            $order_number = $item->order_number;
        }
        $orderdetail = Orderdetails::where('order_number', '=', $order_number)->get();
        // dd($orderdetail);
        return view('HistoryOrderDetail', compact('orderdetail'));
    }

    public function orderdetail(Request $resquest)
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
        } else {
            return redirect('/login2');
        }

        // phai su dung transaction
        $products = session()->get('cart');
        // dd($products);

        $ShipDate = Date('y:m:d', strtotime('+3 days'));
        $NewDate = Date('y:m:d', strtotime('+7 days'));
        //1. tao order
        $order = Orders::create([
            'order_date' => now(),
            'required_date' => $NewDate,
            'shipped_date' => $ShipDate,
            'status' => 0,
            'comments' => '',
            'customer_number' => $resquest->cus, //id địa chỉ người nhận hàng
            'order_number' => time(),
            'user_id' => $id
        ]);
        // dd($order);

        //2. tao cac order detail (lay id order vua tao phia tren)
        $total = 0;
        foreach ($products as $key => $value) {
            $orderdetail = Orderdetails::create([
                'product_code' => $value['product_code'],
                'quantity_ordered' => $value['quantity'],
                'price_each' => $value['price'],
                'order_lineNumber' => '',
                'order_number' => $order['order_number'],
                'product_name' => $value['product_name']
            ]);
            $total += $orderdetail['price_each'] * $orderdetail['quantity_ordered'];
            // dd($total);
            // dd($value);
            // dd($orderdetail);
        }
        // dd($order);
        //3. tinh tong tien (cap nhat order)
        $order_last_item = Orders::where('id_order', '=', $order['id_order'])->firstOrFail()->update([
            'total' => $total
        ]);
        // $order_last_item['total'] = $total;
        // dd($order_last_item);
        // $order_last_item->save();

        //4. chuyen sang trang showorder
        session()->forget('cart');
        return true;
    }
}
