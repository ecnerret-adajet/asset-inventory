@extends('layouts.app')

@section('content')


 <section class="content-header">
          <h1>
             Reporting Page
            <small>Report</small>
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
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Summary Report</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                
                
                <!--- date select -->
                <div class="row">
                    {{ Form::open(array('url' => '/report', 'method' => 'get')) }}
                 <div class="col-md-3">
            <div class="form-group">
                <label for="select" class="control-label">Start Date</label>
                <div class='input-group date' id='datetimepicker2'>
                    {!! Form::input('date', 'start_date', null, ['class' => 'form-control']) !!}  
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>  
        
        <div class="col-md-3">
        <div class="form-group">
                <label for="select" class="control-label">End Date</label>
                <div class='input-group date' id='datetimepicker2'>
                     {!! Form::input('date', 'end_date', null, ['class' => 'form-control']) !!} 
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div> 
                
         <div class="col-md-3">
             
              <div class="form-group">
                <label for="select" class="control-label">&nbsp;</label>
                <div class='input-group'>
                
                     <button type="submit" class="btn bg-maroon btn-flat text-uppercase">
                                    <i class="fa fa-cogs" aria-hidden="true"></i> Generate Report
                                </button>
                </div>
            </div>
          
        </div>
                    
        <div class="col-md-3 text-lefts">
            
                <div class="form-group">
                <label for="select" class="control-label">&nbsp;</label>
                <div class='input-group'>
                    Generate History
                </div>
            </div>
            
         
        </div>
                {!! Form::close() !!}
            </div><!-- end row -->
            
                
                
                
                
                
                
            <hr/>
                
                
                
           
                <!-- end temp -->
                
               <div class="row">
                
                   <div class="col-md-6">
                   
                                                    

                   </div>
                   
                   
                   
                    <div class="col-md-6">
                   
                                                    
<div id="locations" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable-locations" class="hide">
   <thead>
        <tr>
            <th></th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th> @foreach($places->slice(0,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
            @foreach($places->slice(0,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
        <tr>
            <th>@foreach($places->slice(1,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
             @foreach($places->slice(1,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
        <tr>
            <th>@foreach($places->slice(2,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
             @foreach($places->slice(2,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
        <tr>
            <th>@foreach($places->slice(3,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
               @foreach($places->slice(3,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
        <tr>
            <th>@foreach($places->slice(4,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
            @foreach($places->slice(4,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($places->slice(5,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
             @foreach($places->slice(5,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
           <tr>
            <th>@foreach($places->slice(6,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
              @foreach($places->slice(6,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($places->slice(7,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
            @foreach($places->slice(7,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($places->slice(8,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
               @foreach($places->slice(8,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
          <tr>
            <th>@foreach($places->slice(9,1) as $place)
             {{ $place->name }}
            @endforeach</th>
            <td>
               @foreach($places->slice(9,1) as $place)
             {{ $place->assets->count() }}
            @endforeach
            </td>
        </tr>
    </tbody>
</table>
                    
                    
                   
                   </div>
                   
                   
                   
                
                </div> <!-- end row -->
                
                <hr/>
                
                <div class="row">
                
                <div class="col-md-12">
                    
                <div id="owns" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable-owns" class="hide">
   <thead>
        <tr>
            <th></th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th>
             @foreach($owns->slice(0,1) as $own)
             {{ $own->name }}
            @endforeach
            </th>
            <td>
           @foreach($owns->slice(0,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
        <tr>
            <th>@foreach($owns->slice(1,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
           @foreach($owns->slice(1,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
        <tr>
            <th>@foreach($owns->slice(2,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
            @foreach($owns->slice(2,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
        <tr>
            <th>@foreach($owns->slice(3,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
                 @foreach($owns->slice(3,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
        <tr>
            <th>@foreach($owns->slice(4,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
         @foreach($owns->slice(4,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(5,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
             @foreach($owns->slice(5,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(6,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
            @foreach($owns->slice(6,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(7,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
             @foreach($owns->slice(7,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(8,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
             @foreach($owns->slice(8,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(9,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
                @foreach($owns->slice(9,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(10,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
                 @foreach($owns->slice(10,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(11,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
               @foreach($owns->slice(11,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(12,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
                @foreach($owns->slice(12,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(13,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
             @foreach($owns->slice(13,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(14,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
             @foreach($owns->slice(14,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(15,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
               @foreach($owns->slice(15,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(16,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
              @foreach($owns->slice(16,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(17,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
              @foreach($owns->slice(17,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(18,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
              @foreach($owns->slice(18,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(19,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
              @foreach($owns->slice(19,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(20,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
              @foreach($owns->slice(20,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(21,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
              @foreach($owns->slice(21,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
         <tr>
            <th>@foreach($owns->slice(22,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
               @foreach($owns->slice(22,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
          <tr>
            <th>@foreach($owns->slice(23,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
               @foreach($owns->slice(23,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
          <tr>
            <th>@foreach($owns->slice(24,1) as $own)
             {{ $own->name }}
            @endforeach</th>
            <td>
               @foreach($owns->slice(24,1) as $own)
             {{ $own->assets->count() }}
            @endforeach
            </td>
        </tr>
    </tbody>
</table>    
                </div>
                </div>

                
                
                
            </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->


@endsection
