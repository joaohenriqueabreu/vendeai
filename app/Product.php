<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Provider;
use App\Reseller;

class Product extends Model
{
    //
    protected $fillable = ['name', 'description', 'url', 'price', 'payment', 'provider_id'];

    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }

    public function resellers()
    {
        return $this->belongsToMany('App\Reseller');
    }
}
