<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('program_name');
            $table->string('program_version');
            $table->string('program_serial');
            $table->string('program_id');
            $table->string('program_domain');
            $table->string('program_uuid');
            $table->timestamps();
        });
        
        Schema::create('asset_program', function (Blueprint $table){
            $table->integer('asset_id')->unsigned()->index();
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');
            
            $table->integer('program_id')->unsigned()->index();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            
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
        Schema::drop('asset_program');
        Schema::drop('programs');
    }
}
