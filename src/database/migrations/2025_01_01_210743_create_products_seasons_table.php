<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_seasons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->foreignId('season_id')->references('id')->on('seasons');
            $table->timestamps();

            // 複合キーを設定（ユニーク制約）
            $table->unique(['product_id', 'season_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_seasons');
    }
}
