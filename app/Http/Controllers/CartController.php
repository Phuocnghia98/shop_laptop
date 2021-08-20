<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Products;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function ShoppingCart(Request $resquest)
    {
        // session()->forget('cart');
        // $id = $resquest->id;
        $listCustomer = [];
        if (Auth::check()) {
            $id = Auth::user()->id;
            $listCustomer = Customers::where('user_id', '=', $id)->get();
        }
        // dd(Auth::check());
        // dd($listCustomer);


        return view('ShoppingCart', compact('listCustomer'));
    }



    public function addToCart(Request $resquest)
    {
        $id = $resquest->id;
        $product = Products::where('id_product', '=', $id)->firstOrFail();

        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id_product" => $product->id_product,
                "product_name" => $product->product_name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
                "product_code" => $product->product_code
            ];
        }
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function addToCartAjax(Request $resquest)
    {
        $id = $resquest->id;
        $product = Products::where('id_product', '=', $id)->firstOrFail();
        // dd($product);
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id_product" => $product->id_product,
                "product_name" => $product->product_name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
                "product_code" => $product->product_code

            ];
        }
        session()->put('cart', $cart);
        // dd(session()->get('cart'));

        return response()->json([
            'success' => true,
            'msg' => 'Thành công',
        ]);
    }

    public function removeCartAjax(Request $resquest)
    {
        $id = $resquest->id;
        $product = Products::where('id_product', '=', $id)->firstOrFail();
        $cart = session()->get('cart');
        if (isset($cart[$resquest->id])) {
            unset($cart[$resquest->id]);
            session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'msg' => 'Thành công',
            ]);
        } else {

            return response()->json([
                'success' => false,
                'msg' => 'Không co san pham trong gio hang',
            ]);
        }
    }

    public function updateCartAjax(Request $resquest)
    {
        $id = $resquest->id;
        $product = Products::where('id_product', '=', $id)->firstOrFail();
        if ($resquest->id && $resquest->quantity) {
            $cart = session()->get('cart');
            $cart[$resquest->id]["quantity"] = $resquest->quantity;
            session()->put('cart', $cart);
            return response()->json([
                'success' => true,
                'msg' => 'Cập nhật Thành công',
                // 'sub_total' => $cart['quantity'] * $cart['price']
            ]);
        } else {
            return response()->json([
                'success' => false,
                'msg' => 'Cập nhật không thành công',
            ]);
        }
    }

    public function getAllProduct()
    {
    }
}
