<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tag_names = [
            'Gaming PC', 'Business','Cloud Computing','Personal','Technology','Music','Producing'
        ];

        foreach($tag_names as $name){
            Tag::factory()->create(['tag_name' => $name ]);
        }
    }
}
