<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('document_no')->nullable();
            $table->string('borrower')->nullable();
            $table->string('amount')->nullable();
            $table->string('total_balance')->nullable();
            $table->string('outstanding_balance')->nullable();
            $table->string('receivable')->nullable();
            $table->string('total_payment')->nullable();
            $table->string('short_over')->nullable();
            $table->string('payment_start_date')->nullable();
            $table->string('maturity_date')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('penalty')->nullable();
            $table->string('penalty_balance')->nullable();
            $table->string('contact_numbers')->nullable();
            $table->string('loan_description')->nullable();
            $table->string('loan_status')->nullable();
            $table->string('agent')->nullable();
            $table->string('interest_rate')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('is_void')->nullable();
            $table->string('void_date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->nullable();
            $table->string('date_cleared')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
