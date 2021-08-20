<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    public $timestamps = true;
    protected $primaryKey = "id_order";

    protected $fillable = [
        'order_number',
        'order_date',
        'required_date',
        'shipped_date',
        'status',
        'comments',
        'customer_number',
        'total',
        'id_order',
        'user_id'

    ];

    public function orderdetails()
    {
        return $this->hasMany(Orderdetails::class);
    }

    public function customers()
    {
        return $this->belongsTo(Customers::class, 'customer_number', 'id_customers');
    }
}
