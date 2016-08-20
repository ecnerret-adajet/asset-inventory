<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Own extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function assets()
    {
        return $this->belongsToMany('App\Asset');
    }
    
    public function disposal()
    {
        return $this->belongsTo('App\Disposal');
    }
    
    
}
