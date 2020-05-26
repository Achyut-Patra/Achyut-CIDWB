<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use App\TblUploadTypes;

use Illuminate\Database\Eloquent\SoftDeletes;

class Upload extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'tbl_upload';
    
    protected $fillable = [
          'upload_type_id_fk',
          'title',
          'description',
          'file_name',
          'flag'
    ];
    
    public function tbluploadtypes(){
      	 return $this->belongsTo('App\TblUploadTypes','upload_type_id_fk');
    }
	
    public static function boot()
    {
        parent::boot();

        Upload::observe(new UserActionsObserver);
    }
    
    
    
    
}