@extends('layouts.app')

@section('content')


 <section class="content-header">
          <h1>
            Disposal Form
            <small>Create</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Disposal Form</a></li>
            <li class="active">Create Disposal</li>
          </ol>
        </section>

        <!-- Main content -->


<section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">New Disposal</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                
                
                
                
                
                <div class="row">
	

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
         <div class="panel-body">
             
             
            
             
                                    
        {!! Form::model($disposal = new \App\Disposal,  ['class' => 'form-horizontal',  'url' => 'disposals',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm'])!!}
    {!! csrf_field() !!}                
        
                    
                    
                    
                    
    @include('disposals.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}
                
                
            </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->


@endsection
