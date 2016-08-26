<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('condition_code');
            $table->integer('user_id')->unsigned();
            $table->integer('asset_id')->unsigned()->nullable();
            $table->string('disposal_reason');
            $table->string('disposal_method');
            $table->timestamp('disposal_date');
            $table->string('market_value');
            $table->string('price');
            
              $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            
            
            $table->foreign('asset_id')
                ->references('id')
                ->on('assets')
                ->onDelete('cascade');
            $table->timestamps();
        });

            Schema::create('asset_disposal', function (Blueprint $table){
            $table->integer('disposal_id')->unsigned()->index();
            $table->foreign('disposal_id')->references('id')->on('disposals')->onDelete('cascade');
            
            $table->integer('asset_id')->unsigned()->index();
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');
            
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
        Schema::drop('asset_disposal');
        Schema::drop('disposals');
    }
}
