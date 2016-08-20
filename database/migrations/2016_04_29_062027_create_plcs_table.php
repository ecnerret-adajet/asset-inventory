<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit');
            $table->string('it_code');
            $table->integer('user_id')->unsigned();
            $table->string('finance_code');
            $table->string('module');
            $table->string('part_num');
            
            
            $table->foreign('user_id')
                ->references('id')
                ->on('assets')
                ->onDelete('cascade');
            
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
        Schema::drop('plcs');
    }
}
