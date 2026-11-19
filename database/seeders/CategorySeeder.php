<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_names = [
            'Software', 'Hardware','AI','Cloud','Engineering','Big Data','AWS'
        ];

        foreach($category_names as $name){

            category::factory()->create(['category_name' => $name , 'slug' => Str::slug($name)]);
        }
    }
}
