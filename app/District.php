<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'district';
    
    protected $fillable = [
          'state_id_fk',
          'district_code',
          'district_name'
    ];
    public function user(){

       return $this->hasMany('App\User','description');

     }

    public static function boot()
    {
        parent::boot();

        District::observe(new UserActionsObserver);
    }
    
    
    
    
}