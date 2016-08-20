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
                     All Asset List
                    
                    </h2>
                </div><!-- /.box-header -->
                  <div class="box-body">
  
                  @can('admin', $asset)
  
                    <!-- Large modal -->
                    <a href="{{url('/assets/create')}}">
<button type="button" class="btn btn-warning bootstrap-modal-form-open">Add Assets <i class="fa fa-plus-circle"></i></button></a>
                    
<button type="button" class="btn btn-danger bootstrap-modal-form-open" data-toggle="modal" data-target=".bs-example-modal-lg">Export Fields <i class="fa fa-plus-circle"></i></button> 
     @endcan               
                    
                    
                    
                    <span class="pull-right">Total Number of Assignees: <strong>{{$assets->count()}}</strong> | Updated at: </span>
                    
                    <hr/>
        
                    
    <div id="MainMenu">
  <div class="list-group panel">
    <a href="#demo1" class="list-group-item list-group-item-danger strong" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-search"></i> Advance Search <i class="fa fa-caret-down"></i></a>
    <div class="collapse list-group-submenu" id="demo1">
        
        <div class="row" style="margin-top: 20px">
    <div class="col-md-2"><p id="asset_type"></p></div>
    <div class="col-md-2"><p id="brand"></p></div>
    <div class="col-md-2"><p id="model"></p></div>
    <div class="col-md-2"><p id="serial"></p></div>
    <div class="col-md-2"><p id="it_code"></p></div>
    <div class="col-md-2"><p id="assignee_name"></p></div>
        </div>
        
    
    </div>
  </div>
</div>
                    
<table id="asset" class="table display table-bordered table-hover table-striped dt-responsive nowrap" cellspacing="0" width="100%">                    
    
  <thead>
  <tr>
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
  <tr>
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

   
      <tr>
          
          
          
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
            <!-- temporary
        <a href="#" class="bootstrap-modal-form-open" data-toggle="modal" data-target=".bs-edit{{$asset->id}}-modal-lg">Edit Asset</a>
            -->
            
        <a href="{{url ('assets/' .$asset->id. '/transfer') }}">Transfer Asset</a>
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
                       
                        
                        <td>{{ $revision->created_at->diffForHumans()  }} </td>
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
        <button type="button" class="btn btn-primary" >Submit</button>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->






@endforeach



@include('partials.assetsmodal')

@endsection







