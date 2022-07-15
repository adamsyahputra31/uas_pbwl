<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'adam_syahputra@gmail.com',
            'name' => 'Adam Syahputra',
            'password' => Hash::make('password')
        ]);
    }
}
