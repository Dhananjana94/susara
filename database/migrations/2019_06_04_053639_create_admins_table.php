<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('adminId');
            $table->string('fname');
            $table->string('lname');
            $table->string('phoneNo');
            $table->string('no');
            $table->string('street');
            $table->string('city');
            $table->string('nic');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();

            $table->unsignedInteger('userId')->unsigned();
            $table->foreign('userId')->references('userId')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
