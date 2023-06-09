<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Ubrukopi'],
            ['name' => 'G Coffee Roastery'],
            ['name' => 'Anomali Coffee'],
            ['name' => 'Titik Temu Roastery'],
            ['name' => 'Reirom Coffee Solution'],
            ['name' => 'Irenk Beans'],
        ];

        Category::insert($categories);
    }
}
