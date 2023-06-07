<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMaturityDateToCreditAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credit_assessments', function (Blueprint $table) {
            $table->string('maturity_date')->nullable();
            $table->string('payment_date')->nullable();
            $table->string('payment_start_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('credit_assessments', function (Blueprint $table) {
            $table->dropColum('maturity_date')->nullable();
            $table->dropColum('payment_date')->nullable();
            $table->dropColum('payment_start_date')->nullable();
        });
    }
}
