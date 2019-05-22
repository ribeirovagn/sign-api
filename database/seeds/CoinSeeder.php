<?php

use Illuminate\Database\Seeder;
use App\Coin;
use App\PrivateKey;
use App\Http\Controllers\OperationController;
use App\User;

class CoinSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $liquidex = User::create([
            'name' => 'liquidex',
        ]);
        $navi = User::create([
            'name' => 'navi',
        ]);



        $BTC = Coin::create([
                    'name' => 'Bitcoin',
                    'abbr' => 'BTC',
        ]);
        $BCH = Coin::create([
                    'name' => 'BitcoinCash',
                    'abbr' => 'BCH',
        ]);
        $LTC = Coin::create([
                    'name' => 'Litecoin',
                    'abbr' => 'LTC',
        ]);
        $DASH = Coin::create([
                    'name' => 'DASH',
                    'abbr' => 'DASH',
        ]);
        $ZEC = Coin::create([
                    'name' => 'ZCash',
                    'abbr' => 'ZEC',
        ]);
        $DOGE = Coin::create([
                    'name' => 'Dogecoin',
                    'abbr' => 'DOGE',
        ]);
        $DCR = Coin::create([
                    'name' => 'Decred',
                    'abbr' => 'DCR',
        ]);
        $LSK = Coin::create([
                    'name' => 'Lisk',
                    'abbr' => 'LSK',
        ]);
        $STRAT = Coin::create([
                    'name' => 'Stratis',
                    'abbr' => 'STRAT',
        ]);
        $DGB = Coin::create([
                    'name' => 'DigiByte',
                    'abbr' => 'DGB',
        ]);
        $SMART = Coin::create([
                    'name' => 'SmartCash',
                    'abbr' => 'SMART',
        ]);
        $ZCR = Coin::create([
                    'name' => 'Zcore',
                    'abbr' => 'ZCR',
        ]);
        $ETH = Coin::create([
                    'name' => 'Ether',
                    'abbr' => 'ETH',
        ]);

        $OperationController = new OperationController();

        /**
         * BTC / Navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $BTC->id,
            'ip' => "127.0.0.1",
            'key' => $OperationController->_encryptResponse("1fbc6728a61caec3c8b935cc0ccd943f9ecdd13acaf1b0e85a721030f43c17191c62c12a7cb493a04acca26f67c785613f14"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem")
        ]);

        /**
         * BTC / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $BTC->id,
            'ip' => "172.31.14.179",
            'key' => $OperationController->_encryptResponse("1fbc6728a61caec3c8b935cc0ccd943f9ecdd13acaf1b0e85a721030f43c17191c62c12a7cb493a04acca26f67c785613f14"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem")
        ]);

        /**
         * DASH / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $DASH->id,
            'ip' => "172.31.35.87",
            'key' => $OperationController->_encryptResponse("zaq12wsx"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem")
        ]);

        /**
         * LITE / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $LTC->id,
            'ip' => "172.31.14.205",
            'key' => $OperationController->_encryptResponse("zaq12wsx"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem")
        ]);

        /**
         * BCH / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $BCH->id,
            'ip' => "172.31.2.158",
            'key' => $OperationController->_encryptResponse("zaq12wsx"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem")
        ]);

    }

}
