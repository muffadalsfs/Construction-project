<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'bulding',
            'content' => 'jajajsjs',
            'path' => "0zkpI0SkKrk5tjoRV0s4TPzpLFHTPnUFORwTGti0.jpg", 
            
        ]);
    }
}
