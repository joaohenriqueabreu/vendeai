<?php

namespace App;

use App\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $dates = ['deleted_at'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
