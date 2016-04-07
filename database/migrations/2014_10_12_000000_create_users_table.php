<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('password', 60);
            $table->string('email')->unique();
            $table->string('mobile', 15);
            $table->string('landline', 15);
            $table->enum('gender', ['male', 'female']);
            $table->enum('email_approved', ['approved', 'rejected', 'pending']);
            $table->enum('mobile_approved', ['approved', 'rejected', 'pending']);
            $table->enum('proof_approved', ['approved', 'rejected', 'pending']);
            $table->enum('publish_profile', ['published', 'unpublished']);
            $table->enum('policy_accepted', ['accept', 'declined']);
            $table->enum('email_notification', ['yes', 'no']);
            $table->enum('user_approved', ['approved', 'blocked', 'pending', 'hold']);
            $table->timestamp('confirmed_at')->nullable();
            $table->string('alias', 100); //first name + last name + random three digit
            $table->string('hash', 100);
            $table->string('ipAddress', 50);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
