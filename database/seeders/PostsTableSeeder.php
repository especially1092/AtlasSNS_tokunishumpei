<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            ['user_id' => '1',
            'post' => '一郎です。始めました。よろしく。'],
            ['user_id' => '2',
            'post' => '二郎です。おもしろい！'],
            ['user_id' => '3',
            'post' => '三郎です。yeah.']
        ]);

    }
}
