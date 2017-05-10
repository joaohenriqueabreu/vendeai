<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


use App\User;
use App\Product;

class Reseller extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['name', 'email', 'address', 'phone', 'document', 'user_id', 'store_name'];

    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }
}
