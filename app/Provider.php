<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Product;
use App\User;

class Provider extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['name', 'email', 'title', 'address', 'phone', 'market', 'document', 'user_id'];

    protected $dates = ['deleted_at'];


    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
