<?php

use Illuminate\Database\Seeder;

class OwnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owns')->insert([
          array('name'=>'Cpu'),
          array('name'=>'Keyboard'),
          array('name'=>'Laptop'),
          array('name'=>'Monitor'),
          array('name'=>'Mouse'),
          array('name'=>'Printer'),
          array('name'=>'Scanner'),
          array('name'=>'Cctv'),
          array('name'=>'Phones'),
          array('name'=>'Server'),
          array('name'=>'Switches'),
          array('name'=>'Firewalls'),
          array('name'=>'UPS'),
          array('name'=>'Fax'),
          array('name'=>'Microphones'),
          array('name'=>'TV-Monitor'),
          array('name'=>'Camera'),
          array('name'=>'Projector'),
          array('name'=>'Video-card'),
          array('name'=>'Printer-scanner'),
          array('name'=>'Hard-disk'),
          array('name'=>'Synology'),
          array('name'=>'Fortigate'),
          array('name'=>'Stock')
        ]);
    }
}
