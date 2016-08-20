
                        <div class="form-group{{ $errors->has('assignee_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">  
                        {!! Form::label('assignee_name', 'Name:')  !!}
                            </label>

                            <div class="col-md-6">                                
                        {!! Form::text('assignee_name', null, ['class' => 'form-control']) !!} 

                                @if ($errors->has('assignee_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assignee_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('assignee_position') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> 
                                {!! Form::label('assignee_position', 'Position:')  !!}
                            </label>

                            <div class="col-md-6">
                                 {!! Form::text('assignee_position',  null, ['class' => 'form-control']) !!} 
                                
                                @if ($errors->has('assignee_position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assignee_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('assignee_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> 
                                {!! Form::label('assignee_id', 'Employee ID:')  !!}
                            </label>

                            <div class="col-md-6">
                                 {!! Form::text('assignee_id',  null, ['class' => 'form-control']) !!} 
                                
                                @if ($errors->has('assignee_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assignee_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            
            
               
                        <div class="form-group{{ $errors->has('adepartment_list') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> 
                            {!! Form::label('adepartment_list', 'Department:')  !!} 
                            </label>

                            <div class="col-md-6 selectContainer">
                    {!! Form::select('adepartment_list[]', $adepartments, null, ['class' => 'form-control', 'placeholder' => '-- Select a department --']) !!}
                                
                                
                                 @if ($errors->has('adepartment_list'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('adepartment_list') }}</strong>
                    </span>
                                @endif 
                            </div>
                        </div>
             

                          <div class="form-group{{ $errors->has('acompanie_list') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> 
                            {!! Form::label('acompanie_list', 'Company:')  !!} 
                            </label>

                            <div class="col-md-6">
                    {!! Form::select('acompanie_list[]', $acompanies, null, ['class' => 'form-control', 'placeholder' => '-- Select Company --']) !!}
                            
                           @if ($errors->has('acompanie_list'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('acompanie_list') }}</strong>
                    </span>
                                @endif        
                                
                            </div>
                        </div>







                        
             
                   
                


