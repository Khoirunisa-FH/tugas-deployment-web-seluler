<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat beberapa Kategori Utama
        $cat1 = Category::create(['name' => 'Elektronik & Gadget']);
        $cat2 = Category::create(['name' => 'Kamera & Fotografi']);
        $cat3 = Category::create(['name' => 'Kado & Aksesoris']);

        // 2. Buat Data Produk Dummy Lengkap dengan Deskripsi
        $products = [
            [
                'category_id' => $cat1->id,
                'name' => 'Smartphone Android 5G',
                'description' => 'RAM 8GB / 128GB, layar AMOLED mulus.',
                'price' => 2850000,
                'stock' => 15,
            ],
            [
                'category_id' => $cat1->id,
                'name' => 'Powerbank Fast Charging 20000mAh',
                'description' => 'Kapasitas besar, aman untuk dibawa traveling.',
                'price' => 250000,
                'stock' => 30,
            ],
            [
                'category_id' => $cat1->id,
                'name' => 'Headset Bluetooth Wireless',
                'description' => 'Suara jernih dengan fitur noise cancellation.',
                'price' => 350000,
                'stock' => 20,
            ],
            [
                'category_id' => $cat2->id,
                'name' => 'Kamera DSLR Canon EOS',
                'description' => 'Kondisi mulus, cocok untuk pemula dan dokumentasi event.',
                'price' => 4500000,
                'stock' => 4,
            ],
            [
                'category_id' => $cat2->id,
                'name' => 'Mirrorless Sony Alpha',
                'description' => 'Kamera mirrorless compact hasil tajam 4K.',
                'price' => 7500000,
                'stock' => 3,
            ],
            [
                'category_id' => $cat2->id,
                'name' => 'Tripod Kamera Profesional',
                'description' => 'Kokoh tinggi maksimal 1.5 meter bahan aluminium.',
                'price' => 175000,
                'stock' => 12,
            ],
            [
                'category_id' => $cat2->id,
                'name' => 'Lighting Ring Light LED 18 inch',
                'description' => 'Cocok untuk konten kreator dan photobooth.',
                'price' => 220000,
                'stock' => 8,
            ],
            [
                'category_id' => $cat3->id,
                'name' => 'Gift Box Aesthetic Custom',
                'description' => 'Kotak kado siap pakai untuk ulang tahun dan wisuda.',
                'price' => 45000,
                'stock' => 50,
            ],
            [
                'category_id' => $cat3->id,
                'name' => 'Bouquet Bunga Artificial Premium',
                'description' => 'Bunga tiruan awet tidak mudah layu.',
                'price' => 95000,
                'stock' => 25,
            ],
            [
                'category_id' => $cat3->id,
                'name' => 'Custom Mug Keramik & Sumpit',
                'description' => 'Paket hadiah unik cetak foto atau nama sendiri.',
                'price' => 65000,
                'stock' => 40,
            ],
            [
                'category_id' => $cat1->id,
                'name' => 'Smartwatch Fitness Tracker',
                'description' => 'Monitor detak jantung dan notifikasi pesan.',
                'price' => 450000,
                'stock' => 10,
            ],
            [
                'category_id' => $cat3->id,
                'name' => 'LED Strip Lampu Kamar RGB',
                'description' => 'Lampu hias kamar dengan remote control warna-warni.',
                'price' => 85000,
                'stock' => 35,
            ],
        ];

        foreach ($products as $prod) {
            Product::create($prod);
        }
    }
}