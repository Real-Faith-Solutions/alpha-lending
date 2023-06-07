<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('document_no')->nullable();
            $table->string('borrower')->nullable();
            $table->double('amount')->nullable();
            $table->double('total_balance')->nullable();
            $table->double('outstanding_balance')->nullable();
            $table->double('receivable')->nullable();
            $table->double('total_payment')->nullable();
            $table->double('short_over')->nullable();
            $table->date('payment_start_date')->nullable();
            $table->date('maturity_date')->nullable();
            $table->string('payment_type')->nullable();
            $table->date('payment_date')->nullable();
            $table->double('penalty')->nullable();
            $table->double('penalty_balance')->nullable();
            $table->string('contact_numbers')->nullable();
            $table->string('agent')->nullable();
            $table->double('interest_rate')->nullable();
            $table->string('loan_description')->nullable();
            $table->string('loan_status')->nullable();
            $table->string('type')->nullable();
            $table->string('terms')->nullable();
            $table->string('frequency')->nullable();
            $table->string('remarks')->nullable();
            $table->date('date_released')->nullable(); 
            $table->date('date')->nullable(); 
            $table->string('collector')->nullable(); 
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
        Schema::dropIfExists('loans');
    }
}
