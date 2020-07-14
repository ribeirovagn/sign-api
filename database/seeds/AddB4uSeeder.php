<?php

use App\Coin;
use App\Http\Controllers\OperationController;
use App\PrivateKey;
use App\User;
use Illuminate\Database\Seeder;

class AddB4uSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b4u = User::create([
            'name' => 'B4U'
        ]);
        
        $BTC = Coin::where('abbr', 'BTC')->first();
        $LTC = Coin::where('abbr', 'LTC')->first();
        $LQX = Coin::where('abbr', 'LQX')->first();
        $DASH = Coin::where('abbr', 'DASH')->first();

        $OperationController = new OperationController();

        PrivateKey::create([
            'user_id' => $b4u->id,
            'coin_id' => $BTC->id,
            'ip' => "177.38.215.69",
            'key' => $OperationController->_encryptResponse("073ab4d9ec6fe12db4bae17f53d5ccf5966a498005eff0e032a8ebcb29b74d77"),
            'redeemScript' => $OperationController->_encryptResponse("B4U BTC Signed"),
        ]);

        PrivateKey::create([
            'user_id' => $b4u->id,
            'coin_id' => $LQX->id,
            'ip' => "177.38.215.66",
            'key' => $OperationController->_encryptResponse("3beb0f3d9d0df5892bca83dd2bf78594f0c753aa280deabadf77d578b6c3c544"),
            'redeemScript' => $OperationController->_encryptResponse("B4U LQX Signed"),
        ]);

        PrivateKey::create([
            'user_id' => $b4u->id,
            'coin_id' => $LTC->id,
            'ip' => "177.38.215.71",
            'key' => $OperationController->_encryptResponse("1aebb8fea8ccfb03c20c3c1011e4696dac78e5e345107247076a246c36fe6588"),
            'redeemScript' => $OperationController->_encryptResponse("B4U LTC Signed"),
        ]);

        PrivateKey::create([
            'user_id' => $b4u->id,
            'coin_id' => $DASH->id,
            'ip' => "177.38.215.70",
            'key' => $OperationController->_encryptResponse("986888aec75bcecef8db18c29717e55fc719507317aa862c9de0eacce1016b34"),
            'redeemScript' => $OperationController->_encryptResponse("B4U DASH Signed"),
        ]);

    }
}
