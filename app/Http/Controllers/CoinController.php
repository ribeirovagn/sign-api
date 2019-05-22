<?php

namespace App\Http\Controllers;

use App\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Coin::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();

        try {

            return Coin::create([
                'name' => $input['name'],
                'abbr' => $input['abbr'],
            ]);
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coin  $coin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coin $coin) {
        $input = $request->all();

        try {
            $coin = Coin::find($id);
            $coin->name = $input['name'];
            $coin->abbr = $input['abbr'];
            $coin->save();
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }


}
