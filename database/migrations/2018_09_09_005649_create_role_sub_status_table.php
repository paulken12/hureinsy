<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleSubStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_sub_status', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('sub_status_id')->unsigned();

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
 
            $table->foreign('sub_status_id')
                ->references('id')
                ->on('sub_statuses')
                ->onDelete('cascade');
                
            $table->primary(['role_id', 'sub_status_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_sub_status');
    }
}
