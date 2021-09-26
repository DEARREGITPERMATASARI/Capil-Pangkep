<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
// use Illiminate\Support\Facades\User;
use\App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'id'      => 1,
            'username'=> 'admin',
            'password'=> bcrypt('admin'),
    ]);
    }
}
