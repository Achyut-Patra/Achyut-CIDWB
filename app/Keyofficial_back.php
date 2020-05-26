<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Keyofficial extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'keyofficial';
    
    protected $fillable = [
          'type',
          'name',
          'rank',
          'phone',
          'order'
    ];
    

    public static function boot()
    {
        parent::boot();

        Keyofficial::observe(new UserActionsObserver);
    }
    
    
    
    
}