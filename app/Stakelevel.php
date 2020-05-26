<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Stakelevel extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'stakelevel';
    
    protected $fillable = ['stake_name'];
    
    public function stakedetails(){

      return $this->hasOne('App\StakeDetails','stake_level_id_fk');
    }

    public static function boot()
    {
        parent::boot();

        Stakelevel::observe(new UserActionsObserver);
    }
    
    
    
    
}