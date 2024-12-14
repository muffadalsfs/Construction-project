<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enginner;
use Illuminate\Support\Facades\Storage;
class EnginnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enginner::create([
            
             'name'=>'rahul',
             'path' => 'image1.jpg',
             
         ]);   
    }
}
