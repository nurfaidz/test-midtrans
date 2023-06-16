<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = [
            [
                'name' => 'Shirt',
                'image' => 'img/shirt.jpg',
                'price' => 25000,
            ],
            [
                'name' => 'Pants',
                'image' => 'img/pants.jpg',
                'price' => 50000,
            ]
        ];

        foreach ($shop as $item) {
            Shop::create($item);
        }
    }
}
