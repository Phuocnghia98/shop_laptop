<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "products";
    public $timestamps = true;

    protected $fillable = [
        'id_product',
        'product_code',
        'product_name',
        'product_line',
        'product_scale',
        'product_vendor',
        'product_description',
        'quantity_inStock',
        'buy_price',
        'MSRP',
        'created_at'
    ];

    public function product_line()
    {
        return $this->belongsTo(Productlines::class);
    }

    public function orderdetails()
    {
        return $this->hasMany(Orderdetails::class);
    }

    public function image()
    {
        return $this->hasMany(Images::class);
    }

    public static function getProductByQuery($page = 1, $num_per_page = 5, $params = [])
    {
        # Chỉ số bắt đầu
        $start = ($page - 1) * $num_per_page;

        $listProduct = new Products();

        if ($params['keywords']) {
            $listProduct->where('product_name', 'LIKE', '%' . $params['keywords'] . '%')
                ->orWhere('product_line', 'LIKE', '%' . $params['keywords'] . '%');
        }

        $listProduct = $listProduct->skip($start)->take($num_per_page)->get();
        $total = count($listProduct);

        // dd($listProduct);
        return [$listProduct, $total];
    }
}
