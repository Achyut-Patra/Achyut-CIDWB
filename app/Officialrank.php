<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Officialrank extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'officialrank';
    
    protected $fillable = ['rank'];
    

    public static function boot()
    {
        parent::boot();

        Officialrank::observe(new UserActionsObserver);
    }
    
    public function keyofficial(){

       return $this->hasMany('App\Keyofficial','rank');

     }
    
    
}