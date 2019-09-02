<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_ex', function (Blueprint $table) {
            $table->integer('billNo')->unsigned();
            $table->primary('billNo');
            $table->double('totalAmount');
        });

        Schema::table('bill_ex', function($table) {
            
            $table->unsignedInteger('cashierId');
            $table->foreign('cashierId')->references('cashierId')->on('cashiers');

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
        Schema::dropIfExists('bills-exes');
    }
}
