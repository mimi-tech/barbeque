<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		User::create([
			'name'  => 'Miriam Onuoha',
			'email' =>  'mimi@gmail.com',
			'password' => Hash::make('abc123'),
			'remember_token' => str_random(10),
		]);
    }
}
