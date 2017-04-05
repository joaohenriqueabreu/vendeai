<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


use App\User;

class Reseller extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['name', 'email', 'address', 'phone', 'user_id'];

    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
