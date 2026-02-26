<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product1 = new Product();
        $product1->name = 'Televisor';
        $product1->description = 'Esta es la descripcion del televisor';
        $product1->price = 500;
        $product1->category_id = Category::inRandomOrder()->first()->id; 
        $product1->save();

        $product2 = new Product();
        $product2->name = 'Laptop';
        $product2->description = 'Esta es la descripcion de la laptop';
        $product2->price = 1000;
        $product2->category_id = Category::inRandomOrder()->first()->id;
        $product2->save();

        $product3 = new Product();
        $product3->name = 'Refrigerador';
        $product3->description = 'Esta es la descripcion del refrigerador';
        $product3->price = 800;
        $product3->category_id = Category::inRandomOrder()->first()->id;
        $product3->save();
    }
}
