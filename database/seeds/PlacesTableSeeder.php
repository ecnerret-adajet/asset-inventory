<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('places')->insert([
              array('name'=>'MANILA' ),
              array('name'=>'ILOILO' ),
              array('name'=>'BATAAN' ),
              array('name'=>'ISABELA' ),
              array('name'=>'CAPIZ' )    
        ]);
    }
}
