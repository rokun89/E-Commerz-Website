<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function permission()
    {
        return view('backend.pages.Permission.index');
    }
}
