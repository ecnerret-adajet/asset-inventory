@extends('layouts.app')

@section('content')



     <section class="content-header">
          <h1>
           Personal Laptop Items
            <small>Item Lists</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Personal Laptop Items</li>
          </ol>
        </section>

   <!-- Main content -->
        <section class="content">
            
               <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Personal Laptop Table</h3>
                </div><!-- /.box-header -->
                  <div class="box-body">

<a href="{{url('personallaptops/create')}}" class="btn-primary btn"><i class="fa fa-laptop"></i> Add New Item</a>


  <table class="table table-striped table-hover table_custom" width="100%">
  <thead>
    <tr class="thead-inverse">
      <th>#</th>
      <th>User</th>
      <th>Model</th>
      <th>Serial</th>
      <th>Purpose</th>
      <th>Approved By</th>
      <th>Explanation</th>
      <th></th>
    </tr>
  </thead>

  <tbody>

@forelse($personallaptops as $personal)
    <tr>
      <td>
      <strong>
        {{$personal->id}}
      </strong>
      </td>
      <td>{{$personal->user_laptop}}</td>
      <td>{{$personal->model }}</td>
      <td>{{$personal->serial_no}}</td>
      <td>{{$personal->purpose}}</td>
      <td>{{$personal->approved_by}}</td>
      <td>{{$personal->explanation}}</td>
      <td>
     <a href="" data-toggle="modal" class="btn btn-primary" data-target=".bs-delete{{$personal->id}}-modal-lg">
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
  {!! $personallaptops->render() !!}
</ul>
 
                    
                   
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
 
                    </div>
        </section><!-- /.content -->



<!-- modal function -->



 @foreach($personallaptops as $personal)
<!-- Delete a lease modal -->
<div class="modal fade bs-delete{{$personal->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete an item</h4>
      </div>
      <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
        <div class="panel-body text-center"> 
    
        <h4>  
            Are you sure you want to delete this item ?
        </h4>

    
     {!! Form::open(['method' => 'DELETE', 'action' =>                                    ['PersonallaptopsController@destroy', $personal->id]  ]) !!}
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



