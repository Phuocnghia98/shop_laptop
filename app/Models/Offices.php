<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    use HasFactory;
    protected $table = "offices";
    public $timestamps = true;

    protected $fillable = [
        'id_office',
        'office_code',
        'city',
        'phone',
        'address_line1',
        'address_line2',
        'state',
        'country',
        'postal_code',
        'teritory',

    ];

    public function employees(){
        return $this->hasMany(Employees::class);
    }
}
