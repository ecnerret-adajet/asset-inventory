




<div class="row">
	
  <div class="col-md-12">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Asset Information</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Purchases</a></li>
  </ul>

      </div>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
         <div class="panel-body">
             
             <hr/>
                <div class="form-group">
                    <label class="col-md-4 control-label"> 
            {!! Form::label('image', 'Choose an image') !!}
                    </label>
                     <div class="col-md-6">
           <input name="image" type="file" class="filestyle" data-iconName="glyphicon glyphicon-inbox" data-buttonName="btn-primary">
                    </div>
        </div>
             
             <hr/>

             
                     <div class="form-group{{ $errors->has('trasfer_name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('trasfer_name', 'Assigne:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('trasfer_name', $assignees, null, ['id' => 'trasfer_name2', 'class' => 'form-control trasfer_name', 'placeholder' => 'Select Assignee']) !!}

                        @if ($errors->has('trasfer_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('trasfer_name') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

         

             
             
             
                        <div class="hidden form-group{{ $errors->has('transfer_reason') ? ' has-error' : '' }}">
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
             
                
                        <div class="form-group{{ $errors->has('own_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('own_list', 'Asset Type:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('own_list', $owns, null, ['id' => 'myField', 'class' => 'form-control', 'placeholder' => '-- Select Asset Type --']) !!}

                        @if ($errors->has('own_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('own_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
             
                        <div class="form-group{{ $errors->has('location_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('location_list', 'Asset Company:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('location_list[]', $locations, null, ['id' => 'location_list', 'class' => 'form-control', 'placeholder' => '-- Select Company --']) !!}

                        @if ($errors->has('location_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('location_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
             
                        <div class="form-group{{ $errors->has('place_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('place_list', 'Asset Branch:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('place_list[]', $places, null, ['id' => 'place_list', 'class' => 'form-control', 'placeholder' => '-- Select Asset Branch --']) !!}

                        @if ($errors->has('place_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('place_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
                        <div class="form-group{{ $errors->has('asset_map') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('asset_map', 'Asset Location:')  !!}
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
                        
             
             
                        <div class="form-group{{ $errors->has('asset_year') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('asset_year', 'Asset Year:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('asset_year', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('asset_year'))
                        <span class="help-block">
                        <strong>{{ $errors->first('asset_year') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
             
             
                        <div class="form-group{{ $errors->has('statu_list') ? ' has-error' : '' }}">
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

                        
                    
             
             
                        <hr/>
             
             

                        <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
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

                        <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
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
             
                        <!-- temporary           
                        <div class="form-group{{ $errors->has('local') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('local', 'Local Number:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('local', null, ['class' => 'form-control']) !!} 
                        @if ($errors->has('local'))
                        <span class="help-block">
                        <strong>{{ $errors->first('local') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
                        -->
                        

                        <div class="form-group{{ $errors->has('serial_number') ? ' has-error' : '' }}">
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

                        <!-- temporary
                        <div class="form-group{{ $errors->has('product_number') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('product_number', 'Prodcut Number:')  !!}
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
                        -->

                        <div class="form-group{{ $errors->has('it_code') ? ' has-error' : '' }}">
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

                        <div class="form-group{{ $errors->has('finance_code') ? ' has-error' : '' }}">
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
  
    <div role="tabpanel" class="tab-pane fade" id="settings">
        <div class="panel-body">
        
            <hr/>
            <div class="form-group{{ $errors->has('budget_code') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('budget_code', 'Budget Code:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('budget_code', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('budget_code'))
            <span class="help-block">
            <strong>{{ $errors->first('budget_code') }}</strong>
            </span>
            @endif
            </div>
            </div>
            
              <div class="form-group{{ $errors->has('po_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('po_number', 'PO Number:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('po_number', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('po_number'))
            <span class="help-block">
            <strong>{{ $errors->first('po_number') }}</strong>
            </span>
            @endif
            </div>
            </div>
          
            <div class="form-group{{ $errors->has('purchase_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('purchase_name', 'Purchase Name:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('purchase_name', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('purchase_name'))
            <span class="help-block">
            <strong>{{ $errors->first('purchase_name') }}</strong>
            </span>
            @endif
            </div>
            </div>
          
          
            <div class="form-group{{ $errors->has('purchase_company') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('purchase_company', 'Purchase Company:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('purchase_company', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('purchase_company'))
            <span class="help-block">
            <strong>{{ $errors->first('purchase_company') }}</strong>
            </span>
            @endif
            </div>
            </div>
          
          
            <div class="form-group">
            <label class="col-md-4 control-label"> 
            {!! Form::label('purchase_date', 'Purchase Date:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::input('date', 'purchase_date', $asset->purchase_date, ['class' => 'form-control']) !!}         
         
            </div>
            </div>
          
          
            <div class="form-group{{ $errors->has('purchase_officer') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('purchase_officer', 'Purchase Officer:')  !!}
            </label>
            <div class="col-md-6">
                {{ Form::select('purchase_officer', array(
                'Azenith Aquino' => 'Azenith Aquino',
                'Vanessa Diaz' => 'Vanessa Diaz',
                'Rey Sumugat' => 'Rey Sumugat',
                'Danilo Samson' => 'Danilo Samson',
                'Mark Joseph Dela rosa' => 'Mark Joseph Dela rosa',
                'Melanie Ruiz' => 'Melanie Ruiz',
                'Melody Makasakit' => 'Melody Makasakit'), 
                null, array('placeholder' => ' -- No Purchase Officer Selected --', 'class'=>'form-control' )) }}

            @if ($errors->has('purchase_officer'))
            <span class="help-block">
            <strong>{{ $errors->first('purchase_officer') }}</strong>
            </span>
            @endif
            </div>
            </div>
          
          
            <hr/>
          
            <div class="form-group{{ $errors->has('vendor_name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('vendor_name', 'Vendor Name:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('vendor_name', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('vendor_name'))
            <span class="help-block">
            <strong>{{ $errors->first('vendor_name') }}</strong>
            </span>
            @endif
            </div>
            </div>
          
          
            <div class="form-group{{ $errors->has('vendor_person') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('vendor_person', 'Vendor Person:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('vendor_person', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('vendor_person'))
            <span class="help-block">
            <strong>{{ $errors->first('vendor_person') }}</strong>
            </span>
            @endif
            </div>
            </div>
            
            
            <div class="form-group{{ $errors->has('vendor_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('vendor_number', 'Vendor Number:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('vendor_number', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('vendor_number'))
            <span class="help-block">
            <strong>{{ $errors->first('vendor_number') }}</strong>
            </span>
            @endif
            </div>
            </div>
            
            
            <div class="form-group{{ $errors->has('vendor_person') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('vendor_address', 'Vendor Address:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('vendor_address', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('vendor_address'))
            <span class="help-block">
            <strong>{{ $errors->first('vendor_address') }}</strong>
            </span>
            @endif
            </div>
            </div>
          
            <div class="form-group{{ $errors->has('vendor_terms') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('vendor_terms', 'Vendor Terms:')  !!}
            </label>
            <div class="col-md-6">
                {{ Form::select('vendor_terms', array(
                'Tentative Delivery' => 'Tentative Delivery',
                'Partial Delivery' => 'Partial Delivery',
                'Full Delivery' => 'Full Delivery'), 
                null, array('placeholder' => ' -- No Terms Selected --', 'class'=>'form-control' )) }}

            @if ($errors->has('vendor_terms'))
            <span class="help-block">
            <strong>{{ $errors->first('vendor_terms') }}</strong>
            </span>
            @endif
            </div>
            </div>
            
            
          <hr/>
          
   
            <div class="form-group">
            <label class="col-md-4 control-label"> 
            {!! Form::label('pr_date', 'PR Date:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::input('date', 'pr_date', $asset->pr_date, ['class' => 'form-control']) !!}         
         
            </div>
            </div>
          
          
            <div class="form-group{{ $errors->has('pr_number') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('pr_number', 'PR Number:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::text('pr_number', null, ['class' => 'form-control']) !!} 

            @if ($errors->has('pr_number'))
            <span class="help-block">
            <strong>{{ $errors->first('pr_number') }}</strong>
            </span>
            @endif
            </div>
            </div>
          
          
          
            <div class="form-group">
            <label class="col-md-4 control-label"> 
            {!! Form::label('acquisition_date', 'Acquisition Date:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::input('date', 'acquisition_date', $asset->acquisition_date, ['class' => 'form-control']) !!}         
         
            </div>
            </div>
          
          
            <div class="form-group">
            <label class="col-md-4 control-label"> 
            {!! Form::label('warranty_date', 'Warranty Date:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::input('date', 'warranty_date', $asset->warranty_date, ['class' => 'form-control']) !!}         
         
            </div>
            </div>
          
          
            <div class="form-group">
            <label class="col-md-4 control-label"> 
            {!! Form::label('delivery_date', 'Delivery Date:')  !!}
            </label>
            <div class="col-md-6">
            {!! Form::input('date', 'delivery_date', $asset->delivery_date, ['class' => 'form-control']) !!}         
         
            </div>
            </div>
          
          
          
            <div class="form-group{{ $errors->has('po_status') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label"> 
            {!! Form::label('po_status', 'PO Status:')  !!}
            </label>
            <div class="col-md-6">
                {{ Form::select('po_status', array(
                'Delivered' => 'Delivered',
                'Cancelled' => 'Cancelled',
                'For Budget' => 'For Budget',
                'For Approval' => 'For Approval',
                'For Delivery' => 'For Delivery'), 
                null, array('placeholder' => ' -- No Status Selected --', 'class'=>'form-control' )) }}

            @if ($errors->has('po_status'))
            <span class="help-block">
            <strong>{{ $errors->first('po_status') }}</strong>
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
                 {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary pull-right'])  !!}      
                  </div><!-- /.box-footer -->



@section('footer')

<script>
new Vue({
  el: '#example-5',
  data: {
    selected: null
  }
})
</script>


<script>
Vue.directive('select', {
  twoWay: true,
  priority: 1000,

  params: ['options'],
    
  bind: function () {
    var self = this
    $(this.el)
      .select2({
        data: this.params.options
      })
      .on('change', function () {
        self.set(this.value)
      })
  },
  update: function (value) {
    $(this.el).val(value).trigger('change')
  },
  unbind: function () {
    $(this.el).off().select2('destroy')
  }
})

var vm = new Vue({
  el: '#el',
  data: {
    selected: 0,
    options: [
      { id: 1, text: 'hello' },
      { id: 2, text: 'what' }
    ]
  }
})
</script>


    <script>
     
 $(document).ready(function() {
  $("#assignee_list").select2({
        placeholder: "Select an assignee",
        initSelection: function(element, callback) {                   
            }
  });
        });

    </script>   


<script>
     
 $(document).ready(function() {
  $("#place_list").select2({
         placeholder: "Select a plate number",
        allowClear: true,
  });
        });

    </script>


    <script>
     
 $(document).ready(function() {
  $("#location_list").select2({
         placeholder: "Select a plate number",
        allowClear: true,
  });
        });

    </script>  

     <script>
     
 $(document).ready(function() {
  $("#trasfer_name2").select2({
        placeholder: "Select a plate number",
        allowClear: true,
  });
        });

    </script>

   
@endsection



