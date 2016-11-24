<div class="form-group{{  $errors->has('supplier') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('supplier', 'Supplier:') !!}
</label>

<div class="col-md-6">
{!! Form::text('supplier', null, ['class' => 'form-control']) !!}

@if($errors->has('supplier'))
<span class="help-block">
<strong>{{ $errors->first('supplier') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{  $errors->has('unit_type') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('unit_type', 'Unit type:') !!}
</label>

<div class="col-md-6">
{!! Form::text('unit_type', null, ['class' => 'form-control']) !!}

@if($errors->has('unit_type'))
<span class="help-block">
<strong>{{ $errors->first('unit_type') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group{{  $errors->has('model') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('model', 'Model:') !!}
</label>

<div class="col-md-6">
{!! Form::text('model', null, ['class' => 'form-control']) !!}

@if($errors->has('model'))
<span class="help-block">
<strong>{{ $errors->first('model') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{  $errors->has('serial') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('serial', 'Serial:') !!}
</label>

<div class="col-md-6">
{!! Form::text('serial', null, ['class' => 'form-control']) !!}

@if($errors->has('serial'))
<span class="help-block">
<strong>{{ $errors->first('serial') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group{{  $errors->has('user_leased') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('user_leased', 'User:') !!}
</label>

<div class="col-md-6">
{!! Form::text('user_leased', null, ['class' => 'form-control']) !!}

@if($errors->has('user_leased'))
<span class="help-block">
<strong>{{ $errors->first('user_leased') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group{{ $errors->has('acompanie_list') ? ' has-error' : '' }}">
<lable class="col-md-4 control-label"> 
{!! Form::label('acompanie_list', 'Company:') !!}
</lable>
<div class="col-md-6">
{!! Form::select('acompanie_list', $acompanies, null, ['class' => 'form-control', 'placeholder' => 'Select a Company']) !!}
@if($errors->has('acompanie_list'))
<span class="help-block">
<strong>{{ $errors->first('acompanie_list') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group{{ $errors->has('adepartment_list') ? ' has-error' : '' }}">
<lable class="col-md-4 control-label"> 
{!! Form::label('adepartment_list', 'Department:') !!}
</lable>
<div class="col-md-6">
{!! Form::select('adepartment_list', $adepartments, null, ['class' => 'form-control', 'placeholder' => 'Select a Department']) !!}
@if($errors->has('adepartment_list'))
<span class="help-block">
<strong>{{ $errors->first('adepartment_list') }}</strong>
</span>
@endif
</div>
</div>





<div class="form-group{{ $errors->has('date_received') ? ' has-error' : '' }}">
<label class="col-md-4 control-label"> 
{!! Form::label('date_received', 'Date Received:')  !!}
</label>
<div class="col-md-6">
{!! Form::input('date', 'date_received', date('Y-m-d'), ['class' => 'form-control']) !!} 

 @if ($errors->has('date_received'))
<span class="help-block">
<strong>{{ $errors->first('date_received') }}</strong>
</span>
@endif        
</div>
</div>

<div class="form-group{{ $errors->has('end_contract') ? ' has-error' : '' }}">
<label class="col-md-4 control-label"> 
{!! Form::label('end_contract', 'End of Contract:')  !!}
</label>
<div class="col-md-6">
{!! Form::input('date', 'end_contract', date('Y-m-d'), ['class' => 'form-control']) !!} 

 @if ($errors->has('end_contract'))
<span class="help-block">
<strong>{{ $errors->first('end_contract') }}</strong>
</span>
@endif        
</div>
</div>



<div class="form-group{{ $errors->has('date_surrender') ? ' has-error' : '' }}">
<label class="col-md-4 control-label"> 
{!! Form::label('date_surrender', 'Date surrender:')  !!}
</label>
<div class="col-md-6">
{!! Form::input('date', 'date_surrender', date('Y-m-d'), ['class' => 'form-control']) !!} 

 @if ($errors->has('date_surrender'))
<span class="help-block">
<strong>{{ $errors->first('date_surrender') }}</strong>
</span>
@endif        
</div>
</div>


<div class="box-footer">
 <a class="btn btn-default" href="{{url('loans')}}">
 Cancel
 </a> 
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary pull-right']) !!}      
  </div><!-- /.box-footer -->