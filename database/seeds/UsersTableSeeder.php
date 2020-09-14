<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
        	'name' => 'Juan',
        	'email' => 'juan96saa@gmail.com',
        	'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Lisbeth',
            'email' => 'lisbeth@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
