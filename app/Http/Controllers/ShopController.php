<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        
        //viewを表示
        return view('shops.index');
    }
}
