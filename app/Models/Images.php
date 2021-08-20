<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table = "image_product";
    public $timestamps = true;

    protected $fillable = [
        'id',
        'image',
        'id_product',

    ];

    public function id_product()
    {
        return $this->belongsTo(Products::class);
    }
}
