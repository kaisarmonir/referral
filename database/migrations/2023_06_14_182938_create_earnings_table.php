<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earnings', function (Blueprint $table) {

            $table->id();
            $table->string('user_id');
            $table->integer('own')->default(0);
            $table->integer('firstGen')->default(0);
            $table->integer('secondGen')->default(0);
            $table->integer('thirdGen')->default(0);
            $table->integer('daily')->default(0);
            $table->integer('video')->default(0);
            $table->integer('withdraw')->default(0);
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
        Schema::dropIfExists('earnings');
    }
};
