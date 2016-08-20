<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Disposal extends Model
{
    
 protected $fillable = [
        'condition_code',
        'disposal_reason',
        'disposal_method',
        'asset_id',
        'disposal_date',
        'market_value'
    ];
    

    protected $dates = [
        'disposal_date'
    ];
    
    
    /* user listing */
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /* list dates */
    
    public function setDisposalDateAttribute($date)
    {
        $this->attributes['disposal_date'] = Carbon::parse($date);
    }
    
    public function getDisposalDateAttribute($date)
    {
        return new Carbon($date);
    }
    
    /* asset list */
    
    public function asset()
    {
        return $this->belongsTo('App\Asset');
    }
    
    public function plc()
    {
        return $this->belongsTo('App\Plc');
    }

}
