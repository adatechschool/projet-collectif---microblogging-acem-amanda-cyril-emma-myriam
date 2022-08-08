<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // créer 2 publication (Post) factice :
    public function run()
    {
        \App\Models\Post::factory(2)->create();
    }
}
