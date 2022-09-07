<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Tag;
use App\Models\post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // post::truncate();
        // //post::truncate(); احذف كل شي ومن ثم انشاء
        // Tag::truncate();
        // // \App\Models\User::factory(10)->create();
        $this->call(CommentSeeder::class);

    }
}
