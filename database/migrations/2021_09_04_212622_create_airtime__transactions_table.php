<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirtimeTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    // id int  auto_increment ,
    // trackingID  varchar(25) not null,
    //  beneficiaryPhoneNumber  varchar(15) not null,
    //  amount  varchar(7) not null,
    //  status  varchar(225) not null,
    //  transactionDate  date,
    //  vendingDate  varchar(100) null,
    //  primary key (id),
    //  index index_column (trackingID, beneficiaryPhoneNumber,transactionDate ,vendingDate  ASC));
    public function up()
    {
        Schema::create('airtime__transactions', function (Blueprint $table) {
            $table->id();
            $table->string('trackingID');
            $table->string('msisdn');
            $table->string('amount');
            $table->string('status');
            $table->date('transactionDate');
            $table->string('vendDate');
            $table->index(['trackingID', 'msisdn','transactionDate','vendDate'], 'index_columns');
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
        Schema::dropIfExists('airtime__transactions');
    }
}
