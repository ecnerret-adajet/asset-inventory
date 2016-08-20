<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssigneeCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acompanies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('acompanie_assignee', function(Blueprint $table){
            $table->integer('acompanie_id')->unsigned()->index();
            $table->foreign('acompanie_id')->references('id')->on('acompanies')->onDelete('cascade');
            
            
            $table->integer('assignee_id')->unsigned()->index();
            $table->foreign('assignee_id')->references('id')->on('assignees')->onDelete('cascade');
            
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
        Schema::dropIfExists('acompanie_assignee');
        Schema::dropIfExists('acompanies');
    }
}
