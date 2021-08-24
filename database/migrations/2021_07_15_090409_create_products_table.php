<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_model');
            $table->string('home_id')->nullable();
            $table->string('image')->nullable();
            $table->string('product_sku')->nullable();
            $table->string('product_ispn')->nullable();
            $table->integer('product_quantity')->nullable();
            $table->string('product_min_order')->nullable();
            $table->string('product_price')->nullable();
         
            $table->string('product_weight_value')->nullable();
            $table->string('product_weight_type')->nullable();
            $table->string('product_status')->nullable();
            $table->string('product_date')->nullable();
            $table->string('status')->nullable();
            $table->string('category_id')->nullable();
            $table->string('manufacture_id')->nullable();
            $table->bigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
