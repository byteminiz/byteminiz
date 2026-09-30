<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'first_name' => 'Byte',
                'middle_name' => '',
                'last_name' => 'Miniz',
                'email' => 'byteminiz@gmail.com',
                'password' => Hash::make('admin@1234'), // Hashed password
                'role' => 'global_admin',
                'status' => 1,
                'phone_number' => '',
                'address' => '',
                'profile_picture' => null,
                'activation_token' => null,
                'remember_token' => null,
                'two_factor_auth' => 0,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
