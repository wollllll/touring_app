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
        $inserts = [];
        for ($i = 1; $i <= 1000; $i++) {
            $inserts[] = [
                'name' => 'test+' . $i,
                'email' => 'test+' . $i . '@test',
                'password' => Hash::make('testtest'),
                'profile' => 'プロフィールーーーーー'
            ];
        }

        DB::table('users')->insert($inserts);
    }
}
