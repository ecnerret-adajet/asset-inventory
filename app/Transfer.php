<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'name',
        'transfer_reason'
    ];
    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
}
