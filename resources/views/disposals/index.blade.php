@extends('layouts.app')

@section('content')

 <section class="content-header">
          <h1>
            Disposed Items
            <small>Table</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Table</a></li>
            <li class="active">Disposed Items</li>
          </ol>
        </section>

        <!-- Main content -->


<section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Disposal Asset</h3>
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
             
          
             
                     
          <table id="assignee"  class="table table-bordered table-striped dt-responsive nowrap"  >                    
    
  <thead>
  <tr class="info">
  <th>Model</th>
  <th>IT Code</th>
  <th>Condition Code</th>
  <th>Disposal Reason</th>
  <th>Disposal Method</th>
  <th>Disposal Date</th>
  <th>Market Value</th>
  </tr>
  </thead>
        
        

 
  <tbody>
      @foreach ($disposals as $disposal)
      <tr>
          
      <td>{{$disposal->asset->model}}</td>
      <td>{{$disposal->asset->it_code}}</td>
      <td>{{$disposal->condition_code }}</td>
      <td>{{$disposal->disposal_reason }}</td>
      <td>{{$disposal->disposal_method }}</td>
      <td>{{ ( date('F d, Y', strtotime($disposal->disposal_date)) == 'January 01, 1970' ? '00-00-00' : date('F d, Y', strtotime($disposal->disposal_date)) ) }}</td>
      <td>{{$disposal->market_value }}</td>
          
      
          
 
       

      </tr>     
     @endforeach
        </tbody>
  
    
  <tfoot>
  <tr class="info">
   <th>Model</th>
  <th>IT Code</th>
   <th>Condition Code</th>
  <th>Disposal Reason</th>
  <th>Disposal Method</th>
  <th>Disposal Date</th>
  <th>Market Value</th>
  </tr>
  </tfoot>
    
    
    
    </table>
    
             
        
      
             
             
             
                    
             


                       
      
             
        </div>
    
        </div>           
  
 

    </div>
                    
</div>
	


            


           




            
                

                    
    
     </div><!-- /.box-body -->
          
          </div><!-- /.box -->

       
        </section><!-- /.content -->


@endsection