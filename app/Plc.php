<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plc extends Model
{
    protected $fillable = [
        'unit',
        'it_code',
        'finance_code',
        'module',
        'part_num'
    ];
    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function disposals()
    {
        return $this->hasMany('App\Disposal');
    }
}
