<?php

namespace App\Models;

use Faker\Provider\ar_SA\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = "customers";
    public $timestamps = true;
    protected $primaryKey = "customer_number";

    protected $fillable = [
        'id_customers',
        'customer_number',
        'customer_name',
        'contact_lastName',
        'contact_firstName',
        'phone',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country',
        'sales_repEmployeeNumber',
        'credit_limit',
        'user_id'
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
