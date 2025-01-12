<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // SeasonsTableSeederを実行
        $this->call(SeasonsTableSeeder::class);
        // ProductsTableSeederを実行
        $this->call(ProductsTableSeeder::class);
        // ProductsSeasonsTableSeederを実行
        $this->call(ProductsSeasonsTableSeeder::class);
    }
}
