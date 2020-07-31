<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
			'name' => 'Jonatan',
			'lastname' => 'Arevalo Hernandez',
			'email' => 'kuroko.arevalo@gmail.com',
			'NoControl' => '14271000',
			'password' => bcrypt('Jonatelo_568923'),
			'admin' => true,
		]);

		User::create([
			'name' => 'Diana',
			'lastname' => 'Caamal Dominguez',
			'email' => 'nahunalvarez250@gmail.com',
			'NoControl' => '14271058',
			'password' => bcrypt('Jonatelo_568923'),
			'admin' => false,
		]);
    }
}
