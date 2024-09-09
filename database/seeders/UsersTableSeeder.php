<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criação de dois usuários para teste
        User::create([
            'name' => 'Sanji',
            'email' => 'sanji@gmail.com',
            'password' => Hash::make('123456'), // Senha criptografada
        ]);

        User::create([
            'name' => 'Zoro',
            'email' => 'zoro@gmail.com',
            'password' => Hash::make('123456'), // Senha criptografada
        ]);
    }
}
