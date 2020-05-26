<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use App\Role;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Laraveldaily\Quickadmin\Traits\AdminPermissionsTrait;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, AdminPermissionsTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'locationkey',
          'password',
          'stake_cd',
          'description',
          'user_address',
          'stake_id_fk',
          'super_password',
          'flag',
          'email',
          'last_login',
          'last_login_ip',
          'user_contact_no',
          'last_pw_update_time',
          'locationkey_hash',
          'role_id',
          'stationp',
          'remember_token',
        ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public static function boot()
    {
        parent::boot();

        User::observe(new UserActionsObserver);
    }

    public function district(){

       return $this->belongsTo('App\District','description');

     }
     public function ps(){

       return $this->belongsTo('App\Ps','stationp');

     }
     public function stakedetails(){
        return $this->belongsTo('App\Stakedetails','stake_cd');
     }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
