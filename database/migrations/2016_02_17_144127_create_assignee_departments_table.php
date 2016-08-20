<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssigneeDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adepartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('adepartment_assignee', function(Blueprint $table){
            $table->integer('adepartment_id')->unsigned()->index();
            $table->foreign('adepartment_id')->references('id')->on('adepartments')->onDelete('cascade');
            
            
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
        Schema::dropIfExists('adepartment_assignee');
        Schema::dropIfExists('adepartments');
    }
}
