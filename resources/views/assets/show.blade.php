@extends('layouts.app')

@section('content')

 <section class="content-header">
          <h1>
            Add Asset Form
            <small>Show</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Show Asset</li>
          </ol>
        </section>

        <!-- Main content -->


<section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Show Form</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                
                <div class="panel-body">  
            
                   <div class="row">
                        <div class="col-md-3">
                             @if (file_exists(public_path('images/'.$asset->id.'.jpg')))
                             <img class="img-responsive img-rounded" src="{{asset('/images/'.$asset->id.'.jpg') }}" /> 
                            @else
                            <img class="img-responsive img-rounded" src="{{asset('/images/placeholder.jpg') }}" /> 
                            @endif
                            
    
                       </div>
                       
                       <div class="col-md-6 pull-down">
                                    @foreach ($asset->owns as $own)
                                    <h5 class="text-uppercase">{{ $own->name }}</h5>
                                    @endforeach
                                    <h2 style="margin-top: 0 ! important; padding-top: 0 ! important;">{{$asset->model}}</h2>
                               
                 
                                    
                           
                           
                           <ul style="padding-left: 0 ! important; margin-left: 0 ! important; list-style-type: none; display: inline;">
                            <li style="display: inline; padding-left: 0 ! important; margin-left: 0 ! important;">
                               <a href="{{url ('assets/' .$asset->id. '/edit') }}" class="btn btn-primary">Edit Asset</a>
                               </li>   
                               
                           <li style="display: inline;"" data-form="#frmDelete-{{$asset->id}}" data-title="Delete Assignee" data-message="Are you sure you want to delete ?" >
                                    <a  href="" class="formConfirm btn btn-warning">Delete Asset</a>
                               
                           </li>
                           </ul>
                           
                               <table class="table table-condensed" style="margin-top: 10px;">
                                     <tbody>
                                          <tr>
                                                <td>Model</td>
                                                <td><strong>{{$asset->brand}}</strong></td>
                                         </tr> 
                                         <tr>
                                                <td>Serial Number</td>
                                                <td><strong>{{$asset->serial_number}}</strong></td>
                                         </tr>
                                           <tr>
                                                <td>Uploaded by</td>
                                                <td>
                                                <strong>{{$asset->user->name}}</strong>    
                                               </td>
                                         </tr>
                                    </tbody>
                               </table>
                                    
                           
                       
                       
                       </div>
                       
                       <div class="col-md-3 hidden-xs hidden-sm">
                    
                           {!! QrCode::size(250)->generate('http://10.96.16.40/assetinventory4/public/'.Request::path()) !!}
                           
                           {!! QrCode::format('png')->size(250)->generate('http://10.96.16.40/assetinventory4/public/'.Request::path(),'../public/qr-img/'.$asset->model.'.png') !!}
                           
                           
                           <a href="{{url('/qr-img/'.$asset->model.'.png')}}" class="btn btn-block btn-primary" download>Download Image</a>

                           
                           
                       </div>
                       
                       <div class="col-md-3"></div>
                    
                    </div> <!-- end row for heading asset -->
                    
                    <!--- nav tabs for asset -->
                    
                       
            
<div class="row">
<div class="col-md-12">
<ul class="nav nav-tabs text-uppercase">
  <li class="active"><a href="#physical" data-toggle="tab" aria-expanded="true"><small>Physical Information</small></a></li>
  <li class=""><a href="#components" data-toggle="tab" aria-expanded="false"><small>Components</small></a></li>
  <li class=""><a href="#purchases" data-toggle="tab" aria-expanded="false"><small>Purchases</small></a></li>

