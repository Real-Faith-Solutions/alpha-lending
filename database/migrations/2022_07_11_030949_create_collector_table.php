<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('valid_id_number');
            $table->string('designated_area');
            $table->string('total_loans_handled')->nullable();
            $table->string('total_handled_active_loans')->nullable();
            $table->string('total_handled_matured_loans')->nullable();
            $table->string('total_ontime_collected')->nullable();
            $table->string('total_delayed_collected')->nullable();
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
        Schema::dropIfExists('collector');
    }
}
