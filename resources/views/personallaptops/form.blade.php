<div class="form-group{{  $errors->has('user_laptop') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('user_laptop', 'User:') !!}
</label>

<div class="col-md-6">
{!! Form::text('user_laptop', null, ['class' => 'form-control']) !!}

@if($errors->has('user_laptop'))
<span class="help-block">
<strong>{{ $errors->first('supplier') }}</strong>
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
<strong>{{ $errors->first('supplier') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group{{  $errors->has('serial_no') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('serial_no', 'Serial:') !!}
</label>

<div class="col-md-6">
{!! Form::text('serial_no', null, ['class' => 'form-control']) !!}

@if($errors->has('serial_no'))
<span class="help-block">
<strong>{{ $errors->first('supplier') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{  $errors->has('purpose') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('purpose', 'Purpose:') !!}
</label>

<div class="col-md-6">
{!! Form::textarea('purpose', null, ['class' => 'form-control', 'rows' => '4']) !!}

@if($errors->has('purpose'))
<span class="help-block">
<strong>{{ $errors->first('supplier') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{  $errors->has('approved_by') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('approved_by', 'Approved by:') !!}
</label>

<div class="col-md-6">
{!! Form::text('approved_by', null, ['class' => 'form-control']) !!}

@if($errors->has('approved_by'))
<span class="help-block">
<strong>{{ $errors->first('supplier') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group{{  $errors->has('explanation') ? ' has-error' : ''  }}">
<label class="col-md-4 control-label">
{!! Form::label('explanation', 'Explanation:') !!}
</label>

<div class="col-md-6">
{!! Form::textarea('explanation', null, ['class' => 'form-control', 'rows' => '4']) !!}

@if($errors->has('explanation'))
<span class="help-block">
<strong>{{ $errors->first('supplier') }}</strong>
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


