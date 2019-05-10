<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model {

    /**
     *
     * @var type 
     */
    
    protected $fillable = [
        'name',
        'abbr',
    ];
    
    /**
     *
     * @var type 
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
