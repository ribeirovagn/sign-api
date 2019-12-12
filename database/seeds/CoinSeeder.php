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
         * BTC / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $BTC->id,
            'ip' => "177.38.215.12",
            'key' => $OperationController->_encryptResponse("9A298C029AF6829A75BB7AAC163455B1CBE1812A05C00642161583FE06C6DF12"),
            'redeemScript' => $OperationController->_encryptResponse("52210292b2745de11dbfb0e6e4fda7ea10d732f0e3ecd73b06b8bc5decb6f15576c63f210323cfc4842d3c7a75a6f89cd33d624cd685b90ccc8be080aa108e944b58b2eadb21039982d028ab18602df7e78f9cd9fcc6fd1a5de31fd3be29eb13c5a1ce77e9504253ae"),
        ]);      
        
        /**
         * DASH / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $DASH->id,
            'ip' => "172.31.37.26",
            'key' => $OperationController->_encryptResponse("5b37cea71e4aac8f438ad42b55de2c55f0968d3b490a16bdf80b648f7a70ad4d"),
            'redeemScript' => $OperationController->_encryptResponse("52210211202e59066b60fb152c91f577043fc81c4cf146e8d9ec1fa152059f7d23ee692102c1c6be982145d9fda0387d8d78becd3e78cb6ae274688dd31dcb014393275c84210221000200301e64021367cefd76a01ba31d0adbf3cfd8e7aaa1c4d26cc02b87d253ae"),
        ]);

        /**
         * LITE / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $LTC->id,
            'ip' => "172.31.47.232",
            'key' => $OperationController->_encryptResponse("B32618C4454291804583CA14DA6F3702B0F08F5F9D009DE47C337636FA5AE2B1"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);

        /**
         * BCH / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $BCH->id,
            'ip' => "172.31.43.108",
            'key' => $OperationController->_encryptResponse("5b37cea71e4aac8f438ad42b55de2c55f0968d3b490a16bdf80b648f7a70ad4d"),
            'redeemScript' => $OperationController->_encryptResponse("522103c3e839f8f4e3839733d8c0c36ec958b2f80eb7eb291c3fd8c5638c979251a75f2102aaef2645ed9f93cfa0f6ecd655f38b85ba3c97b57f02974d73cba79e3645feca2103d4045cc46f8ef982daff9f10a0a4b7ebfbd531ae68792ce6976fb84772ddad1453ae"),
        ]);        


        /**
         * ZCASH / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $ZEC->id,
            'ip' => "172.31.40.183",
            'key' => $OperationController->_encryptResponse("ea699f9a7ce7afe84472c77fe91300537091ee292162c620adceb4e7a6ba0b08"),
            'redeemScript' => $OperationController->_encryptResponse("522103c3e839f8f4e3839733d8c0c36ec958b2f80eb7eb291c3fd8c5638c979251a75f2102aaef2645ed9f93cfa0f6ecd655f38b85ba3c97b57f02974d73cba79e3645feca2103d4045cc46f8ef982daff9f10a0a4b7ebfbd531ae68792ce6976fb84772ddad1453ae"),
        ]);   




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

    }
}
