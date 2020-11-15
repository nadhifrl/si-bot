<?php

use Illuminate\Database\Seeder;
use App\Jadwal;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create([
            'id' => 1, 'jadwal' => 'dsadasdas'
        ]);
    }
}
