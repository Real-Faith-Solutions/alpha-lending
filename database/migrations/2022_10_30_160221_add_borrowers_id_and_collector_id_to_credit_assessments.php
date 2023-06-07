<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBorrowersIdAndCollectorIdToCreditAssessments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credit_assessments', function (Blueprint $table) {
            $table->unsignedBigInteger('collector_id')->nullable();
            $table->unsignedBigInteger('borrowers_id')->nullable();
            $table->unsignedBigInteger('creditassessment_id')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
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
            $table->dropColum('collector_id')->nullable();
            $table->dropColum('borrowers_id')->nullable();
            $table->dropColum('creditassessment_id')->nullable();
            $table->dropColum('payment_id')->nullable();
        });
    }
}
