<?php

use Illuminate\Database\Seeder;

class kategori_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\kategori::class,5)->create();
    }
}
