<?php

use Illuminate\Database\Seeder;
use App\Coin;
use App\PrivateKey;
use App\Http\Controllers\OperationController;

class CoinSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Coin::create([
            'name' => 'Bitcoin',
            'abbr' => 'BTC',
        ]);
        Coin::create([
            'name' => 'BitcoinCash',
            'abbr' => 'BCH',
        ]);
        Coin::create([
            'name' => 'Litecoin',
            'abbr' => 'LTC',
        ]);
        Coin::create([
            'name' => 'DASH',
            'abbr' => 'DASH',
        ]);
        Coin::create([
            'name' => 'ZCash',
            'abbr' => 'ZEC',
        ]);
        Coin::create([
            'name' => 'Dogecoin',
            'abbr' => 'DOGE',
        ]);
        Coin::create([
            'name' => 'Decred',
            'abbr' => 'DCR',
        ]);
        Coin::create([
            'name' => 'Lisk',
            'abbr' => 'LSK',
        ]);
        Coin::create([
            'name' => 'Stratis',
            'abbr' => 'STRAT',
        ]);
        Coin::create([
            'name' => 'DigiByte',
            'abbr' => 'DGB',
        ]);
        Coin::create([
            'name' => 'SmartCash',
            'abbr' => 'SMART',
        ]);
        Coin::create([
            'name' => 'Zcore',
            'abbr' => 'ZCR',
        ]);
        Coin::create([
            'name' => 'Ether',
            'abbr' => 'ETH',
        ]);

        $OperationController = new OperationController();

        PrivateKey::create([
            'user_id' => 2,
            'coin_id' => 1,
            'key' => $OperationController->_encryptResponse("TESTING key"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem")
        ]);
    }

}
