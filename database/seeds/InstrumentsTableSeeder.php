<?php

use Illuminate\Database\Seeder;

class InstrumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instrument = new \App\Instruments([
          'instrumentId' => '65',
          'instrumentName' => 'DD-65',
          'description' => 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-1.jpg',
          'category' => 'percussion',
          'price' => '27.00',
        ]);
        $instrument->save();

        $instrument = new \App\Instruments([
          'instrumentId' => '64',
          'instrumentName' => 'DTX400K',
          'description' => 'The DTX400K features 10 legendary drum kits and training functions plus newly developed drum pads, large cymbals and new silent kick unit.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-2.jpg',
          'category' => 'percussion',
          'price' => '23.00',
        ]);
        $instrument->save();

        $instrument = new \App\Instruments([
          'instrumentId' => '63',
          'instrumentName' => 'GM2FS',
          'description' => 'Gigmaker drum sets are available in two basic configurations and a range of colorful sparkle finishes that you can choose to match your musical and visual style.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-3.jpg',
          'category' => 'percussion',
          'price' => '37.00',
        ]);
        $instrument->save();

        $instrument = new \App\Instruments([
          'instrumentId' => '62',
          'instrumentName' => 'DD-65',
          'description' => 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-1.jpg',
          'category' => 'percussion',
          'price' => '28.00',
        ]);
        $instrument->save();

        $instrument = new \App\Instruments([
          'instrumentId' => '61',
          'instrumentName' => 'DD-65',
          'description' => 'Designed from a drummers point of view, the DD-65 features eight touch-sensitive pads, 2 drum pedals and AUX IN for playing along with your favorite MP3 player.',
          'imagepath' => 'dist/img/percussion-img/percussion-product-1.jpg',
          'category' => 'percussion',
          'price' => '21.00',
        ]);
        $instrument->save();
    }
}
