<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doctorName');
            $table->integer('user_id')->nullable()->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('department_id')->nullable()->unsigned()->index();
            $table->foreign('department_id')->references('id')->on('department');
            $table->text('educations')->nullable();
            $table->string('image')->nullable();
            $table->integer('consultation_fee')->nullable();
            $table->string('address')->nullable();
            $table->string('mobileNo')->unique();
            $table->unsignedBigInteger('location_id')->nullable()->unsigned()->index();
            $table->foreign('location_id')->references('id')->on('locations');

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
        Schema::dropIfExists('doctor');
    }
}
