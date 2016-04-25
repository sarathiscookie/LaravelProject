<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcastes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('caste_id')->unsigned()->index();
            $table->string('subcaste', 50);
            $table->enum('status', ['active', 'disable', 'onhold']);
            $table->timestamps();

            $table->foreign('caste_id')->references('id')->on('castes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subcastes');
    }
}
