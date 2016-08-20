<?php

use Illuminate\Database\Seeder;

class AcompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acompanies')->insert([
          array('name'=>'PFMC' ),
          array('name'=>'LFUG'),
          array('name'=>'MGC'),
          array('name'=>'PLILI'),
          array('name'=>'MGPCI'),
          array('name'=>'CSCI'),
          array('name'=>'MTPCI'),
          array('name'=>'AGRISOL'),
          array('name'=>'LFMI'),
          array('name'=>'ALC'),
          array('name'=>'AMIGO AGRO'),
          array('name'=>'GLOBAL'),
          array('name'=>'IGCC'),
          array('name'=>'DTSI'),
          array('name'=>'ATH'),
          array('name'=>'EXCEL'),
          array('name'=>'ASC'),
          array('name'=>'Sweetreats'),
          array('name'=>'UGFI'),
          array('name'=>'RAFC')
    
        ]);
    }
}
