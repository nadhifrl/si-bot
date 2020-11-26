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
            'id' => 1, 'user_id' => 1, 'jadwal' => 'Taman ini sudah buka mulai pagi sampai sore hari setiap hari kecuali hari Jumat. Pengunjung bisa datang dan berekreasi di taman wisata ini pada jam-jam tersebut. Hari Sabtu - Kamis, Jam 07.00 - 16.00'
        ]);
    }
}
