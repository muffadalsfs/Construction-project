<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tool;
class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tool::create([
            
            'name'=>'rahul',
            'price'=>55,
            'path'=>'0zkpI0SkKrk5tjoRV0s4TPzpLFHTPnUFORwTGti0.jpg',
            
        ]);   
    }
}
