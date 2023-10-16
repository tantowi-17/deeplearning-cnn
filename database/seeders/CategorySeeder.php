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
                'category' => 'Happy',
                'description' => 'Happy atau perasaan senang adalah perasaan yang muncul saat kita menerima sesuatu yang baik. Misalnya saat mendapatkan hadiah, diizinkan membeli mainan yang diinginkan, saat memakan makanan kesukaan, dan hal-hal menyenangkan lainnya',
                'image' => 'happy.png',
            ],
            [
                'category' => 'Sad',
                'description' => 'Happy atau perasaan senang adalah perasaan yang muncul saat kita menerima sesuatu yang baik. Misalnya saat mendapatkan hadiah, diizinkan membeli mainan yang diinginkan, saat memakan makanan kesukaan, dan hal-hal menyenangkan lainnya',
                'image' => 'sad.png',
            ]
        ];

        Category::insert($createCtegory);
    }
}
