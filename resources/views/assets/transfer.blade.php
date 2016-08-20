@extends('layouts.app')

@section('content')

 <section class="content-header">
          <h1>
            Transfer Asset Form
            <small>Edit</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Transfer Asset</li>
          </ol>
        </section>

        <!-- Main content -->


<section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Transfer Asset</h3>
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
             
            
       {!! Form::model($asset, ['method' => 'PATCH', 'action' => ['AssetsController@update', $asset->id], 'class' => 'form-horizontal',  'files' => true, 'name' => 'autoSumForm' ]) !!} 
    {!! csrf_field() !!}
             
               
             
             
             
             
             
             
                        <div class="form-group{{ $errors->has('assignee_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('trasfer_name', 'New Assignee Name:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('trasfer_name', $assignees, null, ['id' => 'assignee_list2', 'class' => 'form-control assignee_list',  'multiple']) !!}

                        @if ($errors->has('assignee_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('assignee_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
             
             
             
             
             
             
                       <div class="hidden form-group{{ $errors->has('own_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('own_list', 'Asset Type:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('own_list[]', $owns, null, ['id' => 'myField', 'class' => 'form-control', 'placeholder' => '-- Select Asset Type --']) !!}

                        @if ($errors->has('own_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('own_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
                 
             
             
                        <div class="form-group">
                         <label class="col-md-4 control-label"> 
                        {!! Form::label('transfer_date', 'Transfer Date:')  !!}
                      </label>
                    <div class="col-md-6">
                        {!! Form::input('date', 'transfer_date', $asset->transfer_date->format('Y-m-d'), ['class' => 'form-control']) !!}
         
                           </div>
                        </div>
             
                       
             
             
             
                      
             
             
                            <div class="form-group{{ $errors->has('transfer_reason') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Transfer Reason</label>
                            <div class="col-md-6">
                             {{ Form::select('transfer_reason', array(
                                'Newly hired' => 'Newly hired', 
                                'Temporary Use (waiting for assign unit)' => 'Temporary Use (waiting for assign unit)', 
                                'Temporary Use (Defective Unit)' => 'Temporary Use (Defective Unit)', 
                                'Temporary Use (Additional Employee)' => 'Temporary Use (Additional Employee)', 
                                'Temporary Use (Project Based)' => 'Temporary Use (Project Based)',
                                'Stockroom / as Spare' => 'Stockroom / as Spare', 
                                'Spare (with new assigned unit)' => 'Spare (with new assigned unit)'), 
                                null, array('placeholder' => ' -- Select Reason --', 'class'=>'form-control' )) }}
                                
                                
                                 @if ($errors->has('transfer_reason'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transfer_reason') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
             
                        
             
                
                
             
                        <div class="hidden form-group{{ $errors->has('location_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('location_list', 'Asset Company:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('location_list[]', $locations, null, ['id' => 'location_list', 'class' => 'form-control', 'multiple']) !!}

                        @if ($errors->has('location_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('location_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
             
                        <div class="hidden form-group{{ $errors->has('place_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('place_list', 'Asset Location:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('place_list[]', $places, null, ['id' => 'place_list', 'class' => 'form-control', 'multiple']) !!}

                        @if ($errors->has('place_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('place_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
                        <div class="hidden form-group{{ $errors->has('asset_map') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('asset_map', 'Asset Map:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('asset_map', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('asset_map'))
                        <span class="help-block">
                        <strong>{{ $errors->first('asset_map') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
                        
             
             
                        <div class="hidden form-group{{ $errors->has('statu_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('statu_list', 'Asset Status:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('statu_list[]', $status, null, ['class' => 'form-control']) !!}

                        @if ($errors->has('statu_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('statu_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
             
             
                        <div class="hidden form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('brand', 'Brand Name:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('brand', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('brand'))
                        <span class="help-block">
                        <strong>{{ $errors->first('brand') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
             
             

                        <div class="hidden form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('model', 'Asset Model:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('model', null, ['class' => 'form-control']) !!} 
                        @if ($errors->has('model'))
                        <span class="help-block">
                        <strong>{{ $errors->first('model') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             

                        <div class="hidden form-group{{ $errors->has('serial_number') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('serial_number', 'Serial:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('serial_number', null, ['class' => 'form-control']) !!} 

                        @if ($errors->has('serial_number'))
                        <span class="help-block">
                        <strong>{{ $errors->first('serial_number') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                        <div class="hidden form-group{{ $errors->has('product_number') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('product_number', 'Prodcut #:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('product_number', null,  ['class' => 'form-control']) !!} 

                        @if ($errors->has('product_number'))
                        <span class="help-block">
                        <strong>{{ $errors->first('product_number') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                        <div class="hidden form-group{{ $errors->has('it_code') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('it_code', 'IT Code:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('it_code', null, ['class' => 'form-control']) !!} 

                        @if ($errors->has('it_code'))
                        <span class="help-block">
                        <strong>{{ $errors->first('it_code') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                        <div class="hidden form-group{{ $errors->has('finance_code') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('finance_code', 'Finance Code:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('finance_code', null,  ['class' => 'form-control']) !!} 
                        @if ($errors->has('finance_code'))
                        <span class="help-block">
                        <strong>{{ $errors->first('finance_code') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
                    
             
                     
          
             
        
      
             
             
             
                    
             


                       
      
             
        </div>
    
        </div>           
  
 

    </div>
                    
</div>
	


            


                 <div class="box-footer">
                 {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
                 {!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])  !!}      
                  </div><!-- /.box-footer -->




            
                
                
{!! Form::close() !!}
                    
    
     </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->


@endsection


@section('footer')


    <script>
     
 $(document).ready(function() {
  $("#assignee_list").select2({
        placeholder: "Select an assignee"
  });
        });

    </script>   


<script>
     
 $(document).ready(function() {
  $("#place_list").select2({
        placeholder: "Select asset place"
  });
        });

    </script>


    <script>
     
 $(document).ready(function() {
  $("#location_list").select2({
        placeholder: "Select a location"
  });
        });

    </script>


    <script type="text/javascript">
    $(function() {                                       
    $("#assignee_list").change(function() {                 
        $('#transfer_name').val(this.value);                
    });
});
    </script>
@endsection
