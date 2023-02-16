<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function frontend()
    {
        return view('frontend.master');
    }
}
