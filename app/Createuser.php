<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Createuser extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'createuser';
    
    protected $fillable = [
          'stake_cd',
          'description',
          'pstn',
          'locationkey',
          'password',
          'confirm'
    ];
    

    public static function boot()
    {
        parent::boot();

        Createuser::observe(new UserActionsObserver);
    }
    
    
    
    
}