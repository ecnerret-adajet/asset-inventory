<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function assets()
    {
        return $this->belongsToMany('App\Asset');
    }
    
}
