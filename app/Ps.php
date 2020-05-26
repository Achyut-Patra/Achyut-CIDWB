<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Ps extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ps';
    
    protected $fillable = [
          'district_id_fk',
          'ps_code',
          'ps_name',
          'address',
          'contact_no',
          'email'
    ];
    

    public static function boot()
    {
        parent::boot();

        Ps::observe(new UserActionsObserver);
    }
    
    public function user(){

       return $this->hasMany('App\User','stationp');

     }
    
    
}