<?php

use App\Coin;
use App\Http\Controllers\OperationController;
use App\PrivateKey;
use App\User;
use Illuminate\Database\Seeder;

class CoinSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $liquidex = User::create([
            'name' => 'liquidex',
        ]);
        $navi = User::create([
            'name' => 'navi',
        ]);
        $navipay = User::create([
            'name' => 'navipay',
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
        $LQX = Coin::create([
            'name' => 'LQX',
            'abbr' => 'LQX',
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
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);

        /**
         * BTC / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $BTC->id,
            'ip' => "172.31.14.179",
            'key' => $OperationController->_encryptResponse("1fbc6728a61caec3c8b935cc0ccd943f9ecdd13acaf1b0e85a721030f43c17191c62c12a7cb493a04acca26f67c785613f14"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);

        /**
         * DASH / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $DASH->id,
            'ip' => "172.31.35.87",
            'key' => $OperationController->_encryptResponse("5b37cea71e4aac8f438ad42b55de2c55f0968d3b490a16bdf80b648f7a70ad4d"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);

        /**
         * LITE / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $LTC->id,
            'ip' => "172.31.14.205",
            'key' => $OperationController->_encryptResponse("983b911c3b0af63818a15f995447f4d424a155d4092f46a0ecf30b11e5e43b3a"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);

        /**
         * BCH / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $BCH->id,
            'ip' => "172.31.2.158",
            'key' => $OperationController->_encryptResponse("5b37cea71e4aac8f438ad42b55de2c55f0968d3b490a16bdf80b648f7a70ad4d"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);
        /**
         * LQX / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $LQX->id,
            'ip' => "172.31.31.242",
            'key' => $OperationController->_encryptResponse("4B4CEE42FFC0111BAD1155898ED5BF336DF752E8303D5EBA6B695F27ECFF09A3"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);
        
        
        
        
        /////////////////  ///////////////////////////
        ////////////////  ////////////////////////////
        /////////////////////  ///////////////////////
        ////////////////////  ////////////////////////
        ///////////////////  /////////////////////////
        ////////////////////  ////////////////////////
        /////////////////////  ///////////////////////
        //////////////////////  //////////////////////
        ///////////////////////  /////////////////////
        ////////////////////////  ////////////////////
        ///////////////////////  /////////////////////
        //////////////////////  //////////////////////
        /////////////////////  ///////////////////////
        ////////////////////  ////////////////////////
        //////////////////////  //////////////////////
        ////////////////////////  ////////////////////
        
        
        /**
         * LQX / NAVIPAY
         */
        PrivateKey::create([
            'user_id' => $navipay->id,
            'coin_id' => $LQX->id,
            'ip' => "52.23.55.199",
            'key' => $OperationController->_encryptResponse("1A0ABF27B294583CE8C1DA5B10C883CCFAD28B099BF2C87443786426ABEBD3D7"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);
        
        /**
         * BTC / NAVIPAY
         */
        PrivateKey::create([
            'user_id' => $navipay->id,
            'coin_id' => $BTC->id,
            'ip' => "3.219.68.171",
            'key' => $OperationController->_encryptResponse("2B225AD3AA04A411812CE0DD138635347D407E056E9C6BA636F3F4C1614650CC"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);      
        

        /**
         * DASH / NAVIPAY
         */
        PrivateKey::create([
            'user_id' => $navipay->id,
            'coin_id' => $DASH->id,
            'ip' => "3.85.71.117",
            'key' => $OperationController->_encryptResponse("4D6C0EE1291179592192D60EE9049799E70BAFAFA8C3DE35088DFA913C4BF1D8"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);

        /**
         * LITE / NAVIPAY
         */
        PrivateKey::create([
            'user_id' => $navipay->id,
            'coin_id' => $LTC->id,
            'ip' => "3.223.22.142",
            'key' => $OperationController->_encryptResponse("B32618C4454291804583CA14DA6F3702B0F08F5F9D009DE47C337636FA5AE2B1"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);

        /**
         * BCH / NAVIPAY
         */
        PrivateKey::create([
            'user_id' => $navipay->id,
            'coin_id' => $BCH->id,
            'ip' => "3.222.62.152",
            'key' => $OperationController->_encryptResponse("7E9DBC721298F90175C8B5D23604E18BDE67280EC54A30E332386A821668AE29"),
            'redeemScript' => $OperationController->_encryptResponse("TESTING redeem"),
        ]);
    }

}
