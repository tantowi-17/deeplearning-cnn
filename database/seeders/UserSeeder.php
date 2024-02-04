<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('pass1234'),
                'role' => 'ADMIN',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'kasir 1',
                'email' => 'kasir1@gmail.com',
                'password' => Hash::make('pass1234'),
                'role' => 'KASIR_1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'kasir 2',
                'email' => 'kasir2@gmail.com',
                'password' => Hash::make('pass1234'),
                'role' => 'KASIR_2',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        User::insert($users);
    }
}