</ul>
<div id="myTabContent" class="tab-content corner-left corner-right">
  <div class="tab-pane fade active in corner-left corner-right" id="physical">
   
      <div class="row corner-left corner-right">
          
          <div class="col-md-6 corner-left">
    <table class="table table-condensed">
  <tbody>

    <tr>
      <td style="border-top: 0 ! important;">Assigned to</td>

      <td  style="border-top: 0 ! important;"><strong class="{{ $asset->trasfer_name == '' ? 'text-disabled' : ''  }}">{{ ($asset->trasfer_name != '' ? $asset->trasfer_name : 'NO ASSIGNED EMPLOYEE' ) }}</strong></td>
       
    </tr>
      
      @if( $own->name  == 'Phones' )
    <tr>
      <td>Local Number</td>
        <td>
            <strong>{{$asset->local}}</strong>
        </td>
    </tr>
        @endif
      
      @if( $own->name  == 'Switches' )
    <tr>
      <td>Hostname</td>
        <td>
            <strong>{{$asset->hostname}}</strong>
        </td>
    </tr>
      
    <tr>
      <td>IP Address</td>
        <td>
            <strong>{{$asset->ip_address}}</strong>
        </td>
    </tr>
      @endif
      
      @if( $own->name  == 'Fortigate' )
         <tr>
      <td>Firmware Version</td>
        <td>
            <strong>{{$asset->firmware_version}}</strong>
        </td>
    </tr>
      @endif
      
      
      
     @if( $own->name  == 'Synology' )
        <tr>
      <td>Hostname</td>
        <td>
            <strong>{{$asset->hostname}}</strong>
        </td>
    </tr>
      
    <tr>
      <td>Storage Memory</td>
        <td>
            <strong>{{$asset->storage_memory}}</strong>
        </td>
    </tr>
      
    <tr>
      <td>Volume Capacity</td>
        <td>
            <strong>{{$asset->volume_capacity}}</strong>
        </td>
    </tr>
      
      <tr>
      <td>Storage Version</td>
        <td>
            <strong>{{$asset->storage_version}}</strong>
        </td>
    </tr>
      
    @endif
      
      
      
      
      
      
      
         <tr>
      <td>Status</td>
        <td>
             @foreach($asset->status as $statu)
            <strong>{{$statu->name}}</strong>
              @endforeach
        </td>
    </tr>
      
        <tr>
      <td>Asset Location</td>
      <td>
        @foreach($asset->places as $place)
            <strong class="label label-danger">{{$place->name }}</strong>
           @endforeach
      </td>
       
        
    </tr>
      
         <tr>
      <td>Asset Company</td>
             
        
      <td>
          @foreach($asset->locations as $location)
        <strong class="label label-danger {{ $location->name == '' ? 'text-disabled' : ''}}">
      {{ ($location->name != '' ? $location->name : 'NO DATA' )}}
        </strong>
             @endforeach
    </td>
    </tr>
      
      
              <tr>
      <td>Asset Map</td>
             
        
      <td>
       <strong class="{{ $asset->asset_map == '' ? 'text-disabled' : ''}}">{{ ($asset->asset_map != '' ? $asset->asset_map : 'NO DATA' )}}</strong>
    </td>
    </tr>
      
      
             <tr>
      <td>Asset Year</td>
             
        
      <td>
       <strong class="{{ $asset->asset_year == '' ? 'text-disabled' : ''}}">{{ ($asset->asset_year != '' ? $asset->asset_year : 'NO DATA' )}}</strong>
    </td>
    </tr>
  



      
    <tr>
        <td>Product Number</td>  
        <td><strong class="{{ $asset->product_number == '' ? 'text-disabled' : ''}}">{{ ($asset->product_number != '' ? $asset->product_number : 'NO DATA' )}}</strong></td>
    </tr>
      
    <tr>
        <td>IT Code</td>  
        <td><strong class="{{ $asset->it_code == '' ? 'text-disabled' : '' }}">{{($asset->it_code != '' ? $asset->it_code : 'NO DATA' )}}</strong></td>
    </tr>
      
      
    <tr>
        <td>Finance Code</td>
        <td><strong class="{{ $asset->finance_code == '' ? 'text-disabled' : ''}}">{{($asset->finance_code != '' ? $asset->finance_code : 'NO DATA' )}}</strong></td>
    </tr>
    
      
      
  </tbody>
