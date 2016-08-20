<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('transfer_reason');
            $table->timestamps();
        });
        
        Schema::create('assignee_transfer', function (Blueprint $table) {
            $table->integer('assignee_id')->unsigned()->index();
            $table->foreign('assignee_id')->references('id')->on('assignees')->onDelete('cascade');
            
            $table->integer('transfer_id')->unsigned()->index();
            $table->foreign('transfer_id')->references('id')->on('transfers')->onDelete('cascade');
            
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
        Schema::drop('assignee_transfer');
        Schema::drop('transfers');
    }
}
