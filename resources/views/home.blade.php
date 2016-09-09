@extends('layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Beta Version</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion-social-buffer-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Assets</span>
                  <span class="info-box-number">{{$assets->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Assignee</span>
                  <span class="info-box-number">{{$assignees->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion-ios-loop-strong"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Transferred Asset</span>
                  <span class="info-box-number">{{ $revisions->count() }}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion-android-contacts"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Users</span>
                  <span class="info-box-number">{{$users->count()}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

      
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                
                   <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title text-uppercase">Browse Assets</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">

<div class="row box-body" style="margin-bottom: 0 ! important; padding-bottom: 0 ! important;">
<div class="col-md-3 col-sm-6 box-asset">
<a href="{{url('own/keyboard')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/keyboard.png')}}">
  <p class="text-center">Keyboard</p>
</a>
</div>

<div class="col-md-3 col-sm-6 box-asset">
<a href="{{url('own/mouse')}}">
  <img class="img-responsive img-asset"  src="{{asset('img/assets-sub/mouse.png')}}">
  <p class="text-center">Mouse</p>
  </a>
</div>

<div class="col-md-3 col-sm-6 box-asset">
<a href="{{url('own/microphones')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/basic-microphone.png')}}">
  <p class="text-center">Microphone</p>
  </a>
</div>

<div class="col-md-3 col-sm-6 box-asset">
<a href="{{url('own/biometrics')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/fingerprint-scanning.png')}}">
  <p class="text-center">biometrics</p>
  </a>
</div>

</div><!-- end row -->

<div class="row box-body" style="margin-bottom: 0 ! important; padding-bottom: 0 ! important; padding-top: 0 ! important;">

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/monitor')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/monitor.png')}}">
  <p class="text-center">Monitor</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/tv-monitor')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/monitor.png')}}">
  <p class="text-center">TV Monitor</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/printer')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/printer.png')}}">
  <p class="text-center">Printer</p>
</a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/printer-scanner')}}">
  <img class="img-responsive img-asset"  src="{{asset('img/assets-sub/print.png')}}">
  <p class="text-center">Printer Scanner</p>
  </a>
</div>

</div>


<div class="row box-body" style="margin-bottom: 0 ! important; padding-bottom: 0 ! important; padding-top: 0 ! important;">

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/cctv')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/security-camera.png')}}">
  <p class="text-center">Cctv</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/camera')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/photo-camera.png')}}">
  <p class="text-center">Camera</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/projector')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/projector.png')}}">
  <p class="text-center">Projector</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/switches')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/server.png')}}">
  <p class="text-center">Switches</p>
  </a>
</div>

</div>



<div class="row box-body" style="margin-bottom: 0 ! important; padding-bottom: 0 ! important; padding-top: 0 ! important;">

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/ups')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/battery.png')}}">
  <p class="text-center">UPS</p>
</a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/firewalls')}}">
  <img class="img-responsive img-asset"  src="{{asset('img/assets-sub/firewall.png')}}">
  <p class="text-center">Firewalls</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/synology')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/server.png')}}">
  <p class="text-center">Synology</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/server')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/server-1.png')}}">
  <p class="text-center">Server</p>
  </a>
</div>

</div>

<div class="row box-body" style="margin-bottom: 0 ! important; padding-bottom: 0 ! important; padding-top: 0 ! important;">

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/fortigate')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/router.png')}}">
  <p class="text-center">Fortigate</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/hard-disk')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/hard-drive.png')}}">
  <p class="text-center">Hard Disk</p>
  </a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/cpu')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/microchip.png')}}">
  <p class="text-center">CPU</p>
</a>
</div>

<div class="col-md-3  col-sm-6 box-asset">
<a href="{{url('own/phones')}}">
  <img class="img-responsive img-asset"  src="{{asset('img/assets-sub/phone.png')}}">
  <p class="text-center">Phones</p>
  </a>
</div>

</div>


<div class="row box-body" style="margin-bottom: 0 ! important; padding-bottom: 0 ! important; padding-top: 0 ! important;">

<div class="col-md-3 col-sm-6 box-asset">
<a href="{{url('own/fax')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/portable-scanner.png')}}">
  <p class="text-center">Fax</p>
  </a>
