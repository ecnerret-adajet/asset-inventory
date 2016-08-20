@extends('layouts.app')

@section('content')

   <section class="content-header">
          <h1>
           Assets 
            <small>Inventory Lists</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">
              Assets
            </li>
          </ol>
        </section>

   <!-- Main content -->
        <section class="content">
            
               <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h2 class="box-title">
                      @if(Request::path()== 'own/Cpu')
                        Desktop Data Table
                        @elseif (Request::path() == 'own/keyboard')   
                        Keyboard Data Table
                        @elseif(Request::path() == 'own/laptop')
                       Laptop Data Table
                        @elseif(Request::path() == 'own/monitor')
                       Monitor Data Table
                        @elseif(Request::path() == 'own/mouse')
                      Mouse Data Table
                        @elseif(Request::path() == 'own/printer')
                      Printer Data Table
                      @elseif(Request::path() == 'own/scanner')
                      Scanner Data Table
                      @elseif(Request::path() == 'own/cctv')
                      Cctv Data Table
                      @elseif(Request::path() == 'own/phones')
                      Phones Data Table
                      @elseif(Request::path() == 'own/server')
                      Server Data Table
                      @elseif(Request::path() == 'own/switches')
                      Switches Data Table
                      @elseif(Request::path() == 'own/firewalls')
                      Firewalls Data Table
                      @elseif(Request::path() == 'own/ups')
                      UPS Data Table
                      @elseif(Request::path() == 'own/fax')
                      Fax Data Table
                      @elseif(Request::path() == 'own/microphones')
                      Microphones Data Table
                      @elseif(Request::path() == 'own/tv-monitor')
                      TV Monitor Data Table
                      @elseif(Request::path() == 'own/camera')
                      Camera Data Table
                       @elseif(Request::path() == 'own/projector')
                      Projector Data Table
                       @elseif(Request::path() == 'own/video-card')
                      Video Card Data Table
                       @elseif(Request::path() == 'own/printer-scanner')
                      Printer & Scanner Data Table
                       @elseif(Request::path() == 'own/hard-disk')
                      Hard disk Data Table
                       @elseif(Request::path() == 'own/synology')
                      Synology Data Table
                       @elseif(Request::path() == 'own/fortigate')
                      Fortigate Data Table
                      @elseif(Request::path() == 'own/biometrics')
                      Biometrics Data Table
                       @elseif(Request::path() == 'own/motherboard')
                      Motherboard Data Table
                       @else(Request::path() == 'own/stock')
                      Stock Data Table
                        @endif
                    
                    </h2>
                </div><!-- /.box-header -->
                  <div class="box-body">
  
                    <!-- Large modal -->
                    <a href="{{url('/assets/create')}}">
<button type="button" class="btn btn-warning bootstrap-modal-form-open">Add Assets <i class="fa fa-plus-circle"></i></button></a>
                      
                      
                       <a class="copyAsset"></a>
                       <a class="csvAsset"></a>
                       <a class="xlsAsset"></a>
                       <a class="pdfAsset"></a>
                       <a class="printAsset"></a>
                      

  
              <div class="btn-group">
      <a href="#" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        Export Fields
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
          
        <li>
        <a></a>
        </li>
        
          <li>
        <a ></a>
          </li>
          
          <li>      
              <a >Excel</a>
        </li>
          
       <li>
              <a  href="#">PDF</a>
        </li>
          
           <li>
            <a href="#" >Print</a>
          </li>
          
      
                              

    

       </ul>
    </div>

                      
                    <span class="pull-right">Total Number of Assignees: <strong>{{$assets->count()}}</strong> | Updated at: </span>
                    
                    <hr/>
        
 
                    
