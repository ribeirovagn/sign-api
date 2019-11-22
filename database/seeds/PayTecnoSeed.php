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
        $paytecno = User::create([
            'name' => 'PayTecno',
        ]);


        $BTC = Coin::where('abbr', 'BTC')->first();
        $OperationController = new OperationController();


        /**
         * BTC / PayTecno
         */
        PrivateKey::create([
            'user_id' => $paytecno->id,
            'coin_id' => $BTC->id,
            'ip' => "172.31.67.199",
            'key' => $OperationController->_encryptResponse("329DDEEC58D0A1E99B6269F9CEA099D685874F0077803775DE3521A2A366EC75"),
            'redeemScript' => $OperationController->_encryptResponse("LUST I.T"),
        ]);

    }
}
