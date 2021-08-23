<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Productlines;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index()
    {
        $listProduct = Products::all();
        $listProductline = Productlines::all();
        $listProductHot = Products::where('hot', '=', 1)->get();
        $listBlog = Blog::all();

        // dd($productId);
        $productsHotSale = DB::table('orderdetails AS o')
            ->select(DB::raw('p.id_product, p.product_code, p.product_name, COUNT(o.product_code) AS total'))
            ->join('products AS p', 'o.product_code',  '=', 'p.product_code')
            ->groupBy('o.product_code', 'p.id_product')
            ->orderBy('total', 'DESC')
            ->limit(8)
            ->get();


        // SELECT p.product_code, p.product_name, COUNT(o.product_code) AS total
        // FROM orderdetails AS o INNER JOIN products AS p ON o.product_code = p.product_code
        // GROUP BY o.product_code
        // ORDER BY total DESC
        // LIMIT 0, 8

        return view('index', compact('listProduct', 'listProductline', 'productsHotSale', 'listProductHot', 'listBlog'));
    }


    public function About()
    {
        return view('About');
    }

    public function CheckoutSuccessful()
    {
        return view('CheckoutSuccessful');
    }

    public function Confirmation()
    {
        return view('Confirmation');
    }

    public function Contact()
    {
        return view('Contact');
    }

    public function DeliveryMethods()
    {
        return view('DeliveryMethods');
    }

    public function Error404()
    {
        return view('Error404');
    }

    public function LoginForm()
    {
        return view('LoginForm');
    }

    public function PaymentMethods()
    {
        return view('PaymentMethods');
    }

    public function Products_a4Columns()
    {
        return view('Products_a4Columns');
    }

    public function Blog()
    {
        return view('Blog');
    }
}
