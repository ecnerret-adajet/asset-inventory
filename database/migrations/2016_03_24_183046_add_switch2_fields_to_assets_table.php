<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSwitch2FieldsToAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->string('hostname');
            $table->string('ip_address');
            $table->string('volume_capacity');
            $table->string('storage_memory');
            $table->string('storage_version');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->dropColumn('hostname');
            $table->dropColumn('ip_address');
            $table->dropColumn('volume_capacity');
            $table->dropColumn('storage_memory');
            $table->dropColumn('storage_version');
        });
    }
}
