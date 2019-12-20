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
        $infinity = User::create([
            'name' => 'infinity',
        ]);
        $interpags = User::create([
            'name' => 'interpags',
        ]);
        $infinitypay = User::create([
            'name' => 'infinitypay',
        ]);

        $gateway = User::create([
            'name' => 'gateway',
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
         * BTC / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $BTC->id,
            'ip' => "177.38.215.12",
            'key' => $OperationController->_encryptResponse("1fbc6728a61caec3c8b935cc0ccd943f9ecdd13acaf1b0e85a721030f43c17191c62c12a7cb493a04acca26f67c785613f14"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);

        /**
         * DASH / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $DASH->id,
            'ip' => "177.38.215.13",
            'key' => $OperationController->_encryptResponse("5b37cea71e4aac8f438ad42b55de2c55f0968d3b490a16bdf80b648f7a70ad4d"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);

        /**
         * LITE / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $LTC->id,
            'ip' => "177.38.215.10",
            'key' => $OperationController->_encryptResponse("983b911c3b0af63818a15f995447f4d424a155d4092f46a0ecf30b11e5e43b3a"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);

        /**
         * BCH / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $BCH->id,
            'ip' => "177.38.215.9",
            'key' => $OperationController->_encryptResponse("5b37cea71e4aac8f438ad42b55de2c55f0968d3b490a16bdf80b648f7a70ad4d"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);
        /**
         * LQX / Liquidex
         */
        PrivateKey::create([
            'user_id' => $liquidex->id,
            'coin_id' => $LQX->id,
            'ip' => "177.38.215.8",
            'key' => $OperationController->_encryptResponse("4B4CEE42FFC0111BAD1155898ED5BF336DF752E8303D5EBA6B695F27ECFF09A3"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
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
         * BTC / INFINITY
         */
        PrivateKey::create([
            'user_id' => $infinity->id,
            'coin_id' => $BTC->id,
            'ip' => "177.38.215.12",
            'key' => $OperationController->_encryptResponse("2B225AD3AA04A411812CE0DD138635347D407E056E9C6BA636F3F4C1614650CC"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);      
        

        /**
         * BCH / INFINITY
         */
        PrivateKey::create([
            'user_id' => $infinity->id,
            'coin_id' => $BCH->id,
            'ip' => "177.38.215.14",
            'key' => $OperationController->_encryptResponse("06439B3D0D7B6CC838DFA3D208843F57B10972FDC5509157E4B1AB1766B29FBC"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);      


        /**
         * DASH / INFINITY
         */
        PrivateKey::create([
            'user_id' => $infinity->id,
            'coin_id' => $DASH->id,
            'ip' => "177.38.215.16",
            'key' => $OperationController->_encryptResponse("4ED184B1E3F0A7D1C1A1F11CA2C45791485F895F156BBDDC43355193D4B12336"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);      


        /**
         * LTC / INFINITY
         */
        PrivateKey::create([
            'user_id' => $infinity->id,
            'coin_id' => $LTC->id,
            'ip' => "177.38.215.15",
            'key' => $OperationController->_encryptResponse("23FEF12CD568178A97827606E4ED8241419FABC8449A792A25ABE7E0C97E6685"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);      

        /**
         * 
         * 
         * 
        \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
         \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
          \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
           \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
           ||||||||||||||||||||||||||||||||||||||||||||||||||
           ||||||||||||||||||||||||||||||||||||||||||||||||||
           ||||||||||||||||||||||||||||||||||||||||||||||||||
           ||||||||||||||||||||||||||||||||||||||||||||||||||
           //////////////////////////////////////////////////
          //////////////////////////////////////////////////
         //////////////////////////////////////////////////
        //////////////////////////////////////////////////
            ||||||||||||||||||||||||||||||||||||||||||||||||||
            ||||||||||||||||||||||||||||||||||||||||||||||||||
            ||||||||||||||||||||||||||||||||||||||||||||||||||
            ||||||||||||||||||||||||||||||||||||||||||||||||||                   
        \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
         \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
          \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
           \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
            ||||||||||||||||||||||||||||||||||||||||||||||||||
            ||||||||||||||||||||||||||||||||||||||||||||||||||
            ||||||||||||||||||||||||||||||||||||||||||||||||||
            ||||||||||||||||||||||||||||||||||||||||||||||||||           
           //////////////////////////////////////////////////
          //////////////////////////////////////////////////
         //////////////////////////////////////////////////
        //////////////////////////////////////////////////
        ||||||||||||||||||||||||||||||||||||||||||||||||||
        ||||||||||||||||||||||||||||||||||||||||||||||||||
        ||||||||||||||||||||||||||||||||||||||||||||||||||
        ||||||||||||||||||||||||||||||||||||||||||||||||||
        */

 


        /**
         * BTC / InterPags
         */
        PrivateKey::create([
            'user_id' => $interpags->id,
            'coin_id' => $BTC->id,
            'ip' => "177.38.215.12",
            'key' => $OperationController->_encryptResponse("d02d7814e1889f71089a7ef6c889c675f8a7e08da7f7929a6e11aeff21451721"),
            'redeemScript' => $OperationController->_encryptResponse("vagner_ribeiro"),
        ]);      


         /**
         * BTC / Infinity
         */
        PrivateKey::create([
            'user_id' => $infinitypay->id,
            'coin_id' => $BTC->id,
            'ip' => "177.38.215.12",
            'key' => $OperationController->_encryptResponse("6A5E7BB4CE1A004FF1FA8E30B58527D23B8B62B8ED9BA8F1F795B23009DF2D08"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);


         /**
         * LQX / Gateway
         */
        PrivateKey::create([
            'user_id' => $gateway->id,
            'coin_id' => $LQX->id,
            'ip' => "177.38.215.22",
            'key' => $OperationController->_encryptResponse("BB59225F9A58CE62D3466FAB58B47A243FE76220E2F206D1A5A10F7791D1930F"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);

    }
}