</table> 
          
          </div>
          
          <div class="col-md-6 corner-right">
              <table class="table table-condensed">
                  <tbody>
                      <tr>
                    <td style="border-top: 0 ! important;"><strong><i class="fa fa-history"></i> Asset History Activity</strong></td>
                  </tr>
                      
                      
                      
                      
                      
                      @foreach($asset->revisions as $revision)
                             @foreach ($revision->old as $key => $v)
                        <tr>
                            
                        <td>{{ $revision->old($key) }}</td>
                        <td>Transferred to</td>
                        <td><strong style="color: red">{{ $revision->new($key) }}</strong></td>
                       
                        
                        <td>{{ $revision->created_at->diffForHumans()  }} </td>
                        </tr>   
                            
                     
                            @endforeach
                            @endforeach
                  
                    </tbody>
                
              
              </table>
              
          </div>

      
      </div>
      

      
      
      
      
  </div>
    
  <div class="tab-pane fade" id="components">

       <div class="row corner-left corner-right">
           <div class="col-md-6 corner-left">
               <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td style="border-top: 0 ! important;">Processor Name</td>
                            <td style="border-top: 0 ! important;"><strong class="pull-right {{$asset->processor_name == '' ? 'text-disabled' : ''}}">{{ ($asset->processor_name != '' ? $asset->processor_name : 'NO DATA') }}</strong></td>
                            
                        </tr>
                        
                        <tr>
                            <td>Processor Frequency</td>
                            <td><strong class="pull-right {{$asset->processor_frequency == '' ? 'text-disabled' : ''}}">{{ ($asset->processor_frequency != '' ? $asset->processor_frequency : 'NO DATA') }}</strong></td>
                        
                        </tr>
                        
                        <tr>
                            <td>Processor Serial</td>
                            <td><strong class="pull-right {{ $asset->processor_serial == '' ? 'text-disabled' : '' }}">{{ ($asset->processor_serial != '' ? $asset->processor_serial : 'NO DATA') }}</strong></td>
                        </tr>
                        
                        
                        <tr>
                            <td>Processor Manufacture</td>
                            <td><strong class="pull-right {{ $asset->processor_manufacture == '' ? 'text-disabled' : '' }}">{{ ($asset->processor_manufacture != '' ? $asset->processor_manufacture : 'NO DATA') }}</strong></td>
                        
                        </tr>
                        
                    </tbody>
                </table>
               
               
               <table class="table table-condensed">
                <tbody>
                    <tr>
                        <td style="border-top: 0 ! important;">Memory Name</td>
                        <td style="border-top: 0 ! important;"><strong class="pull-right {{ $asset->memory_name == '' ? 'text-disabled' : '' }}">{{ ($asset->memory_name != '' ? $asset->memory_name : 'NO DATA' ) }}</strong></td>
                    </tr>
                    
                    <tr>
                        <td>Memory Serial</td>
                        <td><strong class="pull-right {{ $asset->memory_serial == '' ? 'text-disabled' : '' }}">{{ ($asset->memory_serial != '' ? $asset->memory_serial : 'NO DATA') }}</strong></td>
                    </tr>
                    
                    <tr>
                        <td>Memory Type</td>
                        <td><strong class="pull-right {{ $asset->memory_type == '' ? 'text-disabled' : '' }}">{{ ($asset->memory_type != '' ? $asset->memory_type : 'NO DATA') }}</strong></td>
                    </tr>
                    
                    <tr>
                        <td>Memory Size</td>
                        <td><strong class="pull-right {{ $asset->memory_size == '' ? 'text-disabled' : '' }}">{{ ($asset->memory_size != '' ? $asset->memory_size : 'NO DATA')  }}</strong></td>
                    </tr>
                    
                    
                    
               </tbody>
               </table>
               
               <table class="table table-condensed">
                   <tbody>
                        <tr>
                            <td style="border-top: 0 ! important;">Hardisk Name</td>
                            <td style="border-top: 0 ! important;"><strong class="pull-right {{ $asset->hd_name == '' ? 'text-disabled' : '' }}">{{ ($asset->hd_name != '' ? $asset->hd_name : 'NO DATA') }}</strong></td>
                       </tr>
                       <tr>
                            <td>Hardisk Serial</td>
                            <td><strong class="pull-right {{ $asset->hd_serial == '' ? 'text-disabled' : '' }}">{{ ($asset->hd_serial != '' ? $asset->hd_serial : 'NO DATA') }}</strong></td>
                       </tr>
                       <tr>
                            <td>Hardisk Manufacturer</td>
                            <td><strong class="pull-right {{ $asset->hd_manufacture == '' ? 'text-disabled' : '' }}">{{ ($asset->hd_manufacture != '' ? $asset->hd_manufacture : 'NO DATA') }}</strong></td>
                       </tr>
                       
                       <tr>
                        <td>Hardisk Capacity</td>
                        <td><strong class="pull-right {{ $asset->hd_capacity == '' ? 'text-disabled' : '' }}">{{ ($asset->hd_capacity != '' ? $asset->hd_capacity : 'NO DATA') }}</strong></td>
                       </tr>
                   </tbody>
               </table>
               
           </div><!-- end col-md-6 -->
           
           <div class="col-md-6 corner-right">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td style="border-top: 0 ! important;">Graphic Card</td>
                            <td style="border-top: 0 ! important;"><strong class="pull-right {{ $asset->grapic_name == '' ? 'text-disabled' : '' }}">{{ ($asset->grapic_name != '' ? $asset->grapic_name : 'NO DATA') }}</strong></td>
                        </tr>
                        
                        <tr>
                            <td>Sound Card</td>
                            <td><strong class="pull-right {{ $asset->sound_name == '' ? 'text-disabled' : '' }}">{{ ($asset->sound_name != '' ? $asset->sound_name : 'NO DATA') }}</strong></td>
                        </tr>
                    </tbody>
               </table>
               
                   <table class="table table-condensed">
            <tbody>
                <tr>
                    <td style="border-top: 0 ! important">Network Name</td>
                    <td style="border-top: 0 ! important"><strong class="pull-right {{ $asset->network_name == '' ? 'text-disabled' : '' }}">{{ ($asset->network_name != '' ? $asset->network_name : 'NO DATA') }}</strong></td>
                </tr>
                
                <tr>
                    <td>Network MAC</td>
                    <td><strong class="pull-right {{ $asset->network_mac == '' ? 'text-disabled' : '' }}">{{ ($asset->network_mac != '' ? $asset->network_mac : 'NO DATA') }}</strong></td>
                </tr>
                
                <tr>
                    <td>Network IP</td>
                    <td><strong class="pull-right {{ $asset->netework_ip == '' ? 'text-disabled' : '' }}">{{ ($asset->netework_ip != '' ? $asset->netework_ip : 'NO DATA') }}</strong></td>
                </tr>
            </tbody>
           </table>
               
               
                <table class="table table-condensed">
                     <tbody>
                        <tr>
                            <td style="border-top: 0 ! important;">Serial Port</td>
                            <td style="border-top: 0 ! important;"><strong class="pull-right text-uppercase {{ $asset->serial_port == 'No' ? 'label label-danger' : 'label label-success' }}">{{ $asset->serial_port }}</strong></td>
                        </tr>
                         
                         <tr>
                            <td>USB Port</td>
                            <td><strong class="pull-right text-uppercase {{ $asset->usb_port == 'No' ? 'label label-danger' : 'label label-success' }}">{{ $asset->usb_port }}</strong></td>
                         </tr>
                         
                         <tr>
                            <td>Parallel Port</td>
                             <td><strong class="pull-right text-uppercase {{ $asset->parallel_port == 'No' ? 'label label-danger' : 'label label-success' }}">{{ $asset->parallel_port }}</strong></td>
                         </tr>
                         
                         <tr>
                            <td>Ethernet Port</td>
                            <td><strong class="pull-right text-uppercase {{ $asset->ethernet_port == 'No' ? 'label label-danger' : 'label label-success' }}">{{ $asset->ethernet_port }}</strong></td>
                         </tr>
                         
                         <tr>
                            <td>Wifi Port</td>
                            <td><strong class="pull-right text-uppercase {{ $asset->wifi_port == 'No' ? 'label label-danger' : 'label label-success' }}">{{ $asset->wifi_port }}</strong></td>
                         </tr>
                    </tbody>
               </table>
           </div><!-- end col-md-6 right -->
           
           
       
           
      
      </div>
      
  </div>
  <div class="tab-pane fade" id="purchases">
  
      <div class="row corner-left corner-right">
           <div class="col-md-6 corner-left">
               <table class="table table-condensed">
                    <tbody>
                        <tr>
    <td style="border-top: 0 ! important;">Budget Code</td>
    <td style="border-top: 0 ! important;"><strong class="pull-right {{ $asset->budget_code == '' ? 'text-disabled' : '' }}">{{ ($asset->budget_code != '' ? $asset->budget_code : 'NO DATA') }}</strong></td>
                        </tr>  
                        
                        
                        <tr>
                        <td>Purchase Name</td>
                        <td><strong class="pull-right {{ $asset->purchase_name == '' ? 'text-disabled' : '' }}">{{ ($asset->purchase_name != '' ? $asset->purchase_name : 'NO DATA') }}</strong></td>
                        </tr>
                        
                        <tr>
                        <td>Purchase Company</td>
                        <td><strong class="pull-right {{$asset->purchase_company == '' ? 'text-disabled' : ''}}">{{($asset->purchase_company != '' ? $asset->purchase_company : 'NO DATA')}}</strong></td>
                        </tr>
                        
                        <tr>
                        <td>Purchase Date</td>
                        <td><strong class="pull-right {{ date('F d, Y', strtotime($asset->purchase_date)) == 'January 01, 1970' ? 'text-disabled' : ''  }}">{{ ( date('F d, Y', strtotime($asset->purchase_date)) == 'January 01, 1970' ? '00-00-00' : date('F d, Y', strtotime($asset->purchase_date)) ) }}</strong></td>
                        </tr>
                        
                        <tr>
                        <td>Purchase Officer</td>
                        <td><strong class="pull-right {{ $asset->purchase_officer == '' ? 'text-disabled' : '' }}">{{ ($asset->purchase_officer != '' ? $asset->purchase_officer : 'NO OFFICER SELECTED') }}</strong></td>
                        </tr>

                       
                        
                        
                   </tbody>
               </table>
               
                 <table class="table table-condensed">
                     <tbody>
                        <tr>
                            <td style="border-top: 0 ! important;">Vender Name</td>
                            <td style="border-top: 0 ! important;"><strong class="pull-right {{$asset->vendor_name == '' ? 'text-disabled' : ''}}">{{($asset->vendor_name != '' ? $asset->vendor_name : 'NO DATA')}}</strong></td>
                        </tr>
                         
                         <tr>
                            <td>Vendor Person</td>
                            <td><strong class="pull-right {{ $asset->vendor_person == '' ? 'text-disabled' : '' }}">{{($asset->vendor_person != '' ? $asset->vendor_person : 'NO DATA')}}</strong></td>
                         </tr>
                         
                         <tr>
                            <td>Vendor Number</td>
                             <td><strong class="pull-right {{ ($asset->vendor_number == '' ? 'text-disabled' : '') }}">{{($asset->vendor_number != '' ? $asset->vendor_number : 'NO DATA')}}</strong></td>
                         
                         </tr>
                         
                         <tr>
                            <td>Vendor Person</td>
                            <td><strong class="pull-right {{$asset->vendor_person == '' ? 'text-disabled' : '' }}">{{($asset->vendor_person != '' ? $asset->vendor_person : 'NO DATA')}}</strong></td>
                         </tr>
                         
                         <tr>
                            <td>Vendor Temrs</td>
                            <td><strong class="pull-right {{$asset->vendor_terms == '' ? 'text-disabled' : ''}}">{{($asset->vendor_terms != '' ? $asset->vendor_terms : 'NO SELECTED TERMS')}}</strong></td>
                         </tr>
                     
                     </tbody>
               </table>
          </div><!-- end col-md-6 -->
          
          <div class="col-md-6 corner-right">
               <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td style="border-top: 0 ! important;">PR Date</td>
                        <td style="border-top: 0 ! important;"><strong class="pull-right {{ date('F d, Y', strtotime($asset->pr_date)) == 'January 01, 1970' ? 'text-disabled' : ''  }}">{{ ( date('F d, Y', strtotime($asset->pr_date)) == 'January 01, 1970' ? '00-00-00' : date('F d, Y', strtotime($asset->pr_date)) ) }}</strong></td>    
                        
                    </tr>
                        
                    <tr>
                        <td>PR Number</td>
                        <td><strong class="pull-right {{$asset->pr_number == '' ? 'text-disabled' : ''}}">{{($asset->pr_number != '' ? $asset->pr_number : 'NO DATA')}}</strong></td>
                    </tr>
                        
                    <tr>
                        <td>Acquisition Date</td>
                         <td><strong class="pull-right {{ date('F d, Y', strtotime($asset->acquisition_date)) == 'January 01, 1970' ? 'text-disabled' : ''  }}">{{ ( date('F d, Y', strtotime($asset->acquisition_date)) == 'January 01, 1970' ? '00-00-00' : date('F d, Y', strtotime($asset->acquisition_date)) ) }}</strong></td> 
                    </tr>
                        
                    <tr>
                        <td>Warranty Date</td>
                        <td><strong class="pull-right {{ date('F d, Y', strtotime($asset->warranty_date)) == 'January 01, 1970' ? 'text-disabled' : ''  }}">{{ ( date('F d, Y', strtotime($asset->warranty_date)) == 'January 01, 1970' ? '00-00-00' : date('F d, Y', strtotime($asset->warranty_date)) ) }}</strong></td> 
                    </tr>
                        
                    <tr>
                        <td>Delivery Date</td>
                        <td><strong class="pull-right {{ date('F d, Y', strtotime($asset->delivery_date)) == 'January 01, 1970' ? 'text-disabled' : ''  }}">{{ ( date('F d, Y', strtotime($asset->delivery_date)) == 'January 01, 1970' ? '00-00-00' : date('F d, Y', strtotime($asset->delivery_date)) ) }}</strong></td> 
                    </tr>
                        
                    <tr>
                        <td>PO Status</td>
                        <td><strong class="pull-right {{$asset->po_status == '' ? 'text-disabled' : ''}}">{{($asset->po_status != '' ? $asset->po_status : 'NO SELECTED STATUS')}}</strong></td>
                    </tr>

                     <tr>
                        <td>PO Number</td>
                        <td><strong class="pull-right {{$asset->po_status == '' ? 'text-disabled' : ''}}">{{($asset->po_number != '' ? $asset->po_number : 'NO DATA')}}</strong></td>
                    </tr>
                        
                      
                    
                   </tbody>
              </table>
          </div><!-- end col-6 div -->
          
          
      </div><!-- end row corner left -->
      
  </div>
 
</div>
        </div>
    </div>    
                    
                    <!-- end nav tabs for asset -->
                    
                    
                </div>
                
                
          
      </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->
     @include('partials.assetsmodal')

@endsection