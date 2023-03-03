<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role()
    {
        return view('backend.pages.Role.index');
    }
}
