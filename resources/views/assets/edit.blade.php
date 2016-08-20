@extends('layouts.app')

@section('content')

 <section class="content-header">
          <h1>
            Edit Asset Form
            <small>Edit</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Edit/Transfer Asset</li>
          </ol>
        </section>

        <!-- Main content -->


<section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Transfer/Edit Asset</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                    
          {!! Form::model($asset, ['method' => 'PATCH', 'action' => ['AssetsController@update', $asset->id], 'class' => 'form-horizontal',  'files' => true, 'name' => 'autoSumForm' ]) !!} 
    {!! csrf_field() !!}
                    
                    
                    
        
                    
                    
                    
                    
    @include('assets.form', ['submitButtonText' => 'Update'])



{!! Form::close() !!}
                    
    
     </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->

@endsection
