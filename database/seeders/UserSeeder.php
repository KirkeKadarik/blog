<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $defaultUserEmail = env('DEFAULT_USER_EMAIL', 'user@user.user');
        if(!User::where('email', $defaultUserEmail)->exists()) {
            User::factory()->create([
                'name' => env('DEFAULT_USER_NAME', 'User McUserface'),
                'email' => $defaultUserEmail,
                'password' => env('DEFAULT_USER_PASSWORD_HASH', Hash::make('password')),
            ]);
        }
    }
}
