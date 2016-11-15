                    <div class="form-group{{ $errors->has('user_loan') ? ' has-error' : ''}}">
                      <label class="col-md-4 control-label">
                      {!! Form::label('user_loan', 'User') !!}
                      </label>
                      <div class="col-md-6">
                      {!! Form::text('user_loan', null, ['class' => 'form-control', 'value' => "{{ old('user_loan') }}"]) !!}
                      </div>
                    </div>


              
                        <div class="form-group{{ $errors->has('laptop_list') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> 
                       {!!  Form::label('laptop_list', 'Laptop')  !!}
                            </label>

                            <div class="col-md-6 selectContainer">
                   {!! Form::select('laptop_list', $laptops, $id, ['class' => 'form-control', 'placeholder' => 'Select a Laptop']) !!}

                    @if ($errors->has('laptop_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('laptop_list') }}</strong>
                        </span>
                    @endif   
                            </div>
                        </div>



                      <div class="form-group{{ $errors->has('from_date') ? ' has-error' : '' }}">
                         <label class="col-md-4 control-label"> 
                         {!! Form::label('from_date', 'From Date:')  !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::input('date', 'from_date', date('Y-m-d'), ['class' => 'form-control']) !!} 

                             @if ($errors->has('from_date'))
                        <span class="help-block">
                        <strong>{{ $errors->first('from_date') }}</strong>
                        </span>
                        @endif        
                         </div>
                         </div>


                          <div class="form-group{{ $errors->has('to_date') ? ' has-error' : '' }}">
                         <label class="col-md-4 control-label"> 
                         {!! Form::label('to_date', 'To Date:')  !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::input('date', 'to_date', date('Y-m-d'), ['class' => 'form-control']) !!} 

                             @if ($errors->has('to_date'))
                        <span class="help-block">
                        <strong>{{ $errors->first('to_date') }}</strong>
                        </span>
                        @endif        
                         </div>
                         </div>

                        <div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('remarks', 'Remarks:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('remarks', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('remarks'))
                        <span class="help-block">
                        <strong>{{ $errors->first('remarks') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


                         
     <div class="row">
                    <div class="col-md-6">
                      {!! Form::reset('Cancel', ['class' => 'btn btn-default pull-left']) !!}
                    </div>

                    <div class="col-md-6">
                   {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary pull-right'])  !!}
                    </div>
                   </div> 