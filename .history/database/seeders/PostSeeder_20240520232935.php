<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()-

        // DB::table('posts')->insert([
        //     'user_id' => 2,
        //     'title' => 'テストタイトル',
        //     'content' => 'テストコンテント',
        //     'created_at' => '2023-06-01 00:00:00',
        //     'updated_at' => '2023-06-01 00:00:00',
        // ]);
    }
}
