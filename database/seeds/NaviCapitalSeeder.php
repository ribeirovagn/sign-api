<?php


use App\Coin;
use App\Http\Controllers\OperationController;
use App\PrivateKey;
use App\User;
use Illuminate\Database\Seeder;

use Illuminate\Database\Seeder;

class NaviCapitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * BTC / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $BTC->id,
            'ip' => "3.219.68.171",
            'key' => $OperationController->_encryptResponse("2B225AD3AA04A411812CE0DD138635347D407E056E9C6BA636F3F4C1614650CC"),
            'redeemScript' => $OperationController->_encryptResponse("VAGN_BLOCKCHAINIUS"),
        ]);      
        
        /**
         * DASH / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $DASH->id,
            'ip' => "54.173.190.32",
            'key' => $OperationController->_encryptResponse("4D6C0EE1291179592192D60EE9049799E70BAFAFA8C3DE35088DFA913C4BF1D8"),
            'redeemScript' => $OperationController->_encryptResponse("VAGN_BLOCKCHAINIUS"),
        ]);

        /**
         * LITE / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $LTC->id,
            'ip' => "3.83.86.185",
            'key' => $OperationController->_encryptResponse("B32618C4454291804583CA14DA6F3702B0F08F5F9D009DE47C337636FA5AE2B1"),
            'redeemScript' => $OperationController->_encryptResponse("VAGN_BLOCKCHAINIUS"),
        ]);

        /**
         * BCH / navi
         */
        PrivateKey::create([
            'user_id' => $navi->id,
            'coin_id' => $BCH->id,
            'ip' => "3.86.82.13",
            'key' => $OperationController->_encryptResponse("7E9DBC721298F90175C8B5D23604E18BDE67280EC54A30E332386A821668AE29"),
            'redeemScript' => $OperationController->_encryptResponse("VAGN_BLOCKCHAINIUS"),
        ]);        
    }
}
