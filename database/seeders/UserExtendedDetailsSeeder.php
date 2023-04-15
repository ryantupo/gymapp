<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\User_extended_detail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserExtendedDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'ryantupo98@gmail.com')->first();
        $user_extended_details = new User_extended_detail([
            'user_id' => $user['id'],
        ]);
        $user_extended_details->save();
    }
}
