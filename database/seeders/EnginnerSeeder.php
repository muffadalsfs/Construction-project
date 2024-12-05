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
             'path'=>'{{storage/public/1.jpeg}}',
             
         ]);   
    }
}
