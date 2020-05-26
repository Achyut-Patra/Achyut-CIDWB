<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Functions extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'functions';
    
    protected $fillable = [
          'section_name',
          'function',
          'officer_incharge',
          'telephone'
    ];
    

    public static function boot()
    {
        parent::boot();

        Functions::observe(new UserActionsObserver);
    }
    
    
    
    
}