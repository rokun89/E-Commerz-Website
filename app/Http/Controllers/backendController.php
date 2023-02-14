<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function admin()
    {
        return view('backend.master');
    }
    public function product()
    {
        return view('backend.pages.product');
    }
}
