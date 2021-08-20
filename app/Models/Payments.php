<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $table = "payments";
    public $timestamps = true;

    protected $fillable = [
        'id_payment',
        'check_number',
        'customer_number',
        'payment_date',
        'amount',

    ];

    public function customers(){
        return $this->belongsTo(Customers::class);
    }
}
