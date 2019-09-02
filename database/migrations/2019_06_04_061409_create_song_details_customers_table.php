<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongDetailsCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_details_customers', function (Blueprint $table) {
            $table->unsignedInteger('songId');
            $table->foreign('songId')->references('songId')->on('song_details');

            $table->unsignedInteger('customerId');
            $table->foreign('customerId')->references('customerId')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_details_customers');
    }
}
