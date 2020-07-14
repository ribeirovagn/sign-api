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
//         $this->call(KeySeeder::class);
         $this->call(CoinSeeder::class);
         $this->call(AddB4uSeeder::class);
    }
}
