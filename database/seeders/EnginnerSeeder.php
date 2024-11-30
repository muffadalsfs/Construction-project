<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enginner;
class EnginnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enginner::create([
            
             'name'=>'rahul',
             'path'=>'0zkpI0SkKrk5tjoRV0s4TPzpLFHTPnUFORwTGti0.jpg',
             
         ]);   
    }
}
