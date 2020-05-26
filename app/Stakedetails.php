<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Stakedetails extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'stakedetails';
    
    protected $fillable = [
          'stake_name',
          'flag',
          'sort_order',
          'abbreviation',
          'logo',
          'stake_level_id_fk'
    ];
    
    public function stakelevel(){

      return $this->belongsTo('App\Stakelevel','stake_level_id_fk');
    }
    public function user(){

        return $this->hasMany('App\User','stake_cd');
     }

    public static function boot()
    {
        parent::boot();

        Stakedetails::observe(new UserActionsObserver);
    }
    
    
    
    
}