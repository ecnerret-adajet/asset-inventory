@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
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
                        
                        
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
