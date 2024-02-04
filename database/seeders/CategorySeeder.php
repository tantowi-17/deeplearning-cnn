<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createCtegory = [
            [
                'category' => 'MARAH',
                'description' => 'Ekspresi ini terjadi ketika seseorang merasa marah atau kesal. Wajah biasanya menunjukkan ketegangan, alis yang mengkerut, bibir yang menyatu, dan mata yang menyipit.',
                'image' => 'MARAH.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'SENANG',
                'description' => 'Ekspresi senang terjadi saat seseorang merasa bahagia atau gembira. Wajah biasanya memperlihatkan senyum, mata yang bersinar, dan bibir yang melengkung ke atas.',
                'image' => 'SENANG.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'SEDIH',
                'description' => 'Ekspresi sedih muncul ketika seseorang merasa sedih atau tertekan. Wajah bisa menampilkan bibir yang turun, mata yang berkaca-kaca, dan alis yang mengarah ke bawah.',
                'image' => 'SEDIH.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'KAGET',
                'description' => 'Ekspresi kaget terjadi ketika seseorang tiba-tiba terkejut atau terkejut oleh sesuatu. Wajah sering menunjukkan mata yang melebar, bibir yang terbuka, dan ekspresi umum kebingungan.',
                'image' => 'KAGET.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'NETRAL',
                'description' => 'Ekspresi netral adalah ekspresi wajah yang tidak mengungkapkan emosi apa pun. Wajah tampak tenang dan tidak menunjukkan tanda-tanda ekspresi emosional tertentu.',
                'image' => 'NETRAL.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'JIJIK',
                'description' => 'Ekspresi ini terjadi saat seseorang merasa jijik atau tidak suka terhadap sesuatu. Wajah biasanya menampilkan kerutan pada hidung dan bibir yang miring ke bawah.',
                'image' => 'JIJIK.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'TAKUT',
                'description' => 'Ekspresi takut terjadi ketika seseorang merasa ketakutan atau cemas. Wajah bisa menampilkan mata yang melebar, alis yang terangkat, dan bibir yang terkatup.',
                'image' => 'TAKUT.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Category::insert($createCtegory);
    }
}
