<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// database clear
		DB::table('users')->delete();
        // database insert
        User::create([
			'name'     => 'Marcelo Leopold',
			'email'    => 'marceloleob@gmail.com',
			'password' => bcrypt('Marcelo#06'),
			'status'   => 1,
        ]);
    }
}
