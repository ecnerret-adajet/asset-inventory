@extends('layouts.app')
@section('content')


 <section class="content-header">
          <h1>
            Add New lease
            <small>Create</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">leases</a></li>
          </ol>
        </section>

        <!-- Main content -->


<section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Add lease</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                
           {!! Form::model($lease = new \App\Lease,  ['class' => 'form-horizontal',  'url' => 'leases',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'leasesForm'])!!}
        {!! csrf_field() !!}
                    
        
                                       
    @include('leases.form', ['submitButtonText' => 'Submit'])



    {!! Form::close() !!}
                
                
            </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->



@endsection