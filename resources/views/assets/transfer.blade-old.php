               <div class="form-group{{ $errors->has('assignee_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('assignee_list', 'Assigne:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('assignee_list[]', $assignees, null, ['id' => 'assignee_list', 'class' => 'form-control', 'multiple']) !!}

                        @if ($errors->has('assignee_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('assignee_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
                    
                
                    
                        <div class=" form-group{{ $errors->has('trasfer_name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('trasfer_name', 'Transfer Name:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('trasfer_name', null, ['id' => 'transfer_name', 'class' => 'form-control']) !!} 
                        @if ($errors->has('trasfer_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('trasfer_name') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                    
                         
                        <div class="form-group{{ $errors->has('transfer_reason') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">  
                        {!! Form::label('transfer_reason', 'Transfer Reason:')  !!}
                            </label>

                            <div class="col-md-6">                                
                        {!! Form::textarea('transfer_reason', null, ['class' => 'form-control']) !!} 

                                @if ($errors->has('transfer_reason'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transfer_reason') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>