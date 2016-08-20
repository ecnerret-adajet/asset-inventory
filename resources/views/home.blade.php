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
                  <h3 class="box-title text-uppercase">Asset per location</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin table-bordered">
                      <thead>
                        <tr>
                          <th class="danger">Location</th>
                          <th class="danger">Total Asset</th>
                          <th class="success">Status</th>
                          <th class="success">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>MANILA</td>
                          <td>
                           @foreach($places->slice(0,1) as $place)
                              <strong>  {{ $place->assets->count() }} </strong>
                           @endforeach
                          </td>
                          <td><span class="label label-success">Active</span></td>
                          <td>
                           @foreach($status->slice(0,1) as $statu)
                              <strong>  {{ $statu->assets->count() }} </strong>
                           @endforeach   
                          </td>
                        </tr>
                        <tr>
                          <td>ILOILO</td>
                          <td>
                            @foreach($places->slice(1,1) as $place)
                              <strong>  {{ $place->assets->count() }} </strong>
                           @endforeach  
                          </td>
                          <td><span class="label label-warning">Obsolete</span></td>
                          <td>
                           @foreach($status->slice(1,1) as $statu)
                              <strong>  {{ $statu->assets->count() }} </strong>
                           @endforeach    
                         </td>
                        </tr>
                        <tr>
                          <td>BATAAN</td>
                          <td>
                           @foreach($places->slice(2,1) as $place)
                              <strong> {{ $place->assets->count() }} </strong>
                           @endforeach   
                          </td>
                          <td><span class="label label-danger">Replacement</span></td>
                          <td>
                          @foreach($status->slice(2,1) as $statu)
                              <strong>  {{ $statu->assets->count() }} </strong>
                           @endforeach  
                          </td>
                        </tr>
                        <tr>
                          <td>ISABELA</td>
                          <td>
                             @foreach($places->slice(3,1) as $place)
                              <strong>  {{ $place->assets->count() }} </strong>
                           @endforeach 
                          </td>
                          <td><span class="label label-info">Supplemental</span></td>
                          <td>
                        @foreach($status->slice(3,1) as $statu)
                              <strong>  {{ $statu->assets->count() }} </strong>
                           @endforeach    
                        </td>
                        </tr>
                        <tr>
                          <td>CAPIZ</td>
                          <td>
                           @foreach($places->slice(4,1) as $place)
                              <strong> {{ $place->assets->count() }} </strong>
                           @endforeach 
                          </td>
                          <td><span class="label label-warning">Warranty</span></td>
                          <td>
                            @foreach($status->slice(4,1) as $statu)
                              <strong>  {{ $statu->assets->count() }} </strong>
                           @endforeach     
                          </td>
                        </tr>
                        <tr>
                          <td>DAVAO</td>
                          <td>
                          @foreach($places->slice(5,1) as $place)
                             <strong>{{ $place->assets->count() }}</strong> 
                           @endforeach 
                          </td>
                          <td>  
                            <span class="label label-danger">Repair</span>
                            
                        </td>
                            
                          <td>
                              @foreach($status->slice(5,1) as $statu)
                              <strong>  {{ $statu->assets->count() }} </strong>
                           @endforeach   
                        </td>
                        </tr>
                        <tr>
                          <td>BACOLOD</td>
                          <td>
                              @foreach($places->slice(6,1) as $place)
                              <strong>  {{ $place->assets->count() }} </strong>
                           @endforeach 
                          </td>
                          <td><span class="label label-primary">Defective</span></td>
                          <td>
                             @foreach($status->slice(6,1) as $statu)
                              <strong>  {{ $statu->assets->count() }}  </strong>
                           @endforeach  
                          </td>
                        </tr>
                             <tr>
                          <td>ROXAS</td>
                          <td>
                            @foreach($places->slice(7,1) as $place)
                              <strong>  {{ $place->assets->count() }} </strong>
                           @endforeach        
                          </td>
                          <td><span class="label label-default">Disposed</span></td>
                          <td>
                            @foreach($status->slice(7,1) as $statu)
                              <strong>  {{ $statu->assets->count() }} </strong>
                           @endforeach        
                          </td>
                        </tr>
                             <tr>
                          <td>DUMAGUETE</td>
                          <td>
                         @foreach($places->slice(8,1) as $place)
                              <strong>   {{ $place->assets->count() }} </strong>
                           @endforeach 
                          </td>
                          <td></td>
                          <td></td>
                        </tr>
                             <tr>
                          <td>KALIBO</td>
                          <td>
                         @foreach($places->slice(9,1) as $place)
                              <strong>     {{ $place->assets->count() }} </strong>
                           @endforeach 
                         </td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              
              </div><!-- /.box -->
                
                
                
           <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    
                    
<div id="test" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable" class="hide">
   <thead>
        <tr>
            <th></th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th>Active</th>
            <td>
            @foreach($status->slice(0,1) as $statu)
                 {{ $statu->assets->count() }}
            @endforeach 
            </td>
        </tr>
        <tr>
            <th>Obsolete</th>
            <td>
              @foreach($status->slice(1,1) as $statu)
              {{ $statu->assets->count() }}
            @endforeach   
            </td>
        </tr>
        <tr>
            <th>Replacement</th>
            <td>
             @foreach($status->slice(2,1) as $statu)
                 {{ $statu->assets->count() }} 
            @endforeach  
            </td>
        </tr>
        <tr>
            <th>Supplemental</th>
            <td>
               @foreach($status->slice(3,1) as $statu)
                {{ $statu->assets->count() }}
                @endforeach  
            </td>
        </tr>
        <tr>
            <th>Warranty</th>
            <td>
             @foreach($status->slice(4,1) as $statu)
                {{ $statu->assets->count() }}
                @endforeach 
            </td>
        </tr>
         <tr>
            <th>Repair</th>
            <td>
              @foreach($status->slice(5,1) as $statu)
                {{ $statu->assets->count() }}
                @endforeach  
            </td>
        </tr>
         <tr>
            <th>Defective</th>
            <td>
              @foreach($status->slice(6,1) as $statu)
                {{ $statu->assets->count() }}
                @endforeach  
            </td>
        </tr>
         <tr>
            <th>Disposed</th>
            <td>
              @foreach($status->slice(7,1) as $statu)
                {{ $statu->assets->count() }}
                @endforeach  
            </td>
        </tr>
    </tbody>
</table>
                    
                    
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
                    50% Increase in 30 Days
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
                    20% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="ion-android-call"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Phones</span>
                  <span class="info-box-number">
                       @foreach($owns->slice(8,1) as $own)
                  {{ $own->assets->count() }}  
                           @endforeach  
                </span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Direct Messages</span>
                  <span class="info-box-number">163,921</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                  </div>
                  <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

             
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

