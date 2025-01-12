<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        //商品一覧表示：produtsテーブルから商品情報全てを取得
        $products = DB::table('products')->get();
        return view('index', compact('products'));
    }
}
