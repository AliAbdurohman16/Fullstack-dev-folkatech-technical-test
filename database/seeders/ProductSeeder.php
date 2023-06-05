<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'image' => 'product1.png',
                'name' => 'Abid Clever Dripper 102',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 480000,
                'category_id' => 1,
            ],
            [
                'image' => 'product2.png',
                'name' => 'Abid Clever Dripper 102',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 480000,
                'category_id' => 1,
            ],
            [
                'image' => 'product3.png',
                'name' => 'Abid Clever Dripper 102',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 480000,
                'category_id' => 1,
            ],
            [
                'image' => 'product4.png',
                'name' => 'Almond Biscuit',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 250000,
                'category_id' => 2,
            ],
            [
                'image' => 'product5.png',
                'name' => 'Aceh Gayo Coffee Beans',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 90000,
                'category_id' => 3,
            ],
            [
                'image' => 'product6.png',
                'name' => 'Blackpearl Coffee Beans',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 90000,
                'category_id' => 3,
            ],
            [
                'image' => 'product7.png',
                'name' => 'Bokasso #3',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 160000,
                'category_id' => 4,
            ],
            [
                'image' => 'product8.png',
                'name' => 'Ciwidey West Java Frinsa',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 104500,
                'category_id' => 5,
            ],
            [
                'image' => 'product9.png',
                'name' => 'Espresso Blend - Kungfu Kicks',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 185000,
                'category_id' => 2,
            ],
            [
                'image' => 'product10.png',
                'name' => 'Espresso Blend 1.0 - 200gr',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 99000,
                'category_id' => 5,
            ],
            [
                'image' => 'product11.png',
                'name' => 'Ethiopia Guji Washed',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 150000,
                'category_id' => 6,
            ],
            [
                'image' => 'product12.png',
                'name' => 'Flores Colol Coffee Beans',
                'description' => 'French Press merupakan salah satu teknik seduh manual yang simple, cukup untuk menyeduh air dan steep selama empat menit sebelum kamu menekan knob agar ampas bisa turun ke dasar.<br> Spesifikasi: <br> Dimensi : 11x16,5x8cm <br> Berat :350gr <br> Kapasitas : (240ml) <br> Warna : Abu-abu / Grey <br> Brand : Hario',
                'price' => 90000,
                'category_id' => 3,
            ],
        ];

        Product::insert($products);
    }
}
