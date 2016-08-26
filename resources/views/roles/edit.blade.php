@extends('layouts.app')

@section('content')



     <section class="content-header">
          <h1>
           Roles
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
                  <h3 class="box-title">Edit Roles</h3>
                </div><!-- /.box-header -->
                  <div class="box-body">
                  
         
 
                    
               
                                    <hr/>    
 @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('display_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permission:</strong>
                <br/>
                @foreach($permission as $value)
                  <label style="margin-right: 20px;">{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                  {{ $value->display_name }}</label>
                
                @endforeach
            </div>
        </div>
      
  </div>


  <div class="row">
                    <div class="col-md-6">
                     <a href="{{ url('/roles') }}" class="btn btn-default">Cancel</a>
                    </div>

                    <div class="col-md-6">
                   {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])  !!}
                    </div>
                   </div> 
  {!! Form::close() !!}
            
                  
                    </div>
                   </div>
                </div>
            </div>
        </section><!-- /.content -->

@endsection



