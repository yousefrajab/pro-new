<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        post::truncate();
        //post::truncate(); احذف كل شي ومن ثم انشاء
        Tag::truncate();
        // \App\Models\User::factory(10)->create();
        post::factory(100)->create();
        // معناها روح على فاكتوري وانشا 10000 قيمة
        Tag::factory(100)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
