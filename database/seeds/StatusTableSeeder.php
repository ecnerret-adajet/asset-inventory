<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('status')->insert([
            array('name'=>'Active' ),
              array('name'=>'Obsolete' ),
              array('name'=>'Replacement' ),
              array('name'=>'Supplemental' ),
              array('name'=>'Warranty' ),
              array('name'=>'Repair' )
    
        ]);
    }
}
