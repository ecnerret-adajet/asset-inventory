<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('brand');
            $table->string('model');
            $table->string('serial_number');
            $table->string('product_number');
            $table->integer('asset_year');
            $table->string('it_code');
            $table->string('finance_code');
            
            /* components */
            
            $table->string('processor_name');
            $table->string('processor_frequency');
            $table->string('processor_serial');
            $table->string('processor_manufacture');
            $table->string('memory_name');
            $table->string('memory_serial');
            $table->string('memory_type');
            $table->string('memory_size');
            $table->string('hd_name');
            $table->string('hd_serial');
            $table->string('hd_manufacture');
            $table->string('hd_capacity');
            $table->string('grapic_name');
            $table->string('sound_name');
            $table->string('network_name');
            $table->string('network_mac');
            $table->string('netework_ip');
            $table->string('serial_port');
            $table->string('usb_port');
            $table->string('parallel_port');
            $table->string('ethernet_port');
            $table->string('wifi_port');
            
            /* purchases */
            
            $table->string('budget_code');
            $table->string('purchase_name');
            $table->string('purchase_company');
            $table->timestamp('purchase_date');
            $table->string('purchase_officer');
            $table->string('vendor_name');
            $table->string('vendor_person');
            $table->string('vendor_number');
            $table->string('vendor_address');
            $table->string('vendor_terms');
            $table->timestamp('pr_date');
            $table->string('pr_number');
            $table->string('po_status');
            $table->timestamp('acquisition_date');
            $table->timestamp('warranty_date');
            $table->timestamp('delivery_date');
            $table->timestamp('year_disposal');
            $table->string('product_code');
            $table->string('product_description');
            $table->integer('product_quantity');
            $table->integer('product_price');
            $table->integer('product_total');
            $table->integer('product_sub');
            $table->integer('product_discount');
            $table->integer('product_net');
            $table->integer('prodcut_ship');
            $table->integer('product_grand');
            
            $table->string('transfer_reason');
            $table->string('disposal_reason');
            $table->string('trasfer_name');
            
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('asset_assignee', function (Blueprint $table){
            $table->integer('asset_id')->unsigned()->index();
            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade');
            
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
        Schema::drop('asset_assignee');
        Schema::drop('assets');
    }
}
