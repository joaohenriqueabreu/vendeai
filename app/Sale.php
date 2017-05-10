<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use App\Product;
use App\Reseller;
use App\Customer;

class Sale extends Model
{

    //
    use SoftDeletes;

    protected $fillable = ['price', 'amount'];

    protected $dates = ['deleted_at'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function reseller()
    {
        return $this->belongsTo('App\Reseller');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
