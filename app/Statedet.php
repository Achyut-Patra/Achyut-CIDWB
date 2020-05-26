<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Statedet extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'statedet';
    
    protected $fillable = [
          'state_code',
          'state_name'
    ];
    

    public static function boot()
    {
        parent::boot();

        Statedet::observe(new UserActionsObserver);
    }
    
    
    
    
}