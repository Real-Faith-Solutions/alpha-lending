<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgentCommissionReleaseRalationshipToLoansAndAgents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_commission_releases', function (Blueprint $table) {
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->unsignedBigInteger('loan_id')->nullable();
            $table->foreign('agent_id')->references('id')->on('loans');
            $table->foreign('loan_id')->references('id')->on('agents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent_commission_release', function (Blueprint $table) {
            $table->dropColum('agent_id');
            $table->dropColum('loan_id');
        });
    }
}
