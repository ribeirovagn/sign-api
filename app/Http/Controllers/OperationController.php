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
            $privateKeyController = new PrivateKeyController();
            $PrivateKey = $privateKeyController->show($input['offscreen'], $input['coin'], $request->ip());
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
