<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;//クエリビルダでDBに保存されているものを表示させる。


class ShopController extends Controller
{
    public function index()
    {
        //viewを表示
        return view('shops.index');
    }

    

    public function show() //{id}は未定
    {
       
    }
}