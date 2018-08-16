<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePafNatureOfActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paf_nature_of_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('employment_status');
            $table->string('requested_by');
            $table->string('assessed_by');
            $table->string('approved_by');
            $table->string('comfirmed_by');
            $table->string('master_key_request_status');
            $table->string('remarks')->nullable();
            $table->date('date_effective');
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
        Schema::dropIfExists('paf_nature_of_actions');
    }
}
