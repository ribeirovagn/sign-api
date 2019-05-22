<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrivateKey;
use App\Coin;
use App\User;

class PrivateKeyController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $PrivateKeys = PrivateKey::all();
        $OperationController = new OperationController();

        $keys = [];

        foreach ($PrivateKeys as $PrivateKey) {
            $keys[] = [
                'user_id' => $PrivateKey->user_id,
                'coin_id' => $PrivateKey->coin_id,
                'ip' => $PrivateKey->ip,
                'key' => $OperationController->_decryptRequest($PrivateKey->key),
                'redeemScript' => $OperationController->_decryptRequest($PrivateKey->redeemScript)
            ];
        }

        return $keys;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $OperationController = new OperationController();
        try {
            $input = $request->all();

            $this->validate($input, [
                'user_id' => 'required',
                'coin_id' => 'required',
                'ip' => 'ip',
                'key' => 'required',
                'redeemScript' => 'required'
            ]);


            return PrivateKey::create([
                'user_id' => $input['user_id'],
                'coin_id' => $input['coin_id'],
                'ip' => $input['ip'],
                'key' => $OperationController->_encryptResponse($input['key']),
                'redeemScript' => $OperationController->_encryptResponse($input['redeemScript'])
            ]);
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Private_Key  $private_Key
     * @return \Illuminate\Http\Response
     */
    public function show($offscreen, $coin, $ip) {
        $OperationController = new OperationController();
        $user = User::where('name', $offscreen)->first();
        $coin = Coin::where('name', $coin)->first();
        $PrivateKey = PrivateKey::where('user_id', $user->id)
                ->where('coin_id', $coin->id)
                ->where('ip', $ip)
                ->first();

        return [
            'key' => $OperationController->_decryptRequest($PrivateKey->key),
            'redeemScript' => $OperationController->_decryptRequest($PrivateKey->redeemScript)
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Private_Key  $private_Key
     * @return \Illuminate\Http\Response
     */
    public function edit(Private_Key $private_Key) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Private_Key  $private_Key
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Private_Key $private_Key) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Private_Key  $private_Key
     * @return \Illuminate\Http\Response
     */
    public function destroy(Private_Key $private_Key) {
        //
    }

}
