<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('model');
            $table->string('serial');
            $table->string('finance_code');
            $table->string('it_code');
            $table->string('remarks');
            $table->string('photo')->default('images/lapto/default.jpg');
            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('laptop_loan', function (Blueprint $table){
            $table->integer('loan_id')->unsigned();
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('cascade');
            $table->integer('laptop_id')->unsigned();
            $table->foreign('laptop_id')->references('id')->on('laptops')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('acompanie_laptop', function (Blueprint $table) {
            $table->integer('acompanie_id')->unsigned();
            $table->foreign('acompanie_id')->references('id')->on('acompanies')->onDelete('cascade');

            $table->integer('laptop_id')->unsigned();
            $table->foreign('laptop_id')->references('id')->on('laptops')->onDelete('cascade');

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
        Schema::drop('acompanie_laptop');
        Schema::drop('laptop_loan');
        Schema::drop('laptops');
    }
}
