<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personallaptop extends Model
{
    protected $fillable = [
    	'user_laptop',
    	'model',
    	'serial_no',
    	'purpose',
    	'approved_by',
    	'explanation'
    ];
}
