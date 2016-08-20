<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('stocks')->insert([
            array('name'=>'N/A' ),
              array('name'=>'Stockroom ' ),
              array('name'=>'Spare Assets' )
        ]);
    }
}
