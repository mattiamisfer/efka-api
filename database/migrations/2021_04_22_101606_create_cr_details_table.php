<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cr_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('cr_number');
            $table->string('tax')->nullable();
            $table->string('muncipal')->nullable();
            $table->string('commercial')->nullable();
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
        Schema::dropIfExists('cr_details');
    }
}
