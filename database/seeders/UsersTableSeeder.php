<?php

namespace Database\Seeders;

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
        //
        DB::table('users')->insert([
            ['username' => 'Atlas一郎',
            'email' => 'ichiro@atlas.com',
            'password' => Hash::make('abcde'),
            'bio' => '一郎です。宜しくお願いします。'
            ],
            ['username' => 'Atlas二郎',
            'email' => 'jiro@atlas.com',
            'password' => Hash::make('fghij'),
            'bio' => '二郎です。面白そう。'
            ],
            ['username' => 'Atlas三郎',
            'email' => 'saburo@atlas.com',
            'password' => Hash::make('happy'),
            'bio' => '三郎です。Be happy.'
            ],

        ]);
    }
}
