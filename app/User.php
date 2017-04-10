<?php

namespace App;

use App\Provider;
use App\Reseller;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function provider()
    {
        return $this->hasOne('App\Provider');
    }

    public function reseller()
    {
        return $this->hasOne('App\Reseller');
    }

    public function admin()
    {
        return $this->hasOne('App\Admin');
    }
}
