<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    public function run(): void
    {
        $this->call([
            Admin::class,
            BlogSeeder::class,
            ToolSeeder::class,
            EnginnerSeeder::class,
            ProjectSeeder::class,
            ServiceSeeder::class,
        ]);
    }

    
}
