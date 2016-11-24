<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->timestamp('from_date');
            $table->timestamp('to_date');
            $table->string('user_loan');
            $table->string('remarks');
            $table->boolean('on_loan')->default(true);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('acompanie_loan', function(Blueprint $table){
            $table->integer('acompanie_id')->unsigned();
            $table->foreign('acompanie_id')->references('id')
                ->on('acompanies')->onDelete('cascade');
            $table->integer('loan_id')->unsigned();
            $table->foreign('loan_id')->references('id')
                ->on('loans')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('adepartment_loan', function(Blueprint $table){
            $table->integer('adepartment_id')->unsigned();
            $table->foreign('adepartment_id')->references('id')
                ->on('adepartments')->onDelete('cascade');
            $table->integer('loan_id')->unsigned();
            $table->foreign('loan_id')->references('id')
                ->on('loans')->onDelete('cascade');
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
       
        Schema::drop('adepartment_loan');
        Schema::drop('acompanie_loan');
        Schema::drop('loans');
    }
}
