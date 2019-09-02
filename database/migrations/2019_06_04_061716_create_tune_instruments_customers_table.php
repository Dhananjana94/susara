<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuneInstrumentsCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tune_instruments_customers', function (Blueprint $table) {
            $table->unsignedInteger('instrumentId');
            $table->foreign('instrumentId')->references('instrumentId')->on('instruments');

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
        Schema::dropIfExists('tune_instruments_customers');
    }
}
