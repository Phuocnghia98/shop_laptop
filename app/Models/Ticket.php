<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = "tickets";
    public $timestamps = true;

    protected $fillable = [

        'title',
        'content',
        'slug',
        'status',
        'user_id',
    ];

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getTitle()
    {
        return $this->title;
    }
}
