<?php

use Illuminate\Database\Seeder;
use App\Coin;
use App\Http\Controllers\OperationController;
use App\PrivateKey;
use App\User;


class AddB4uLQX2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $b4u = User::where('name', 'B4U')->first();
        $LQX = Coin::where('abbr', 'LQX')->first();

        $OperationController = new OperationController();

        PrivateKey::create([
            'user_id' => $b4u->id,
            'coin_id' => $LQX->id,
            'ip' => "177.38.215.72",
            'key' => $OperationController->_encryptResponse("b63f189d07df9fe9b6a0e1fab65ca7c555096a3e160bd7880f399f7dc31693fa"),
            'redeemScript' => $OperationController->_encryptResponse("B4U LQX Signed"),
        ]);        
    }
}
