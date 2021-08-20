<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blog";
    public $timestamps = true;

    protected $fillable = [
        'id_blog',
        'image',
        'time',
        'title',
        'content',
        'main_content',
    ];
}
