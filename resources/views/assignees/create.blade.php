@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Assignee</div>
                <div class="panel-body">  
                    
    {!! Form::model($assignee = new \App\Assignee,  ['class' => 'form-horizontal',  'url' => 'assignees',  'files' => 'true', 'enctype'=>'multipart/form-data', 'novalidate' => 'novalidate', 'id' => 'assetinventoryForm'])!!}
    {!! csrf_field() !!}
                    
                    
                    
        
                    
                    
                    
                    
    @include('assignees.form', ['submitButtonText' => 'Submit'])



{!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>

@endsection
