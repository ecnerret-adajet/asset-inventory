@extends('layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
            <small>{{$users->count()}} total Users</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <a class="btn btn-primary btn-block margin-bottom bootstrap-modal-form-open" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Add New</a>
           
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Roles</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> Administrator <span class="label label-primary pull-right">
                        @foreach($users->slice(0,1) as $user)
                        {{$user = App\User::where('role', 'Administrator')->count()}}
                        @endforeach
                        </span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Read <span class="label label-primary pull-right">  @foreach($users->slice(0,1) as $user)
                        {{$user = App\User::where('role', 'Read')->count()}}
                        @endforeach</span></a></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Encoder <span class="label label-primary pull-right">@foreach($users->slice(0,1) as $user)
                        {{$user = App\User::where('role', 'Encoder')->count()}}
                        @endforeach</span></a></a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
         
                  
                  
                  
                <div class="box-body">
                    
    <table id="assignee" class="table display text-center table-bordered table-hover table-striped dt-responsive nowrap" cellspacing="0" width="100%">                    
    
  <thead>
  <tr class="success">
  <th>NAME</th>
  <th>EMAIL</th>
  <th>DEPARTMENT</th>
  <th>COMPANY</th>
  <th>ROLE</th>
  <th>ACTION</th>
  

    </tr>
      
      
      
	
	
  </thead>
        
    
  <tfoot>
  <tr  class="success">
  <th>NAME</th>
  <th>EMAIL</th>
  <th>DEPARTMENT</th>
  <th>COMPANY</th>
  <th>ROLE</th>
  <th>ACTION</th>


    </tr>
	
  </tfoot>
        

 
  <tbody>
      @foreach ($users as $user)

   
      <tr>
          
          
          
      <td>
          {{$user->name }}
      </td>
          
          
      <td>{{$user->email}}</td>
      <td>{{$user->department}}</td>
          
      <td>{{$user->company}}</td>
          
          
          
      <td>
         {{$user->role}}   
      </td>
          
          
          
          
       
          
           <td> 
              
      <i class="fa fa-trash"></i>
          
          </td>
    
          

      </tr>   
      
      
      
      
     @endforeach
        </tbody>
    </table>
                    
                    
                    
                    
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
              
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->




<!-- modal form -->

<div class="modal modal-primary fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add User</h4>
      </div>
      <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
                <div class="panel-body">  
                    
                    
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                        
                                <div class="form-group">
                    <label class="col-md-4 control-label"> 
            {!! Form::label('image', 'Choose an image') !!}
                    </label>
                     <div class="col-md-6">
           <input name="image" type="file" class="filestyle" data-iconName="glyphicon glyphicon-inbox" data-buttonName="btn-primary">
                    </div>
        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Company</label>
                            <div class="col-md-6">
                             {{ Form::select('company', array(
                                'LFUG' => 'LFUG', 
                                'PFMC' => 'PFMC', 
                                'ATH' => 'ATH', 
                                'MTPCI' => 'MTPCI', 
                                'PLILI' => 'PLILI', 
                                'AGRISOL' => 'AGRISOL', 
                                'LFMI' => 'LFMI', 
                                'CSC' => 'CSC', 
                                'MGC' => 'MGC', 
                                'MGPCI' => 'MGPCI'), 
                                null, array('placeholder' => ' -- Select Company --', 'class'=>'form-control' )) }}
                                
                                
                                 @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
                        
                        
                        
                              <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                             {{ Form::select('department', array(
                                'Audit' => 'Audit', 
                                'Admin' => 'Admin', 
                                'Purchasing' => 'Purchasing', 
                                'Finance' => 'Finance', 
                                'Accounting' => 'Accounting', 
                                'Sales' => 'Sales', 
                                'ITD' => 'ITD', 
                                'Legal' => 'Legal', 
                                'Marketing' => 'Marketing'), 
                                null, array('placeholder' => ' -- Select Department --', 'class'=>'form-control' )) }}
                                
                                
                                 @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                  
                        
                        

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        
                         <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Role</label>
                            <div class="col-md-6">
                             {{ Form::select('role', array(
                                'Read' => 'Read', 
                                'Encoder' => 'Encoder', 
                                'Administrator' => 'Administrator'), 
                                null, array('placeholder' => ' -- Select Role --', 'class'=>'form-control' )) }}
                                
                               @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif 
                                
                            </div>
                        </div>
                        
                        
                        
                  
                  
                    
                </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
   <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>            
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->











@endsection



