<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePafProposedChangeScheduleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paf_proposed_change_schedule_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->integer('proposed_days_of_work')->nullable();
            $table->integer('proposed_work_hours_per_week')->nullable();
            $table->string('proposed_type_of_shift')->nullable();
            $table->integer('proposed_work_hours_per_day')->nullable();
            $table->string('proposed_work_location')->nullable();
            $table->string('proposed_key_schedule_type')->nullable();
            $table->string('proposed_remarks_hr')->nullable();
            $table->string('proposed_remarks_exec')->nullable();
            $table->timestamps();

            $table->foreign('request_id')
                ->references('id')
                ->on('paf_nature_of_actions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paf_proposed_change_schedule_details');
    }
}
