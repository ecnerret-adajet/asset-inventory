@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Assignee</div>
                <div class="panel-body">  
                    
        {!! Form::model($assignee, ['method' => 'PATCH', 'action' => ['AssigneesController@update', $assignee->id], 'class' => 'form-horizontal',  'files' => true, 'name' => 'autoSumForm' ]) !!} 
                    
                    
    @include('assignees.form')
                    
                    
       <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                
                                {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
                             {!! Form::submit('Update', ['class' => 'btn btn-primary'])  !!}        
                             
                            </div>
        
                </div> 
                    



{!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>

@endsection