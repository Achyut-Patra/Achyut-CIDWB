<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class Criminaldetails extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'criminaldetails';
    
    protected $fillable = [
          'namfst',
          'nammddl',
          'namlst',
          'namalis',
          'dbrth',
          'agee',
          'ffstname',
          'fmstname',
          'flstname',
          'lsidefce',
          'fsidefce',
          'rsidefce',
          'peradd',
          'perstat',
          'perdis',
          'perpsta',
          'perpin',
          'preadd',
          'prestat',
          'predis',
          'prepsta',
          'mobi',
          'lndn',
          'crmdet',
          'modoper',
          'dofcrm',
          'crmtyp',
          'opertare',
          'ir',
          'remrk',
          'cseref',
          'rewann',
          'gend'
    ];
    

    public static function boot()
    {
        parent::boot();

        Criminaldetails::observe(new UserActionsObserver);
    }
    
    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDbrthAttribute($input)
    {
        if($input != '') {
            $this->attributes['dbrth'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
        }else{
            $this->attributes['dbrth'] = '';
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDbrthAttribute($input)
    {
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
        }else{
            return '';
        }
    }

/**
     * Set attribute to date format
     * @param $input
     */
    public function setDofcrmAttribute($input)
    {
        if($input != '') {
            $this->attributes['dofcrm'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
        }else{
            $this->attributes['dofcrm'] = '';
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDofcrmAttribute($input)
    {
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
        }else{
            return '';
        }
    }


    
}