<?php

use Illuminate\Database\Seeder;
use App\User;

class KeySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create([
            'name' => 'liquidex',
            'ip' => '127.0.0.1'
        ]);
        User::create([
            'name' => 'navi',
            'ip' => ''
        ]);
    }

}
