<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Postsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Test',
            'description' => 'This is test',
        ]);
        DB::table('posts')->insert([
            'title' => 'Test1',
            'description' => 'This is test1',
        ]);
        DB::table('posts')->insert([
            'title' => 'Test2',
            'description' => 'This is test2',
        ]);
        DB::table('posts')->insert([
            'title' => 'Test3',
            'description' => 'This is test3',
        ]);
        DB::table('posts')->insert([
            'title' => 'Test4',
            'description' => 'This is test4',
        ]);
        DB::table('posts')->insert([
            'title' => 'Test5',
            'description' => 'This is test5',
        ]);
    }
}
