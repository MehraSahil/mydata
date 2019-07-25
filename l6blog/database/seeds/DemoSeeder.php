<?php

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <30 ; $i++) { 
            # code...
        	DB::table('ajax_records')->insert([
        		'name' => str_random('4'),
        		'city' => str_random('8'),
        		'address' => str_random('14'),
        		'mobileno' => '9878767676',
        	]);
        }
    }
}
