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
            $table->timestamp('from_date');
            $table->timestamp('to_date');
            $table->string('return');
            $table->string('remarks');
            $table->timestamps();
        });

        Schema::create('loan_own', function (Blueprint $table){
            $table->integer('loan_id')->unsigned();
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
            $table->integer('own_id')->unsigned();
            $table->foreign('own_id')->references('id')->on('owns')->onDelete('cascade');
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
        Schema::drop('loan_own');
        Schema::drop('loans');
    }
}
