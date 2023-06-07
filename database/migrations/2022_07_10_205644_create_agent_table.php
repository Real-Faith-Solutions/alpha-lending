<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('valid_id_number');
            $table->string('total_commissions')->nullable();
            $table->string('total_released_commissions')->nullable();
            $table->string('total_receivable_commissions')->nullable();
            $table->string('total_referred_loans')->nullable();
            $table->string('designated_area')->nullable();
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
        Schema::dropIfExists('agent');
    }
}
