<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Reseller extends Model
{
    //
    protected $fillable = ['name', 'email', 'address', 'phone', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
