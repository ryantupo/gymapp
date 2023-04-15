<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\User_extended_detail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'Ryan Tuplin',
            'email' => 'ryantupo98@gmail.com',
            'password' => '$2y$10$VIS7bBDH2atzOJwz66zY9.F18CDogrxp9yXZ0if.9VADjTcWthVLO',
            'remember_token' => Str::random(10),
        ]);
        $user->save();
    }
}
