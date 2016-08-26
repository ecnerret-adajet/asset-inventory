<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        
        $this->call(AdepartmentsTableSeeder::class);
        $this->call(AcompaniesTableSeeder::class);
        $this->call(OwnsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        
        
      
    }
}
