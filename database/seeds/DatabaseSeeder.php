<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(product_seeder::class);
        $this->call(kategori_seeder::class);
        $this->call(user_seeder::class);
    }
}
