<?php

use Illuminate\Database\Seeder;
use App\Harga;

class HargaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Harga::create([
            'id' => 1, 'harga' => '10000'
        ]);
    }
}
