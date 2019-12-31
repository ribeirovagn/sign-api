<?php

use App\Coin;
use App\Http\Controllers\OperationController;
use App\PrivateKey;
use App\User;
use Illuminate\Database\Seeder;

class PayTecnoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paytecno = User::where('name', 'PayTecno')->first();
        
        $BTC = Coin::where('abbr', 'BTC')->first();
        $LTC = Coin::where('abbr', 'LTC')->first();
        $LQX = Coin::where('abbr', 'LQX')->first();

        $OperationController = new OperationController();

        /**
         * BTC / PayTecno
         */
        // PrivateKey::create([
        //     'user_id' => $paytecno->id,
        //     'coin_id' => $BTC->id,
        //     'ip' => "177.38.215.19",
        //     'key' => $OperationController->_encryptResponse("329DDEEC58D0A1E99B6269F9CEA099D685874F0077803775DE3521A2A366EC75"),
        //     'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        // ]);

        PrivateKey::create([
            'user_id' => $paytecno->id,
            'coin_id' => $LTC->id,
            'ip' => "177.38.215.53",
            'key' => $OperationController->_encryptResponse("B1BAFD2819FD166A7042442760802918706ED844FE75A26E4D3F48B738C0CE1A"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);

        PrivateKey::create([
            'user_id' => $paytecno->id,
            'coin_id' => $LQX->id,
            'ip' => "177.38.215.52",
            'key' => $OperationController->_encryptResponse("5AEBBFEE68A5CF937ED33126DF9FF23DF979272454880AFF316E0096D626CAA8"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);

    }
}
