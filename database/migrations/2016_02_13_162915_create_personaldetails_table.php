<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaldetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('age');
            $table->string('mother_tongue', 25);
            $table->enum('marital_status', ['married', 'unmarried', 'divorced']);
            $table->integer('religion_id')->unsigned();
            $table->integer('caste_id')->unsigned();
            $table->integer('subcaste_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('pincode', 15);
            $table->string('hobbies', 50);
            $table->enum('family_status', ['middleclass', 'upperclass', 'rich']);
            $table->enum('family_type', ['joint', 'nuclear']);
            $table->enum('family_values', ['orthodox', 'traditional', 'moderate', 'liberal']);
            $table->text('description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('caste_id')->references('id')->on('castes');
            $table->foreign('subcaste_id')->references('id')->on('subcastes');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personaldetails');
    }
}
