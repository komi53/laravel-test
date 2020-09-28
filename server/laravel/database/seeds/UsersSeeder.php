<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        // テーブル内のデータを一旦全削除
        \Illuminate\Support\Facades\DB::table('users')->truncate();

        // データのインサート
        DB::table('users')->insert([
            [
                'name' => '山田 太郎',
                'email' => 'yamamoto@field.asia',
                'password' => '',
                'created_at' => '2021-06-07 21:00:00',
                'updated_at' => '2021-06-07 21:00:00'
            ],
            [
                'name' => '鈴木 一郎',
                'email' => 'yuya.miyazaki@field.asia',
                'password' => '',
                'created_at' => '2021-06-07 21:00:00',
                'updated_at' => '2021-06-07 21:00:00'
            ],
        ]);
    }
}
