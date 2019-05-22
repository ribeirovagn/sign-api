<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateKey extends Model {

    protected $fillable = [
        'user_id',
        'coin_id',
        'key',
        'ip',
        'redeemScript'
    ];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];


}
