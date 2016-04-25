<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalhabbitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicalhabbits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('height', 10);
            $table->string('weight', 10);
            $table->enum('body_type', ['slim', 'average', 'athletic', 'heavy']);
            $table->enum('complexion', ['veryfair', 'fair', 'wheatish', 'wheatishbrown']);
            $table->enum('physical_status', ['normal', 'physicallychallenged']);
            $table->string('description', 255);
            $table->enum('food', ['veg', 'nonveg']);
            $table->enum('smoking', ['occasionally', 'no', 'yes']);
            $table->enum('drinking', ['socialdrinker', 'no', 'yes']);
            $table->enum('status', ['active', 'disable', 'onhold']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('physicalhabbits');
    }
}
