<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();

    //         'product_name',
    // 'product_description','product_meta_tag_title','product_meta_tag_description','product_meta_tag_keyword'

            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_meta_tag_title');
            $table->string('product_meta_tag_description');
            $table->string('product_meta_tag_keyword');
            $table->unsignedBigInteger('product_id');
           // $table->unsignedBigInteger('user_id');

            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('product_translations');
    }
}
