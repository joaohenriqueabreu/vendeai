<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Admin extends Model
{
    protected $table = 'admin';

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
