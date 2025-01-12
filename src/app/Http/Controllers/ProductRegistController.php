<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductRegist;

class ProductRegistController extends Controller
{
    //商品登録画面表示
    public function regist()
    {
        return view('product_regist');
    }
}
