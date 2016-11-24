<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('supplier');
            $table->text('unit_type');
            $table->string('model');
            $table->string('serial');
            $table->string('user_leased');
            $table->timestamp('date_received');
            $table->timestamp('end_contract');
            $table->timestamp('date_surrender');
            $table->string('photo')->default('default.jpg');
            $table->timestamps();
        });

        Schema::create('acompanie_lease', function(Blueprint $table){
            $table->integer('acompanie_id')->unsigned();
            $table->foreign('acompanie_id')->references('id')
                ->on('acompanies')->onDelete('cascade');
            $table->integer('lease_id')->unsigned();
            $table->foreign('lease_id')->references('id')
                ->on('leases')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('adepartment_lease', function(Blueprint $table){
            $table->integer('adepartment_id')->unsigned();
            $table->foreign('adepartment_id')->references('id')
                ->on('adepartments')->onDelete('cascade');
            $table->integer('lease_id')->unsigned();
            $table->foreign('lease_id')->references('id')
                ->on('leases')->onDelete('cascade');
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
        Schema::drop('adepartment_lease');
        Schema::drop('acompanie_lease');
        Schema::drop('leases');
    }
}
