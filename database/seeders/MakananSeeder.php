<?php

namespace Database\Seeders;

use App\Models\Makanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Makanan Pokok Golongan A
            ['nama' => 'Jagung Rebus', 'kalori' => 90.2, 'porsi' => 1],
            ['nama' => 'Kentang Rebus', 'kalori' => 166, 'porsi' => 1],
            ['nama' => 'Ketan Putih', 'kalori' => 217, 'porsi' => 2.75],
            ['nama' => 'Ketupat', 'kalori' => 32, 'porsi' => 0.5],
            ['nama' => 'Lontong', 'kalori' => 38, 'porsi' => 0.5],
            ['nama' => 'Nasi Putih', 'kalori' => 175, 'porsi' => 2.25],
            ['nama' => 'Nasi Putih Kentucky', 'kalori' => 349, 'porsi' => 4.25],
            ['nama' => 'Roti Tawar Serat Tinggi', 'kalori' => 149, 'porsi' => 1.75],
            ['nama' => 'Singkong Rebus', 'kalori' => 146, 'porsi' => 1.75],
            ['nama' => 'Talas Rebus', 'kalori' => 98, 'porsi' => 1.25],
            ['nama' => 'Ubi Rebus', 'kalori' => 125, 'porsi' => 1.5],

            // Lauk Pauk Golongan A
            ['nama' => 'Arsik', 'kalori' => 94.05, 'porsi' => 1],
            ['nama' => 'Ayam Bakar Bumbu Kuning', 'kalori' => 129.4, 'porsi' => 1.5],
            ['nama' => 'Ayam Panggang', 'kalori' => 164.3, 'porsi' => 3.25],
            ['nama' => 'Daging Panggang', 'kalori' => 150, 'porsi' => 1.75],
            ['nama' => 'Ikan Mas Pepes', 'kalori' => 143.5, 'porsi' => 1.75],
            ['nama' => 'Sambal Goreng Tempe', 'kalori' => 116, 'porsi' => 1.5],
            ['nama' => 'Telur Asin Rebus', 'kalori' => 138, 'porsi' => 1.75],
            ['nama' => 'Telur Ayam Rebus', 'kalori' => 97, 'porsi' => 1.25],
            ['nama' => 'Udang Rebus', 'kalori' => 91, 'porsi' => 1.25],

            // Sayur Golongan A
            ['nama' => 'Acar Kuning', 'kalori' => 53, 'porsi' => 0.5],
            ['nama' => 'Bening Bayam', 'kalori' => 18, 'porsi' => 0.25],
            ['nama' => 'Cah Labu Siam', 'kalori' => 41.6, 'porsi' => 0.5],
            ['nama' => 'Sayur Asam', 'kalori' => 88, 'porsi' => 1],
            ['nama' => 'Sop Ayam Kombinasi', 'kalori' => 95, 'porsi' => 1.25],
            ['nama' => 'Sop Bayam', 'kalori' => 78, 'porsi' => 1],
            ['nama' => 'Sop Kimlo', 'kalori' => 104, 'porsi' => 1.25],
            ['nama' => 'Sop Mutiara Jagung', 'kalori' => 113, 'porsi' => 1.5],
            ['nama' => 'Asop Ayong Misoa', 'kalori' => 106, 'porsi' => 1.25],
            ['nama' => 'Sop Telur Putih', 'kalori' => 116, 'porsi' => 1.5],

            // Minuman Golongan A
            ['nama' => 'Teh', 'kalori' => 0.4, 'porsi' => 2.8],
            ['nama' => 'Kopi', 'kalori' => 18, 'porsi' => 0.25],
            ['nama' => 'Juice Tomat', 'kalori' => 20, 'porsi' => 0.25],
            ['nama' => 'Juice Melon', 'kalori' => 35, 'porsi' => 0.5],

            // Masakan Siap Saji Golongan A
            ['nama' => 'Asinan', 'kalori' => 208, 'porsi' => 2.5],
            ['nama' => 'Toge Goreng', 'kalori' => 243, 'porsi' => 3],

            // Buah-Buahan Golongan A
            ['nama' => 'Apel', 'kalori' => 92, 'porsi' => 1],
            ['nama' => 'Apel Merah', 'kalori' => 82, 'porsi' => 1],
            ['nama' => 'Belimbing', 'kalori' => 80, 'porsi' => 0.75],
            ['nama' => 'Duku', 'kalori' => 81, 'porsi' => 1],
            ['nama' => 'Jambu Air', 'kalori' => 35.4, 'porsi' => 0.5],
            ['nama' => 'Jambu Biji', 'kalori' => 157, 'porsi' => 2],
            ['nama' => 'Jeruk Medan', 'kalori' => 46, 'porsi' => 0.5],
            ['nama' => 'Jeruk Pontianak', 'kalori' => 67, 'porsi' => 0.75],
            ['nama' => 'Jeruk Sunkist', 'kalori' => 40, 'porsi' => 0.5],
            ['nama' => 'Mangga Manalagi', 'kalori' => 72, 'porsi' => 1],
            ['nama' => 'Nanas', 'kalori' => 46, 'porsi' => 1.25],
            ['nama' => 'Pepaya', 'kalori' => 46, 'porsi' => 0.5],
            ['nama' => 'Pir', 'kalori' => 80, 'porsi' => 1],
            ['nama' => 'Pisang Rebus', 'kalori' => 136.5, 'porsi' => 1.75],
            ['nama' => 'Salak', 'kalori' => 63.6, 'porsi' => 0.75],
            ['nama' => 'Semangka', 'kalori' => 48, 'porsi' => 0.5],

            // Additional foods from other tables...
            ['nama' => 'Bakpia', 'kalori' => 68, 'porsi' => 1],
            ['nama' => 'Bakwan', 'kalori' => 270, 'porsi' => 3.25],
            ['nama' => 'Bika Ambon', 'kalori' => 99, 'porsi' => 1.25],
            ['nama' => 'Black Forrest', 'kalori' => 585, 'porsi' => 7.5],
            ['nama' => 'Cheese Cake', 'kalori' => 281, 'porsi' => 3.5],

            // Makanan Ringan
            ['nama' => 'Arem-arem', 'kalori' => 225, 'porsi' => 2.75],
            ['nama' => 'Bubur Kacang Ijo', 'kalori' => 102, 'porsi' => 1.25],
            ['nama' => 'Ketupat Ketan', 'kalori' => 218, 'porsi' => 2.75],
            ['nama' => 'Lemper', 'kalori' => 247, 'porsi' => 3],
            ['nama' => 'Lepet', 'kalori' => 210, 'porsi' => 2.5]
        ];

        Makanan::insert($data);
    }
}
