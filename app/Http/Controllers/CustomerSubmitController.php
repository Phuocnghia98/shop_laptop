<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class CustomerSubmitController extends Controller
{
    public function Create()
    {
        return view('customers_infor');
    }

    public function addCustomerinfo(Request $request)
    {

        // $name = $request->input('name');
        // $phone = $request->input('phone');
        // $country = $request->input('country');
        // $city = $request->input('city');
        // $state = $request->input('state');
        // $address = $request->input('address');
        // DB::insert('insert into customers (customer_name, phone, country, city, state, address_line1) values (?, ?, ?, ?, ?, ?)', [$name, $phone, $country, $city, $state, $address]);
        $contact = new Customers;
        $contact->user_id = Auth::id();
        $contact->customer_name = $request->post('name');
        $contact->phone = $request->post('phone');
        $contact->country = $request->post('country');
        $contact->city = $request->post('city');
        $contact->state = $request->post('state');
        $contact->address_line1 = $request->post('address');
        $contact->save();


        // DB::table('customers')->insert([
        //     'id_customers' => $request->id,
        //     'customer_name' => $request->name,
        //     'phone' => $request->phone,
        //     'country' => $request->country,
        //     'city' => $request->city,
        //     'state' => $request->state,
        //     'address_line1' => $request->address,
        // ]);
        return response()->json([
            'success' => true,
            'message' => 'Data inserted successfully'
        ]);
        // $contact->id_customers = $request->id;
        // $contact->customer_name = $request->name;
        // $contact->phone = $request->phone;
        // $contact->country = $request->country;
        // $contact->city = $request->city;
        // $contact->state = $request->state;
        // $contact->address_line1 = $request->address;
        // $contact->save();
        // if ($contact) {
        //     $arr = array('msg' => 'Bạn đã thêm thông tin thành công!', 'status' => true);
        // }
        // return Response()->json($arr);
    }
}
