<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'program_name',
        'program_version',
        'program_serial',
        'program_id',
        'program_domain',
        'program_uuid',
    ];
    
    public function assets()
    {
         return $this->belongsTo('App\User', 'program_asset');
    }
    
}