<table id="category" class="table table-bordered table-striped">                    
    
  <thead>
  <tr class="danger">
  <th>ASSET TYPE</th>
  <th>BRAND NAME</th>
  <th>ASSET MODEL</th>
  <th>SERIAL</th>
  <th>IT CODE</th>
  <th>ASSIGNEE NAME</th>
  <th>ACTIONS</th>
  

    </tr>
      
      
      
	
	
  </thead>
        
    
  <tfoot>
  <tr class="danger">
  <th>ASSET TYPE</th>
  <th>BRAND NAME</th>
  <th>ASSET MODEL</th>
  <th>SERIAL</th>
  <th>IT CODE</th>
  <th>ASSIGNEE NAME</th>
  <th>ACTIONS</th>
      


    </tr>
	
  </tfoot>
        

 
  <tbody>
      
     
     


     
      
      
      
    @foreach ($assets as $asset)
      
      @foreach($asset->disposals as $disposal)
      <tr class="{{ $disposal->asset_id == '' ? '' : 'hidden' }}">
      @endforeach
         
      <td>
          @foreach($asset->owns as $own)
          {{$own->name }}
          @endforeach
      </td>
          
      <td>{{$asset->brand}}</td>
      <td>{{$asset->model}}</td>
          
      <td>{{$asset->serial_number}}</td>
          
          
      <td>{{$asset->it_code}}</td>
          
          
          
      <td>
         {{$asset->trasfer_name}}   
      </td>
          
       
          
          

          
                
          <td> 
              
           <div class="btn-group">
      <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        Action
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
          
        <li>
        <a href="{{url ('assets/' .$asset->id. '/transfer') }}">Transfer Asset</a>
        </li>
        
          <li>
                <a href="#" data-id="{{$asset->id}}"  class="bootstrap-modal-form-open" data-toggle="modal" data-target=".bs-dispose-modal-lg">Dispose Asset</a>
          </li>
          
          <li>      
              <a href="{{url('/assets', $asset->id)}}">View Details</a>
        </li>
          
       <li data-form="#frmDelete-{{$asset->id}}" data-title="Delete Assignee" data-message="Are you sure you want to delete ?" >
              <a class = "formConfirm" href="">Delete Asset</a>
        </li>
          
           <li>
            <a href="#" data-toggle="modal" data-target=".bs-history{{$asset->id}}-modal-lg">History</a>
          </li>
          
          
          {!! Form::open(['id' => 'frmDelete-' . $asset->id, 'style' => 'display:none', 'method' => 'DELETE', 'action' =>                                    ['AssetsController@destroy', $asset->id]  ]) !!}
          {{ Form::submit('Submit') }}
          {!! Form::close() !!}
          
                              

    

       </ul>
    </div>
          
          </td>
          
    
        

      </tr>   
      

     @endforeach
    
      

  
        
            
        </tbody>
    </table>
                    
                
                    
                    
                    </div>
                   </div>
                </div>
            </div>
        </section><!-- /.content -->


 @foreach($assets as $asset)
                
                <!-- modal history modal -->
<div class="modal fade bs-history{{$asset->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{$asset->model}} History</h4>
      </div>
      <div class="modal-body corner-left corner-right">
              <div class="row corner-left corner-right">
        <div class="col-md-12 corner-left corner-right">
                <div class="panel-body corner-left corner-right">  
                    
                    
                    <table  class="table display table-bordered table-hover table-striped dt-responsive nowrap" cellspacing="0" width="100%">    
                          <thead>
                                <tr>
                        <th>OLD VALUE</th>
                        <th>ACTION</th>
                        <th>NEW VALUE</th>
                        <th>DATE</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                        
                            
                            @foreach($asset->revisions as $revision)
                             @foreach ($revision->old as $key => $v)
                        <tr>
                            
                        <td>{{ $revision->old($key) }}</td>
                        <td>Transferred to</td>
                        <td><strong style="color: red">{{ $revision->new($key) }}</strong></td>
                       
                        
                        <td>
                            
                            {{ ( date('F d, Y', strtotime($asset->transfer_date)) == 'January 01, 1970' ? '00-00-00' : date('F d, Y', strtotime($asset->transfer_date)) ) }}
                            </td>
                        </tr>   
                            
                     
                            @endforeach
                            @endforeach
                          
                          
                            
              
                        </tbody>
                    </table>
                    
                           
      
                </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endforeach




@include('partials.assetsmodal')

@endsection



