<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('tin_id');
            $table->string('nature_of_business');
            $table->string('house_no_street_subdivision');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('years_operating');
            $table->string('branch');
            $table->string('agent');
            $table->double('credit_limit');
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
        Schema::dropIfExists('borrowers');
    }
}
