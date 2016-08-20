@extends('layouts.app')

@section('content')


 <section class="content-header">
          <h1>
             Search Results for "<strong styLe="color: #e74c3c">{{$search}}</strong>"
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Create Asset</li>
          </ol>
        </section>

        <!-- Main content -->


<section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Search Results</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                
                
                
              
              <!-- tempory uncomment for test purposes  
            @unless(count($assets))
              <h2 class="text-center">Nothing found</h2>  
            @endunless
                -->
                
                 
                    
<table id="search" class="table table-bordered table-striped">                    
    
  <thead>
  <tr class="warning">
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
  <tr class="warning">
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

      {{ $asset->trasfer_name }}
    
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
   
                
                
                
            </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->


@endsection
