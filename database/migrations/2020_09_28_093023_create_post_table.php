<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id('post_id');
            $table->integer('post_reported')->default(0);
            //$table->unsignedInteger('user_id');
            $table->text('post_title');
            $table->text('post_intro');
            $table->text('post_left_text');
            $table->text('post_right_text');
            $table->timestamps();

            $table->char('car_brand');
            $table->char('car_model');
            $table->integer('car_buildyear');
            $table->integer('car_mileage');
            $table->char('car_color');
            $table->integer('car_horsepower');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}



