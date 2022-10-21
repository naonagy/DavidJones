<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderlines', function (Blueprint $table) {
            $table->id();
            $table->foreign('order_id')
            ->references('id')
            ->on('users');
            $table->foreign('product_id')
            ->references('id')
            ->on('products');
            $table->integer('quantity');
            $table->foreign('price_each')
            ->references('product_price')
            ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderlines');
    }
};
