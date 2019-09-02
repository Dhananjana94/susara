<?php

use Illuminate\Database\Seeder;

class Instruments_exTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instrument_ex = new \App\Instruments_ex([
          'instrumentId' => '65',
          'category' => 'percussion',
          'price' => 27,
        ]);
        $instrument_ex->save();

    }
}
