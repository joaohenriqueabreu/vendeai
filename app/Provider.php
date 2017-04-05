<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\User;

class Provider extends Model
{
    //

    protected $fillable = ['name', 'email', 'title', 'address', 'phone', 'user_id'];

    public function products()
    {
        return $this->hasMany('App\Products');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
