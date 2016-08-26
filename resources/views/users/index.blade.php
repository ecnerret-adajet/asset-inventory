@extends('layouts.app')

@section('content')

 <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Users
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">

          <div class="col-md-12">
                        <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"> <i class="fa fa-user" aria-hidden="true"></i> User Management  <a href="{{url('users/create')}}" class="btn btn-info"><i class="fa fa-user-plus" aria-hidden="true"></i> Add User</a> </h3>
  </div>
  <div class="panel-body">
     @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif


  <table id="dafault-table"  class="table table-bordered table-striped dt-responsive nowrap">  
   <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Roles</th>
      <th>Action</th>
    </tr>
    </thead>
    <tfoot>
   <tr>
      <th>No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Roles</th>
      <th>Action</th>
    </tr>
    </tfoot>
 <tbody>

  @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->roles))
        @foreach($user->roles as $v)
          <label class="label label-success">{{ $v->display_name }}</label>
        @endforeach
      @endif
    </td>
    <td>
      <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
      <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
    </td>
  </tr>
  @endforeach

    </tbody>
  </table>
  </div>

            </div>
            </div><!-- end col -->

            
          </div><!-- /.row -->
        </section><!-- /.content -->









@endsection



