<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrivateKey;
use App\Coin;
use App\User;

class OperationController extends Controller {

    public function index(Request $request) {
        try {
            $input = $request->all();
            $input = $this->_decryptRequest($input[0]);
            $user = User::where('name', $input['offscreen'])->first();
            $coin = Coin::where('name', $input['coin'])->first();
            $PrivateKey = PrivateKey::where('user_id', $user->id)->where('coin_id', $coin->id)->first();
                        
            return $this->_encryptResponse($PrivateKey);

        } catch (\Exception $ex) {

            $error = [
                'error' => $ex->getMessage()
            ];

            return response($error, 422);
        }
    }

    /**
     * 
     * @param Request $request
     * @return type
     */
    public function _decryptRequest($request) {
        return decrypt($request);
    }

    /**
     * 
     * @param Request $request
     * @return type
     */
    public function _encryptResponse($response) {
        return encrypt($response);
    }

}
