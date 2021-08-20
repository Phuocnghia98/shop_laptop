<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Blog;

class AppController extends Controller
{
    public function showindex()
    {
        return view('admin.index');
    }
}
