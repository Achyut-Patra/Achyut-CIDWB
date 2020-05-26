<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Importantlinks extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'tbl_important_links';
    
    protected $fillable = [
          'link_title',
          'link_url',
          'sort_order',
          'flag'
    ];
    

    public static function boot()
    {
        parent::boot();

        Importantlinks::observe(new UserActionsObserver);
    }
    
    
    
    
}