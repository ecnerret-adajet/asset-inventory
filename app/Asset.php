<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Sofa\Revisionable\Laravel\RevisionableTrait;
use Sofa\Revisionable\Revisionable;

class Asset extends Model implements Revisionable
{
      use RevisionableTrait;
    
    protected $revisionPresenter = 'App\Presenters\Revisions\Asset';

      protected $revisionable = [

        'trasfer_name',
    ];
    
    protected $fillable = [
        'brand',
        'model',
        'serial_number',
        'product_number',
        'it_code',
        'finance_code',
        'asset_map',
        'local',
        'asset_year',
        'filePath',
        
        /* Transfer fields */
        'transfer_reason',
        'trasfer_name',
        'transfer_date',
        
        'disposal_reason',
       
        
        /* switch */
        'hostname',
        'ip_address',
        
        /* fortinet */
        'firmware_version',
        
        /* synology w/hostname */
        'storage_memory',
        'volume_capacity',
        'storage_version',
        
        /* components */
        
        'processor_name',
        'processor_frequency',
        'processor_serial',
        'processor_manufacture',
        'memory_name',
        'memory_serial',
        'memory_type',
        'memory_size',
        'hd_name',
        'hd_serial',
        'hd_manufacture',
        'hd_capacity',
        'grapic_name',
        'sound_name',
        'network_name',
        'network_mac',
        'netework_ip',
        'serial_port',
        'usb_port',
        'parallel_port',
        'ethernet_port',
        'wifi_port',
        
        /* Purchases fillable fields */
        
        'budget_code',
        'po_number',
        'purchase_name',
        'purchase_company',
        'purchase_officer',
        'vendor_name',
        'vendor_person',
        'vendor_number',
        'vendor_address',
        'vendor_terms',
        'pr_number',
        'po_status',
        'product_code',
        'product_description',
        'product_quantity',
        'product_price',
        'product_total',
        'product_sub',
        'product_discount',
        'product_net',
        'prodcut_ship',
        'product_grand',
        
        /* dates protected */    
        
        'purchase_date',
        'pr_date',
        'acquisition_date',
        'warranty_date',
        'delivery_date',
        'year_disposal',

        /* addition fields as of june 2016 */
        'status_justify',
        'asset_status_date',
        
    ];
    
    
     protected $dates = [
        'purchase_date',
        'pr_date',
        'acquisition_date',
        'warranty_date',
        'delivery_date',
        'year_disposal',
        'transfer_date',
		'asset_status_date',
    
    ];

    /* user belongs to department */
    
    /* List Dates */
    
	    /* date transfer */
    
    public function setTransferDateAttribute($date)
    {
        $this->attributes['transfer_date'] = Carbon::parse($date);
    }
    
    public function getTransferDateAttribute($date)
    {
        return new Carbon($date);
    }
	

    /* status justify date */
    public function getAssetStatusDateAttribute($date)
    {
        return Carbon::parse($date)->format('m/d/Y');
    }

     /* year purchase date */
    
    public function getPurchaseDateAttribute($date)
    {
         return Carbon::parse($date)->format('m/d/Y');
    }


     /* year pr date */
    public function getPrDateAttribute($date)
    {
        return Carbon::parse($date)->format('m/d/Y');
    }
    
     /* year Acquisition date */
    
 
    
    public function getAcquisitionDateAttribute($date)
    {
         return Carbon::parse($date)->format('m/d/Y');
    }
    
     /* year warranty date */
    

    
    public function getWarrantyDateAttribute($date)
    {
        return Carbon::parse($date)->format('m/d/Y');
    }
    
     /* year delivery date */
    
 
    
    public function getDeliveryDateAttribute($date)
    {
       return Carbon::parse($date)->format('m/d/Y');
    }
    
    
    /* year disposal date */
    

    
    public function getYearDisposalAttribute($date)
    {
       return Carbon::parse($date)->format('m/d/Y');
    }
    
    
    /* end Date listing */
    
    /* user belongs to department */
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /* assignees lists */
    
    public function assignees()
    {
      return  $this->belongsToMany('App\Assignee')->withTimestamps();
    }
    
    public function getAssigneeListAttribute()
    {
        return $this->assignees->lists('id')->all();
    }
    
    /* list for owns */
    
    public function owns()
    {
        return $this->belongsToMany('App\Own')->withTimestamps();
    }
    
    public function getOwnListAttribute()
    {
        return $this->owns->lists('id')->all();
    }
    

    
    
    /* list for locations */
    
    public function locations()
    {
        return $this->belongsToMany('App\Location')->withTimestamps();
    }
    
    public function getLocationListAttribute()
    {
        return $this->locations->lists('id')->all();
    }
    
    /* list for Status */
    
    public function status()
    {
        return $this->belongsToMany('App\Statu')->withTimestamps();
    }
    
    public function getStatuListAttribute()
    {
        return $this->status->lists('id')->all();
    }
    
    
        /* list for place */
    
    public function places()
    {
        return $this->belongsToMany('App\Place')->withTimestamps();
    }
    
    public function getPlaceListAttribute()
    {
        return $this->places->lists('id')->all();
    }
    
    
        /* list for stocks */
    
    public function stocks()
    {
        return $this->belongsToMany('App\Stock')->withTimestamps();
    }
    
    public function getStockListAttribute()
    {
        return $this->stocks->lists('id')->all();
    }
    
    /* list for lfugdipsal */
    
    public function disposals()
    {
        return $this->hasMany('App\Disposal');
    }
    
    

    
  
    
}
