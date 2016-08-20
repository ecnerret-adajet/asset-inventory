@extends('layouts.app')

@section('content')



     <section class="content-header">
          <h1>
           Assignees
            <small>Employees Lists</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Assignee</li>
          </ol>
        </section>

   <!-- Main content -->
        <section class="content">
            
               <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Assignees Data Table</h3>
                </div><!-- /.box-header -->
                  <div class="box-body">
                  
         
                        <!-- Large modal -->
<button type="button" class="btn btn-warning bootstrap-modal-form-open" data-toggle="modal" data-target=".bs-example-modal-lg">Add Assignee <i class="fa fa-plus-circle"></i></button>     
                    
                    <span class="pull-right">Total Number of Assignees: <strong>{{$assignees->count()}}</strong> | Updated at: </span>
                                    <hr/>    
                      
                      
<table id="assignee"  class="table table-bordered table-striped dt-responsive nowrap"  >                    
    
  <thead>
  <tr class="info">
  <th>ASSIGNEE</th>
  <th>POSITION</th>
  <th>EMPLOYEE ID</th>
  <th>DEPARTMENT</th>
  <th>COMPANY</th>
  <th>ACTIONS</th>
  </tr>
  </thead>
        
        

 
  <tbody>
      @foreach ($assignees as $assignee)
      <tr>
      <td>{{$assignee->assignee_name }}</td>
          
      <td>{{$assignee->assignee_position}}</td>
      <td>{{$assignee->assignee_id}}</td>
          
          
      <td>
          @foreach($assignee->adepartments as $adepartment)
          {{$adepartment->name}}
           @endforeach
      </td>
         
      <td>
          @foreach($assignee->acompanies as $acompanie)
          {{$acompanie->name}}
          @endforeach
      </td>
          
          
        <td>
       <div class="btn-group">
      <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        Action
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li>
        <a class="bootstrap-modal-form-open" data-toggle="modal" data-target=".bs-edit{{$assignee->id}}-modal-lg" href="">Edit Assignee</a>
            <!-- temp
            <a href="{{url ('assignees/' .$assignee->id. '/edit') }}"> Edit Assignee</a>
-->
        </li>
          
          
        <li data-form="#frmDelete-{{$assignee->id}}" data-title="Delete Assignee" data-message="Are you sure you want to delete <strong style='color:#e74c3c'>{{$assignee->assignee_name }}</strong> ?" >
              <a class = "formConfirm" href="">Delete Assignee</a>
        </li>
        <li><a href="{{url('assets/create')}}">Assign to Assets</a></li>
          
          
          {!! Form::open(['id' => 'frmDelete-' . $assignee->id, 'style' => 'display:none', 'method' => 'DELETE', 'action' =>                                    ['AssigneesController@destroy', $assignee->id]  ]) !!}
          {{ Form::submit('Submit') }}
          {!! Form::close() !!}
          

       </ul>
    </div>
          </td>
          
          

      </tr>     
     @endforeach
        </tbody>
  
    
  <tfoot>
  <tr class="info">
  <th>ASSIGNEE</th>
  <th>POSITION</th>
  <th>EMPLOYEE ID</th>
  <th>DEPARTMENT</th>
  <th>COMPANY</th>
  <th>ACTIONS</th>
  </tr>
  </tfoot>
    
    
    
    </table>
                    
            
                  
                    </div>
                   </div>
                </div>
            </div>
        </section><!-- /.content -->

  


<!-- modal create new assignee form -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Assignee</h4>
      </div>
      <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
                <div class="panel-body">  
    {!! Form::model($assignee = new \App\Assignee,  ['class' => 'form-horizontal bootstrap-modal-form',  'url' => 'assignees',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm'])!!}
    {!! csrf_field() !!}
                    
                    
           @include('assignees.form')
                </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
    {!! Form::submit('Submit', ['class' => 'btn btn-primary'])  !!}              
      </div>
    {!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@foreach($assignees as $assignee)
<!-- modal edit form -->

<div class="modal fade bs-edit{{$assignee->id}}-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Assignee</h4>
      </div>
      <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
                <div class="panel-body"> 
                    
  {!! Form::model($assignee, ['method' => 'PATCH', 'action' => ['AssigneesController@update', $assignee->id], 'id' => 'frmEdit-' . $assignee->id, 'class' => 'form-horizontal bootstrap-modal-form', 'files' => true, 'name' => 'autoSumForm' ]) !!} 
                                        
    @include('assignees.form')
                    
                    
                </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
    {!! Form::submit('Submit', ['class' => 'btn btn-primary'])  !!}              
      </div>
    {!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->      
       @endforeach

@include('partials.assetsmodal')



        




@endsection



