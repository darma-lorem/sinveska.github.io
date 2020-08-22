<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	        App\User::create([
	       'name' => 'Dharma Putra',
	       'email' => 'darma@gmail.com',
	       'password' => bcrypt('secret'),
	       'role_id' => 1
		]);

		App\User::create([
		       'name' => 'Agus Arya',
		       'email' => 'agus@gmail.com',
		       'password' => bcrypt('secret'),
		       'role_id' => 2
		]);

		App\User::create([
		       'name' => 'Riska Dewi',
		       'email' => 'riska@gmail.com',
		       'password' => bcrypt('secret'),
		       'role_id' => 3
	]);
    }
}
