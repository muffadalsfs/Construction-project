<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Super Admin',
            'content' => 'jajajsjs',
            'path' => "0zkpI0SkKrk5tjoRV0s4TPzpLFHTPnUFORwTGti0.jpg", 
            'user_id' => 1,

            
        ]);
    }
}
