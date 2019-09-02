<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlinePaymentsExTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('online_payments_ex', function (Blueprint $table) {
                $table->integer('oPyamentId')->unsigned();
                $table->primary('oPyamentId');
                $table->double('totalAmount');
                $table->integer('quantity');
                $table->timestamps();
            });
    
            Schema::table('online_payments_ex', function($table) {
                
                $table->unsignedInteger('cashierId');
                $table->foreign('cashierId')->references('cashierId')->on('cashiers');
    
                $table->unsignedInteger('adminId');
                $table->foreign('adminId')->references('adminId')->on('admins');
    
                $table->unsignedInteger('customerId');
                $table->foreign('customerId')->references('customerId')->on('customers');
    
                $table->unsignedInteger('instrumentId');
                $table->foreign('instrumentId')->references('instrumentId')->on('instruments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_payments_exes');
    }
}
