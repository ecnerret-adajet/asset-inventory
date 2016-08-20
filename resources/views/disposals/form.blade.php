
              

{!! Form::hidden('asset_id', null, ['class' => 'form-control', 'id' => 'modal-id']) !!}



<div class="form-group{{ $errors->has('condition_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Condition Code</label>
                            <div class="col-md-6">
                             {{ Form::select('condition_code', array(
                                'Poor' => 'Poor', 
                                'Fair' => 'Fair', 
                                'Good' => 'Good', 
                                'Excellent' => 'Excellent'), 
                                null, array('placeholder' => ' -- Select Condition --', 'class'=>'form-control' )) }}
                                
                                
                                 @if ($errors->has('condition_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('condition_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
             
             
                <div class="form-group{{ $errors->has('disposal_reason') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Disposal Reason</label>
                            <div class="col-md-6">
                             {{ Form::select('disposal_reason', array(
                                'Beyond economic repair' => 'Beyond economic repair', 
                                'Replacement / New Supply' => 'Replacement / New Supply', 
                                'Defective' => 'Defective', 
                                'Obsolete' => 'Obsolete'), 
                                null, array('placeholder' => ' -- Select Reason --', 'class'=>'form-control' )) }}
                                
                                
                                 @if ($errors->has('disposal_reason'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('disposal_reason') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
             
                 <div class="form-group{{ $errors->has('disposal_method') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Disposal Method</label>
                            <div class="col-md-6">
                             {{ Form::select('disposal_method', array(
                                'Computer recycle' => 'Beyond economic repair', 
                                'Scrap' => 'Scrap', 
                                'Donated' => 'Donated', 
                                'Trade-in' => 'Trade-in'), 
                                null, array('placeholder' => ' -- Select Method --', 'class'=>'form-control' )) }}
                                
                                
                                 @if ($errors->has('disposal_method'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('disposal_method') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </div>
             
             
             
                 <div class="form-group">
                         <label class="col-md-4 control-label"> 
                        {!! Form::label('disposal_date', 'Disposal Date:')  !!}
                      </label>
                    <div class="col-md-6">
                        {!! Form::input('date', 'disposal_date', $disposal->disposal_date, ['class' => 'form-control']) !!}         
         
                           </div>
                        </div>
             
             
             
                    <div class="form-group{{ $errors->has('market_value') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('market_value', 'Market Value:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('market_value', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('market_value'))
                        <span class="help-block">
                        <strong>{{ $errors->first('market_value') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


          

	


            
            
                       
      
     

	