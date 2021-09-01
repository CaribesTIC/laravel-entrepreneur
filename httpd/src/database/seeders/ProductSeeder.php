<?php

namespace Database\Seeders;

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
        Product::create([
            "title" => "iPad 4 Mini",
            "price" => 500.01,
            "inventory" => 2 ,
            "photo" => "cafe.jpg"    
        ]);
        
        Product::create([
            "title" => "H&M T-Shirt White",
            "price" => 10.99 ,
            "inventory" => 10,
            "photo" => "cebolla.jpg"
        ]);
        
        Product::create([
            "title" => "Charli XCX - Sucker CD",
            "price" => 19.99 ,
            "inventory" => 5 ,
            "photo" => "patata.jpg"
        ]);
        
        Product::create([
            "title" => "Xharli XXX - Xucker CD",
            "price" => 29.99 ,
            "inventory" => 3 ,
            "photo" => "pina.jpg"
        ]);
        
        Product::create([
            "title" => "oPad 4 oini",
            "price" => 500.01,
            "inventory" => 2 ,
            "photo" => "cafe.jpg"
        ]);
        
        Product::create([
            "title" => "R&M R-Shirt White",
            "price" => 10.99 ,
            "inventory" => 10,
            "photo" => "cebolla.jpg"
        ]);
        
        Product::create([
            "title" => "Aharli ACX - Aucker CD",
            "price" => 19.99 ,
            "inventory" => 5 ,
            "photo" => "patata.jpg"
        ]);
        
        Product::create([
            "title" => "Zharli ZXX - Xucker CD",
            "price" => 29.99 ,
            "inventory" => 3 ,
            "photo" => "pina.jpg"
        ]);
    }
}
      
