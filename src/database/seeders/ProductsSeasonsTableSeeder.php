<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // productsテーブルの商品情報レコードIDと seasonsテーブルの季節レコードIDを関連付けたデータ
        $relations = [
            ['product_id' => 1, 'season_id' => [3, 4]],
            ['product_id' => 2, 'season_id' => 1],
            ['product_id' => 3, 'season_id' => 4],
            ['product_id' => 4, 'season_id' => 2],
            ['product_id' => 5, 'season_id' => 2],
            ['product_id' => 6, 'season_id' => [2, 3]],
            ['product_id' => 7, 'season_id' => [1, 2]],
            ['product_id' => 8, 'season_id' => [2, 3]],
            ['product_id' => 9, 'season_id' => 2],
            ['product_id' => 10, 'season_id' => [1, 2]]         
        ];

        //products_seasonsテーブルへテストデータ登録
        foreach($relations as $relation) {
            // Productモデルからrelationで指定したproduct_idと一致するproduct_idをpuroductsテーブルから取得
            $product = Product::find($relation['product_id']);
            if ($product) {
                // Productモデルのseasons() メソッドで中間テーブルにデータを挿入
                $product->seasons()->sync($relation['season_id']);
            }
        }
    }
}
