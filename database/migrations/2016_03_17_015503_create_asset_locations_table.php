<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('asset_location', function (Blueprint $table) {
          $table->integer('asset_id')->unsigned()->index();
          $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');
        
          $table->integer('location_id')->unsigned()->index();
          $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        
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
        Schema::drop('asset_location');
        Schema::drop('locations');
    }
}
