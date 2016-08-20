<?php

use Illuminate\Database\Seeder;

class AdepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adepartments')->insert([
          array('name'=>'Human Resource' ),
          array('name'=>'Technical Sales' ),
          array('name'=>'Plili Sales' ),
          array('name'=>'Trade Feeds' ),
          array('name'=>'Marketing' ),
          array('name'=>'Finance' ),
          array('name'=>'R&D Feeds' ),
          array('name'=>'QC / QA' ),
          array('name'=>'Feedmill Production' ),
          array('name'=>'Flourmill Production' ),
          array('name'=>'SPC' ),
          array('name'=>'R&D Flour' ),
          array('name'=>'Internal Audit' ),
          array('name'=>'Legal' ),
          array('name'=>'Operations' ),
          array('name'=>'IT Department' ),
          array('name'=>'Purchasing' ),
          array('name'=>'Administration' ),
          array('name'=>'Logistics' ),
          array('name'=>'Logistics' ),
          array('name'=>'QMD' ),
          array('name'=>'Import' ),
          array('name'=>'Tax' ),
          array('name'=>'Engineering' )
    
        ]);
    }
}
