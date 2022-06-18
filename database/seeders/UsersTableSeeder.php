<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'test',
                'email' => 'test@test',
                'password' => Hash::make('testtest'),
                'profile' => 'プロフィール'
            ],
            [
                'name' => 'test+2',
                'email' => 'test+2@test',
                'password' => Hash::make('testtest'),
                'profile' => 'プロフィール'
            ]
        ];

        DB::table('users')->insert($users);
    }
}
