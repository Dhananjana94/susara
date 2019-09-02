<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManualPaymentsExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manual_payments_ex', function (Blueprint $table) {
            $table->increments('mPyamentId');
            $table->double('totalAmount');
            $table->timestamps();
        });

        Schema::table('manual_payments_ex', function($table) {
            
            $table->unsignedInteger('cashierId');
            $table->foreign('cashierId')->references('cashierId')->on('cashiers');

            $table->unsignedInteger('adminId');
            $table->foreign('adminId')->references('adminId')->on('admins');

            $table->unsignedInteger('customerId');
            $table->foreign('customerId')->references('customerId')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manual_payments-exes');
    }
}
