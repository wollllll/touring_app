<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->find(1);
        $inserts = [
            [
                'user_id' => $user->id,
                'name' => '伊豆の吊り橋',
                'content' => '伊豆のつり橋ですー！！景色が最高！',
                'latitude' => 35.0889962,
                'longitude' => 138.9533645
            ],
            [
                'user_id' => $user->id,
                'name' => '伊豆の山',
                'content' => '伊豆の山ですー！！景色が最高！',
                'latitude' => 35.0809962,
                'longitude' => 138.9533645
            ],
            [
                'user_id' => $user->id,
                'name' => '伊豆の山だ伊豆の山だ伊豆の山だ伊豆の山だ伊豆の山だ伊豆の山だ伊豆の山だ伊豆の山だ伊豆の山だ',
                'content' => '伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！伊豆の山ですー！！景色が最高！',
                'latitude' => 35.1009962,
                'longitude' => 138.9533645
            ],
            [
                'user_id' => 2,
                'name' => 'ユーザー2',
                'content' => 'ユーザー2',
                'latitude' => 35.1009962,
                'longitude' => 138.8533645
            ]
        ];

        DB::table('spots')->insert($inserts);
    }
}
