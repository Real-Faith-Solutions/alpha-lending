<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDatesToPaymentSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_schedules', function (Blueprint $table) {
            $table->string('payment_date')->nullable();
            $table->string('payment_start_date')->nullable();
            $table->string('payment_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_schedules', function (Blueprint $table) {
            $table->dropColum('payment_date')->nullable();
            $table->dropColum('payment_start_date')->nullable();
            $table->dropColum('payment_id')->nullable();
        });
    }
}
