<?php

use Illuminate\Support\Facades\Schema;
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
            $table->integer('id')->unsigned()->unique();
            $table->primary('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('location_id')->nullable()->unsigned()->index();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->string('password');
            $table->string('role_as')->nullable();
            $table->string('date_of_birth');
            $table->string('mobileNo')->unique();
            $table->string('image');
            $table->string('gender');
            $table->string('address');
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
        Schema::dropIfExists('users');
    }
}
