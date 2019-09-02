<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'productname' => 'DD-65',
          'description' => 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-1.jpg',
          'price' => 27
        ]);
        $product->save();

        $product = new \App\Product([
          'productname' => 'DTX400K',
          'description' => 'The DTX400K features 10 legendary drum kits and training functions plus newly developed drum pads, large cymbals and new silent kick unit.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-2.jpg',
          'price' => 27
        ]);
        $product->save();

        $product = new \App\Product([
          'productname' => 'GM2FS',
          'description' => 'Gigmaker drum sets are available in two basic configurations and a range of colorful sparkle finishes that you can choose to match your musical and visual style.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-3.jpg',
          'price' => 27
        ]);
        $product->save();

        $product = new \App\Product([
          'productname' => 'DD-65',
          'description' => 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-1.jpg',
          'price' => 27
        ]);
        $product->save();

        $product = new \App\Product([
          'productname' => 'DD-65',
          'description' => 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-1.jpg',
          'price' => 27
        ]);
        $product->save();
    }
}