</div>

<div class="col-md-3 col-sm-6 box-asset">
<a href="{{url('own/video-card')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/video-card-1.png')}}">
  <p class="text-center">Video Card</p>
  </a>
</div>

<div class="col-md-3 col-sm-6 box-asset">
<a href="{{url('own/sound-card')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/video-card.png')}}">
  <p class="text-center">Sound Card</p>
  </a>
</div>

<div class="col-md-3 col-sm-6 box-asset">
<a href="{{url('own/motherboard')}}">
  <img class="img-responsive img-asset" src="{{asset('img/assets-sub/motherboard.png')}}">
  <p class="text-center">MotherBoard</p>
  </a>
</div>

</div>



                </div><!-- /.box-body -->
              
              </div><!-- /.box -->
                
                
                
          
            
                
                
                
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="ion-monitor"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Desktop</span>
                  <span class="info-box-number">
                     @foreach($owns->slice(0,1) as $own)
                  {{ $own->assets->count() }}  
                           @endforeach  
                    
                  </span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
            
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="ion ion-laptop"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Laptops</span>
                  <span class="info-box-number">
                     @foreach($owns->slice(2,1) as $own)
                  {{ $own->assets->count() }}  
                           @endforeach  
                 </span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                  </div>
                  <span class="progress-description">
                   
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
           
           

             
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Asset History</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                      
                      
                        @foreach($assets->slice(0,5) as $asset)
                     
                            
                    <li class="item">
                      <div class="product-img">
                          
                              @if (file_exists(public_path('images/'.$asset->id.'.jpg')))
                             <img class="img-responsive img-rounded" style="width: 50px; height: 50px;" src="{{asset('/images/'.$asset->id.'.jpg') }}" /> 
                            @else
                            <img class="img-responsive img-rounded" style="width: 50px; height: 50px;" src="{{asset('/images/placeholder.jpg') }}" /> 
                            @endif
                          
                      </div>


                      <div class="product-info">
                        <a href="{{url ('/assets', $asset->id) }}" class="product-title">{{$asset->model}}<span class="label label-danger pull-right">
                          Assigned to: {{$asset->trasfer_name}}   
                            </span></a>
                        <span class="product-description">
                          {{$asset->serial_number }}
                        </span>
                          <span>
                              
                            @foreach($asset->revisions as $revision)
                             @foreach ($revision->old as $key => $v)


                    {{ $revision->old($key) }} Transferred to {{ $revision->new($key) }}


                              @endforeach
                            @endforeach

                          </span>
                      </div>
                    </li><!-- /.item -->
                      
                      
                          @endforeach
                   
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::;" class="uppercase">View all transaction</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->


              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Added Assets</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                      
                      
                        @foreach($assets->slice(0,5) as $asset)
                     
                            
                    <li class="item">
                      <div class="product-img">
                          
                              @if (file_exists(public_path('images/'.$asset->id.'.jpg')))
                             <img class="img-responsive img-rounded" style="width: 50px; height: 50px;" src="{{asset('/images/'.$asset->id.'.jpg') }}" /> 
                            @else
                            <img class="img-responsive img-rounded" style="width: 50px; height: 50px;" src="{{asset('/images/placeholder.jpg') }}" /> 
                            @endif
                          
                      </div>
                      <div class="product-info">
                        <a href="{{url ('/assets', $asset->id) }}" class="product-title">{{$asset->model}}<span class="label label-danger pull-right">
                            @foreach ($asset->owns as $own)
                                 {{ $own->name }}
                                    @endforeach
                            </span></a>
                        <span class="product-description">
                          {{$asset->serial_number }}
                        </span>
                          <span>
                              
                              
                    {{ ( date('F d, Y', strtotime($asset->created_at)) == 'January 01, 1970' ? '00-00-00' : date('F d, Y', strtotime($asset->created_at)) ) }}          
                          </span>
                      </div>
                    </li><!-- /.item -->
                      
                      
                          @endforeach
                   
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::;" class="uppercase">View All Products</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
            
            
         
            
        </section><!-- /.content -->

   
      
@endsection

