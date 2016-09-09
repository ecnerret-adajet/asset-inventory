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
  <div class="panel-body" style="padding: 30px;">
  

<div class="row text-center ">

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/keyboard')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/keyboard.png')}}">
  <p class="text-center">Keyboard</p>
</a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/mouse')}}">
  <img class="img-responsive img-asset"  src="{{asset('img/assets-sub/mouse.png')}}">
  <p class="text-center">Mouse</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/microphones')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/basic-microphone.png')}}">
  <p class="text-center">Microphone</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/biometrics')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/fingerprint-scanning.png')}}">
  <p class="text-center">biometrics</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/monitor')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/monitor.png')}}">
  <p class="text-center">Monitor</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/tv-monitor')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/monitor.png')}}">
  <p class="text-center">TV Monitor</p>
  </a>
</div>

</div>



<div class="row text-center ">

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/printer')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/printer.png')}}">
  <p class="text-center">Printer</p>
</a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/printer-scanner')}}">
  <img class="img-responsive img-asset"  src="{{asset('img/assets-sub/print.png')}}">
  <p class="text-center">Printer Scanner</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/cctv')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/security-camera.png')}}">
  <p class="text-center">Cctv</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/camera')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/photo-camera.png')}}">
  <p class="text-center">Camera</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/projector')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/projector.png')}}">
  <p class="text-center">Projector</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/switches')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/server.png')}}">
  <p class="text-center">Switches</p>
  </a>
</div>

</div>


<div class="row text-center ">

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/ups')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/battery.png')}}">
  <p class="text-center">UPS</p>
</a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/firewalls')}}">
  <img class="img-responsive img-asset"  src="{{asset('img/assets-sub/firewall.png')}}">
  <p class="text-center">Firewalls</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/synology')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/server.png')}}">
  <p class="text-center">Synology</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/server')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/server-1.png')}}">
  <p class="text-center">Server</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/fortigate')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/router.png')}}">
  <p class="text-center">Fortigate</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/hard-disk')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/hard-drive.png')}}">
  <p class="text-center">Hard Disk</p>
  </a>
</div>

</div>



<div class="row text-center ">

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/cpu')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/microchip.png')}}">
  <p class="text-center">CPU</p>
</a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/phones')}}">
  <img class="img-responsive img-asset"  src="{{asset('img/assets-sub/phone.png')}}">
  <p class="text-center">Phones</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/fax')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/portable-scanner.png')}}">
  <p class="text-center">Fax</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/video-card')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/video-card-1.png')}}">
  <p class="text-center">Video Card</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/sound-card')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/video-card.png')}}">
  <p class="text-center">Sound Card</p>
  </a>
</div>

<div class="col-md-2 col-sm-4 col-xs-3 box-asset">
<a href="{{url('own/motherboard')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/motherboard.png')}}">
  <p class="text-center">MotherBoard</p>
  </a>
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







