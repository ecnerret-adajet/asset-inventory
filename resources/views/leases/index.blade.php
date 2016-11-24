@extends('layouts.app')

@section('content')



     <section class="content-header">
          <h1>
           Lease Items
            <small>Item Lists</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Lease Items</li>
          </ol>
        </section>

   <!-- Main content -->
        <section class="content">
            
               <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lease Items Table</h3>
                </div><!-- /.box-header -->
                  <div class="box-body">

<a href="{{url('leases/create')}}" class="btn-primary btn">Add New Item</a>


  <table class="table table-striped table-hover table_custom" width="100%">
  <thead>
    <tr class="thead-inverse">
      <th>#</th>
      <th>Supplier</th>
      <th>Unit Type</th>
      <th>Model</th>
      <th>Serial</th>
      <th>Date Received</th>
      <th>Date Surrender</th>
      <th></th>
    </tr>
  </thead>

  <tbody>

@forelse($leases as $lease)
    <tr>
      <td>
      <strong>
        {{$lease->id}}
      </strong>
      </td>
      <td>{{$lease->supplier}}</td>
      <td>{{ $lease->unit_type }}</td>
      <td>{{$lease->model}}</td>
      <td>{{$lease->serial}}</td>
      <td>{{date('m-d-Y', strtotime($lease->date_received))}}</td>
      <td>{{date('m-d-Y', strtotime($lease->date_surrender))}}</td>
      <td>
     <a href="" data-toggle="modal" class="btn btn-primary" data-target=".bs-delete{{$lease->id}}-modal-lg">
     <i class="fa fa-trash-o" aria-hidden="true"></i> Delete Item</a>
      </td>
    </tr>
  @empty
  <tr>
  <td colspan="8">
      <h2 class="text-center text-no-found">No data found <i class="fa fa-chain-broken" aria-hidden="true"></i></h2>
  </td>
  </tr>
  @endforelse

    
  </tbody>
</table> 

<ul class="pagination pull-right">
  {!! $leases->render() !!}
</ul>


 
                    
                   
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
 
                    </div>
        </section><!-- /.content -->



<!-- modal function -->



 @foreach($leases as $lease)
<!-- Delete a lease modal -->
<div class="modal fade bs-delete{{$lease->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete a lease item</h4>
      </div>
      <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
        <div class="panel-body text-center"> 
    
        <h4>  
            Are you sure you want to delete an item ?
        </h4>

    
      {!! Form::open(['method' => 'DELETE', 'action' => ['LeasesController@destroy', $lease->id]]) !!}
      {!! csrf_field() !!}
                                        
    </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
          
           
      </div>
      {!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
       @endforeach


@endsection



