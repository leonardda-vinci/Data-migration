<?php

use Illuminate\Database\Seeder;

class PassengerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$passenger = [
    		 'id_number' => '1234',
    		 'name' => 'Leonard',
    		 'contact_number' => '0109274',
    		 'address' => 'Tarlac City', 
    		 'Nationality' => 'Filipino', 
    		 'gender' => 'Male', 
    		 'age' => '21'
    	];
        DB::table('passenger')->insert($passenger);
    }
}
