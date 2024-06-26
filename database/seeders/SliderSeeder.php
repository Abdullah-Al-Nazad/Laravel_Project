<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Slider::factory(3)->create();
        \App\Models\Slider::factory()->create([
                'title' => 'Abdullah',
                'details' => 'test@example.com',
                'photo' => 'te.jpg',
            ]);
    }
}
