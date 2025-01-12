<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // productsテーブルとseasonsテーブルの多対多の関係性定義
    public function seasons()
    {
        return $this->belongsToMany(Season::class, 'products_seasons', 'product_id', 'season_id')
                    ->withTimestamps();
    }

}
