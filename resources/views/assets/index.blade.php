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

          <div class="col-md-12">
                        <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"> <i class="fa fa-database" aria-hidden="true"></i> Browse Assets <a href="{{url('users/create')}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add Asset</a> </h3>
  </div>
  <div class="panel-body">
  

<div class="row text-center " style="padding: 10px;  margin: 0 auto; ">

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/keyboard')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/keyboard.png')}}">
  <p class="text-center">Keyboard</p>
</a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/keyboard.png')}}">
  <p class="text-center">Keyboard</p>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/keyboard.png')}}">
  <p class="text-center">Keyboard</p>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/keyboard.png')}}">
  <p class="text-center">Keyboard</p>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/keyboard.png')}}">
  <p class="text-center">Keyboard</p>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/keyboard.png')}}">
  <p class="text-center">Keyboard</p>
</div>





</div>











 
  </div>
            </div>
            </div><!-- end col -->

            
          </div><!-- /.row -->
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







