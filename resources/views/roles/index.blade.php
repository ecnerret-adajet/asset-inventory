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
                  <h3 class="box-title">Roles</h3>
                </div><!-- /.box-header -->
                  <div class="box-body">
                  
         
 
                    
               
                                    <hr/>    
                      
                      
@if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Description</th>
      <th width="280px">Action</th>
    </tr>
  @foreach ($roles as $key => $role)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $role->display_name }}</td>
    <td>{{ $role->description }}</td>
    <td>
      <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
      @permission('role-edit')
      <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
      @endpermission
      @permission('role-delete')
      {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
          @endpermission
    </td>
  </tr>
  @endforeach
  </table>
  {!! $roles->render() !!}
            
                  
                    </div>
                   </div>
                </div>
            </div>
        </section><!-- /.content -->

@endsection



