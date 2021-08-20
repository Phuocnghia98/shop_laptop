<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Productlines;


class ProductController extends Controller
{
    public function listProducts()
    {
        $listProduct = Products::paginate(5);
        $listProductline = Productlines::all();
        return view('ListProducts', compact('listProduct', 'listProductline'));
    }

    public function productDetails(Request $resquest)
    {
        $id = $resquest->id_product;
        $product = Products::where('id_product', '=', $id)->get();
        $listProduct = Products::all();
        $listProductline = Productlines::all();
        $listimage = Images::where('id_product', '=', $id)->get();
        $listProductHot = Products::where('hot', '=',  1)->get();

        return view('ProductDetails', compact('product', 'listProduct', 'listProductline', 'listimage', 'listProductHot'));
    }

    public function filterProduct(Request $resquest)
    {
        // dd($resquest['fil']);
        $price_min = trim($resquest['price-min'], "$");
        $price_max = trim($resquest['price-max'], "$");

        $listProductline = Productlines::all();
        $listProduct = Products::where('price', '>=', $price_min)
            ->where('price', '<=', $price_max)
            ->whereIn('product_line', array_keys($resquest['fil']))->paginate(5);
        // $listProduct = new \Illuminate\Pagination\Paginator($listProduct, 2);

        // dd($listProduct);

        return view('ListProducts', compact('listProduct', 'listProductline'));
    }

    public function search(Request $resquest)
    {
        $listProductline = Productlines::all();
        if ($resquest->keywords_submit) {
            $keywords = $resquest->keywords_submit;
            [$listProduct, $total] = Products::getProductByQuery(1, 5, [
                'keywords' => $keywords
            ]);
        } else {
            return redirect(route('index'));
        }


        // dd($listProduct);
        return view('ListProducts', compact('listProduct', 'listProductline'));
    }
}
