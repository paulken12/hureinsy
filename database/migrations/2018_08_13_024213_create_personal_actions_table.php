<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id');
            $table->string('employment_status')->nullable();
            $table->string('requested_by')->nullable();
            $table->string('assessed_by')->nullable();
            $table->string('approved_by')->nullable();
            $table->date('date_effective')->nullable();
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
        Schema::dropIfExists('personal_actions');
    }
}
