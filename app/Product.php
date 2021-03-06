<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use App\Provider;
use App\Category;
use App\Reseller;

class Product extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'payment', 'provider_id'];

    protected $dates = ['deleted_at'];


    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function resellers()
    {
        return $this->belongsToMany('App\Reseller');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function hasReseller($id)
    {
        return $this->resellers()->find($id);
    }
}
