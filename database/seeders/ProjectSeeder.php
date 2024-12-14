<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
           'title'=>'digital project',
            'name'=>'rahul',
            'Location'=>'mumbai',
            'value'=>'45core',
            'path' => 'image1.jpg',
            
        ]);
    }
}
