<div class="form-group{{  $errors->has('model') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('model', 'Model') !!}
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
{!! Form::label('serial', 'Serial') !!}
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


<div class="form-group{{  $errors->has('finance_code') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('finance_code', 'Finance Code') !!}
</label>

<div class="col-md-6">
{!! Form::text('finance_code', null, ['class' => 'form-control']) !!}

@if($errors->has('finance_code'))
<span class="help-block">
<strong>{{ $errors->first('finance_code') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group{{  $errors->has('it_code') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('it_code', 'IT Code') !!}
</label>

<div class="col-md-6">
{!! Form::text('it_code', null, ['class' => 'form-control']) !!}

@if($errors->has('it_code'))
<span class="help-block">
<strong>{{ $errors->first('it_code') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('acompanie_list') ? ' has-error' : '' }}">
<lable class="col-md-4 control-label"> 
{!! Form::label('acompanie_list', 'Laptop Company') !!}
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

<div class="form-group{{  $errors->has('remarks') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('remarks', 'Remarks') !!}
</label>

<div class="col-md-6">
{!! Form::textarea('remarks', null, ['class' => 'form-control', 'rows' => '5']) !!}

@if($errors->has('remarks'))
<span class="help-block">
<strong>{{ $errors->first('remarks') }}</strong>
</span>
@endif
</div>
</div>


  <div class="box-footer">
                 <a class="btn btn-default" href="{{url('loans')}}">
                 Cancel
                 </a> 
                 {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary pull-right'])  !!}      
  </div><!-- /.box-footer -->
