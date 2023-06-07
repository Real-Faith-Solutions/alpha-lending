<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForbesTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forbes_tops', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('rank');
            $table->string('recipient');
            $table->string('country');
            $table->string('career');
            $table->integer('tied')->unsigned()->default(0);
            $table->string('title');
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
        Schema::dropIfExists('forbes_tops');
    }
}
