<?php

use Illuminate\Database\Seeder;

class SaranaTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sarana::class,10)->create();
    }
}
