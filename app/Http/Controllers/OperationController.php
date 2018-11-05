<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller {

    public function index(Request $request) {
        try {
            $input = $request->all();
            $input = $this->_decryptRequest($input[0]);


            $data = [
                'key' => config('services.sign.key'),
                'redeemScript' => config('services.sign.secret')
            ];
            
            return response($this->_encryptResponse($data), 200);
            
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
