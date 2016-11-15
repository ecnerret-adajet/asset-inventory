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
                      
<table id="table_custom"  class="table display table-bordered table-striped dt-responsive nowrap"  width="100%">                    
    
 
  <thead>
  <tr>
   <th>Name</th>
  <th>Serial</th>
  <th>Finance Code</th>
  <th>IT Code</th>
  <th>Company</th>
  <th>Remarks</th>
  <th>Loan</th>
  <th>Action</th>
  </tr>
  </thead>
        
        

 
  <tbody>
      @foreach($laptops as $laptop)
        <tr>
            <td>
            <a data-toggle="modal" data-target=".bs-show{{$laptop->id}}-modal-lg" href="">
            {{$laptop->model}}
            </a>
            </td>
              <td>
            {{$laptop->serial}}
            </td>
              <td>
            {{$laptop->finance_code}}
            </td>
              <td>
            {{$laptop->it_code}}
            </td>
            <td>
            @foreach($laptop->acompanies as $acompanie)
            {{ $acompanie->name }}
            @endforeach
            </td>
            <td>
            {{$laptop->remarks}}
            </td>
            <td>

            @forelse($laptop->loans->where('on_loan', 1, false) as $loan)
            <button class="btn btn-default btn-block disabled"  href="">
            On Loan  
            </button>
            @empty
            <a class="btn btn-danger btn-block" href="{{ url('loans/create/'. $laptop->id) }}">
            Loan
            </a>
            @endforelse

            </td>
            <td>
               <a class="btn btn-primary btn-block" href="{{url('laptops/'.$laptop->id.'/edit')}}">
            Edit
            </a>
            </td>
           
        </tr>
      @endforeach
  </tbody>
    </table>


    @foreach($laptops as $laptop)
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
       @endforeach













                    </div>
                   </div>
                </div>
            </div>
        </section><!-- /.content -->

  





@endsection



