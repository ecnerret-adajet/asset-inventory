<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
     protected $fillable = [
        'name'
    ];
    
    public function assets()
    {
        return $this->belongsToMany('App\Asset');
    }
    
}
