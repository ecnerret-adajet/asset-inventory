@extends('layouts.app')

@section('content')


 <section class="content-header">
          <h1>
            Add Asset Form
            <small>Create</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Create Asset</li>
          </ol>
        </section>

        <!-- Main content -->


<section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Add New</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                
               {!! Form::model(array([$asset = new \App\Asset, $program= new \App\Program]),  ['class' => 'form-horizontal',  'url' => 'assets',  'files' => true, 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm', 'name' => 'autoSumForm'])!!}
    {!! csrf_field() !!}
                    
                    
                    
        
                    
                    
                    
                    
    @include('assets.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}
                
                
            </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->


@endsection
