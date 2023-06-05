<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratings = [
            [
                'product_id' => 1,
                'rating' => 5,
            ],
            [
                'product_id' => 2,
                'rating' => 5,
            ],
            [
                'product_id' => 3,
                'rating' => 5,
            ],
            [
                'product_id' => 4,
                'rating' => 5,
            ],
            [
                'product_id' => 5,
                'rating' => 5,
            ],
            [
                'product_id' => 6,
                'rating' => 5,
            ],
            [
                'product_id' => 7,
                'rating' => 5,
            ],
            [
                'product_id' => 8,
                'rating' => 5,
            ],
            [
                'product_id' => 9,
                'rating' => 5,
            ],
            [
                'product_id' => 10,
                'rating' => 5,
            ],
            [
                'product_id' => 11,
                'rating' => 5,
            ],
            [
                'product_id' => 12,
                'rating' => 5,
            ],
        ];

        Rating::insert($ratings);
    }
}
