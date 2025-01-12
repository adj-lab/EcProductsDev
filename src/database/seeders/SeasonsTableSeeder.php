<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //季節のテストデータをseasonsへ代入
        $seasons = [
            [
                'name' => '春'
            ],
            [
                'name' => '夏'
            ],
            [
                'name' => '秋'
            ],
            [
                'name' => '冬'
            ]
        ];
        // seasonテーブルへテストデータ登録
        foreach($seasons as $season) {
            \App\Models\Season::create($season);
        }
    }
}