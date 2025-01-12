<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ProductDetail;

class ProductDetailController extends Controller
{
    public function detail(Request $request, $id)
    {
        //商品詳細画面表示
        $detail = ProductDetail::find($id);
        return view('product_detail', compact('detail'));
    }
}
