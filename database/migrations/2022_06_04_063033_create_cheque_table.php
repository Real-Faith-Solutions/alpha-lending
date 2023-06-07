<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChequeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheques', function (Blueprint $table) {
            $table->id();
            $table->string('document_no');
            $table->string('borrower');
            $table->string('agent');
            $table->double('loan_worth');
            $table->double('loan_interest');
            $table->string('receivable');
            $table->double('total_deduction');
            $table->string('bank');
            $table->string('cheque_no');
            $table->string('cheque_amount');
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
        Schema::dropIfExists('cheques');
    }
}
