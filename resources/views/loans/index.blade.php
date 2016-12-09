@extends('layouts.app')

@section('content')



     <section class="content-header">
          <h1>
           Loan Laptop
            <small>Laptop Lists</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Loan Laptop</li>
          </ol>
        </section>

   <!-- Main content -->
        <section class="content">
            
               <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Loan Laptop Table</h3>
                </div><!-- /.box-header -->
                  <div class="box-body">
                  
         
                        <!-- Large modal -->
  <a href="{{url('laptops/create')}}" class="btn btn-primary"><i class="fa fa-laptop"></i> Add Laptop</a> 

 
                    
                   
                      <hr/> 
                      
<table id="table_custom"  class="text-center table display  table-striped dt-responsive nowrap table_custom"  width="100%">                    
    
 
  <thead>
  <tr>
   <th>#</th>
   <th>Name</th>
  <th>Serial</th>

  <th>IT Code</th>

  <th>Loan</th>

   <th>Current User</th>
  <th>Action</th>

   
  </tr>
  </thead>
        
        

 
  <tbody>
      @foreach($laptops as $laptop)
        <tr>
         <td>
            {{$laptop->id}}
            </td>
            <td>
            <a data-toggle="modal" data-target=".bs-show-laptop{{$laptop->id}}-modal-lg" href="">
            {{$laptop->model}}
            </a>
            </td>
              <td>
            {{$laptop->serial}}
            </td>
         
              <td>
            {{$laptop->it_code}}
            </td>
   
           
            <td>
           @forelse($laptop->loans->where('on_loan', 1, false) as $loan)
          <button class="btn btn-default btn-block disabled" style="font-size:15px">
            <i class="ion-record" style="color:#e74c3c;"></i>
          Not available
          </button>


            @empty
            <a class="btn btn-primary btn-block" style="font-size:15px" href="{{ url('loans/create/'. $laptop->id) }}">
             <i class="ion-bookmark"></i> Loan
            </a>
            @endforelse
            </td>


                            <td>


           @forelse($laptop->loans->where('on_loan', 1, false)->reverse()->take(1) as $loan)
                  {{$loan->user_loan}}
            @empty
          

          <button class="btn btn-default btn-block disabled" style="font-size:15px">
            <i class="ion-record" style="color:#2ecc71;"></i>
          Available
          </button>

            @endforelse


            </td> 


            <td>


            <button data-toggle="modal" data-target=".bs-show{{$laptop->id}}-modal-lg" class="btn btn-primary btn-block" style="font-size:15px">
            <i class="ion-clock"></i>
           View History
          </button>

            </td>


     
       
           
        </tr>
      @endforeach
  </tbody>
    </table>


    @foreach($laptops as $laptop)
<!-- Show laptop modal form -->
<div class="modal fade bs-show-laptop{{$laptop->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content" style="min-width: 850px;  margin-left: -80px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Loan Laptop history</h4>
      </div>
      <div class="modal-body">

          <div class="row">

            <div class="col-md-4">
                <table>
                    <tr>
                    <td>
                    <img class="img-responsive" 
                         style="padding: 30px; border: 2px dashed #000;" src="{{asset('/img/web/laptop.png')}}">
                    </td>
                    </tr>
                </table>
                
              </div>

              <div class="col-md-8">
                  <table class="table_custom table-bordered" style="margin: 0 ! important" width="100%">
                  <thead>
                      <tr class="thead-inverse">
                        <th width="35%">Model</th>
                        <td style="padding-left: 20px;">{{$laptop->model}}</td>
                      </tr>

                       <tr class="thead-inverse">
                        <th width="35%">Serial</th>
                        <td style="padding-left: 20px;">{{$laptop->serial}}</td>
                      </tr>

                       <tr class="thead-inverse">
                        <th width="35%">Finance Code</th>
                        <td style="padding-left: 20px;">{{$laptop->finance_code}}</td>
                      </tr>

                       <tr class="thead-inverse">
                        <th width="35%">IT Code</th>
                        <td style="padding-left: 20px;">{{$laptop->it_code}}</td>
                      </tr>

                       <tr class="thead-inverse">
                        <th width="35%">Remarks</th>
                        <td style="padding-left: 20px;">{{$laptop->remarks}}</td>
                      </tr>
                </thead>
                  </table>

              </div>

          </div>
      
      </div><!-- modal body -->
      <div class="modal-footer">

      <a class="btn btn-primary pull-left" href="{{url('laptops/'.$laptop->id.'/edit')}}"><i class="ion-compose"></i> Edit</a>
      <button class="btn btn-danger pull-left" data-toggle="modal" data-target=".bs-delete{{$laptop->id}}-modal-lg"><i class="ion-trash-a"></i> Delete</button>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
  




<!-- Show modal form -->
<div class="modal fade bs-show{{$laptop->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content" style="min-width: 850px;  margin-left: -80px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Loan Laptop history</h4>
      </div>
      <div class="modal-body">
        
                  <table class="table table-striped table-hover text-center">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Date From</th>
                        <th>Date To</th>
                        <th>Remarks</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($laptop->loans as $loan)
                      <tr>
                        <td>{{$loan->user_loan}}</td>
                        <td>{{$loan->from_date}}</td>
                        <td>{{$loan->to_date}}</td>
                        <td>{{$loan->remarks}}</td>
                        <td>

              @if($loan->on_loan == 1)

               {!! Form::model($loan, ['method' => 'PATCH', 'action' => ['LoansController@update', $loan->id]]) !!} 
                      {!! csrf_field() !!}

                        <button type="submit" class="btn btn-danger btn-block" >
                        Mark as returned
                        </button>

                {!! Form::close() !!}

                @else
         
           <button class="btn btn-default btn-block disabled">
              Returned
            </button>
            @endif

                        </td>
                      </tr>
                     @empty
                     <tr>
                     <td colspan="5" class="text-center">
                       <h2>No loans !</h2>
                     </td>
                     </tr>
                     @endforelse
                    </tbody>
                  </table>                     
             
      
      </div><!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->      




<!-- Delete a laptop modal -->
<div class="modal fade bs-delete{{$laptop->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete a Laptop</h4>
      </div>
      <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
        <div class="panel-body text-center"> 
    
        <h4>  
            Are you sure you want to delete a Laptop ?
        </h4>
        <em>
        This will include laptop loan history..
        </em>
    
     {!! Form::open(['method' => 'DELETE', 'action' =>                                    ['LaptopsController@destroy', $laptop->id]  ]) !!}
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













                    </div>
                   </div>
                </div>
            </div>
        </section><!-- /.content -->

  





@endsection



