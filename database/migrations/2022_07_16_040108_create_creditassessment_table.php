<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditassessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('actions')->nullable();
            $table->double('form_number')->nullable();
            $table->date('date')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_address')->nullable();
            $table->double('contact_number')->nullable();
            $table->string('business_expected_income_per_day')->nullable();
            $table->double('credit_approve_amount')->nullable();
            $table->string('credit_terms')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('special_notes')->nullable();
            $table->string('agent_code')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('asset_market_value')->nullable();
            $table->string('loan_purpose')->nullable();
            $table->string('total_revenue')->nullable();
            $table->string('operating_expenses')->nullable();
            $table->string('net_operating_income')->nullable();
            $table->string('loan_payments')->nullable();
            $table->string('debt_service_coverage_ratio')->nullable();
            $table->string('approve_loan_amount')->nullable();
            $table->string('loan_company')->nullable();
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
        Schema::dropIfExists('credit_assessments');
    }
}
