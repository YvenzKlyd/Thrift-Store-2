<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopNow()
    {
        return view('auth.choice');
    }
}
