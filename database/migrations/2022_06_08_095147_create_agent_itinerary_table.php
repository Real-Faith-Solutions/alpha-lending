<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentItineraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_itineraries', function (Blueprint $table) {
            $table->id();
            $table->string('borrower');
            $table->string('contact_numbers');
            $table->string('maturity_date');
            $table->string('outstanding_balance');
            $table->string('penalty_balance');
            $table->string('weekly_payment');
            $table->string('short_over');
            $table->string('amount_paid');
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
        Schema::dropIfExists('agent_itineraries');
    }
}
