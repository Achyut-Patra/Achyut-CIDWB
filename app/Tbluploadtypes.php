<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use App\Upload;

use Illuminate\Database\Eloquent\SoftDeletes;

class Tbluploadtypes extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'tbl_upload_types';
    
    protected $fillable = [
          'upload_type',
          'flag'
    ];
    
	public function upload(){
		return $this->hasOne('App\Upload', 'upload_type_id_fk');
	}

    public static function boot()
    {
        parent::boot();

        Tbluploadtypes::observe(new UserActionsObserver);
    }
    
    
    
    
}