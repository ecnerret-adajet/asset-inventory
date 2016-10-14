<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Asset Inventory</title>
          <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- DataTables -->
    <link href="{{ asset('/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" />
         <!-- hide styles   -->
    <link href="{{ asset('/css/dataTables.tableTools.css') }}" rel="stylesheet" >
    <link href="{{ asset('/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/responsive.bootstrap.min.css') }}" rel="stylesheet" />  
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('/css/skins/_all-skins.min.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
      
      
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{url('/home')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img style="padding: 5px;" class="img-responsive" src="{{asset('/img/logo/solo.png')}}"></span>
          <!-- logo for regular state and mobile devices -->
          <span style="font-weight: 300"><img style="padding-top:5px; padding-right:10px;" class="img-responsive" src="{{asset('/img/logo/lfuggoc.png')}}"></span>
            
            
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
            
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
       
                
                
             
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('/img/user-placeholder.png')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset('/img/user-placeholder.png')}}" class="img-circle" alt="User Image">
                    <p>
                      {{ Auth::user()->name }} -{{ Auth::user()->position }}
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('/img/user-placeholder.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          {{ Form::open(array('url' => '/search', 'method' => 'get', 'class' => 'sidebar-form')) }}
            <div class="input-group">
            {!! Form::text('search', null,  ['class' => 'form-control', 'placeholder' => 'Search...']) !!}     
              <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>  
              </span>
            </div>
            {!! Form::close() !!}
            
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
              
           
              
            <li>
              <a href="{{url('/home')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> </i>
              </a>
           
            </li>

             <li>
              <a href="#">
                <i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Policy</span> </i>
              </a>
           
            </li>
                            
            <li>
              <a href="{{url('/assignees')}}">
               <i class="fa fa-database" aria-hidden="true"></i> 
                <span>Assignee</span>
              </a>
             
            </li>
              
                    

             <li class="treeview">
              <a href="#">
                <i class="fa fa-database" aria-hidden="true"></i>
                <span>Laptop</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-tag" aria-hidden="true"></i> Loan Laptop</a></li>
                <li><a href="#"><i class="fa fa-tag" aria-hidden="true"></i> Personal Laptop</a></li>
              </ul>
            </li>

              <li>
              <a href="{{url('assets/create')}}">
               <i class="fa fa-database" aria-hidden="true"></i>
                <span>Stocks</span>
              </a>
            </li>


               <li>
              <a href="{{url('assets/create')}}">
                <i class="fa fa-database" aria-hidden="true"></i>
                <span>Demo assets</span>
              </a>
            </li>

               <li>
              <a href="{{url('assets/create')}}">
                <i class="fa fa-database" aria-hidden="true"></i>
                <span>PLC</span>
              </a>
            </li>

            <li>
              <a href="{{url('assets/create')}}">
                <i class="fa fa-database" aria-hidden="true"></i>
                <span>Disposed</span>
              </a>
            </li>


<!-- temporary
           <li class="treeview">
              <a href="#">
                <i class="fa fa-suitcase"></i>
                <span>All Assets</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
  <li><a href="{{url('own/keyboard')}}"><i class="fa fa-circle-o"></i> Keyboard</a></li>
  <li><a href="{{url('own/mouse')}}"><i class="fa fa-circle-o"></i> Mouse</a></li>
  <li><a href="{{url('own/microphones')}}"><i class="fa fa-circle-o"></i> Microphones</a></li>
  <li><a href="{{url('own/biometrics')}}"><i class="fa fa-circle-o"></i> Biometrics</a></li>
  <li><a href="{{url('own/monitor')}}"><i class="fa fa-circle-o"></i> Monitor</a></li>
  <li><a href="{{url('own/tv-monitor')}}"><i class="fa fa-circle-o"></i> TV Monitor</a></li>
  <li><a href="{{url('own/printer')}}"><i class="fa fa-circle-o"></i> Printer</a></li>
  <li><a href="{{url('own/scanner')}}"><i class="fa fa-circle-o"></i> Scanner</a></li>
  <li><a href="{{url('own/printer-scanner')}}"><i class="fa fa-circle-o"></i> Printer-scanner</a></li>
  <li><a href="{{url('own/cctv')}}"><i class="fa fa-circle-o"></i> Cctv</a></li>
  <li><a href="{{url('own/camera')}}"><i class="fa fa-circle-o"></i> Camera</a></li>
  <li><a href="{{url('own/projector')}}"><i class="fa fa-circle-o"></i> Projector</a></li>
  <li><a href="{{url('own/switches')}}"><i class="fa fa-circle-o"></i> Switches</a></li>
  <li><a href="{{url('own/firewalls')}}"><i class="fa fa-circle-o"></i> Firewalls</a></li>
  <li><a href="{{url('own/synology')}}"><i class="fa fa-circle-o"></i> Synology</a></li>
  <li><a href="{{url('own/server')}}"><i class="fa fa-circle-o"></i> Server</a></li>
  <li><a href="{{url('own/fortigate')}}"><i class="fa fa-circle-o"></i> Fortigate</a></li>
  <li><a href="{{url('own/hard-disk')}}"><i class="fa fa-circle-o"></i> Hard Disks</a></li>
  <li><a href="{{url('/own/cpu')}}"><i class="fa fa-circle-o"></i> CPU</a></li>
  <li><a href="{{url('own/laptop')}}"><i class="fa fa-circle-o"></i> Laptop</a></li>
  <li><a href="{{url('own/phones')}}"><i class="fa fa-circle-o"></i> Phones</a></li>
  <li><a href="{{url('own/fax')}}"><i class="fa fa-circle-o"></i> Fax</a></li>
  <li><a href="{{url('own/video-card')}}"><i class="fa fa-circle-o"></i> Video Card</a></li> 
  <li><a href="{{url('own/sound-card')}}"><i class="fa fa-circle-o"></i> Sound Card</a></li> 
  <li><a href="{{url('own/Motherboard')}}"><i class="fa fa-circle-o"></i> Motherboard</a></li> 
  <li><a href="{{url('own/ups')}}"><i class="fa fa-circle-o"></i> UPS</a></li>
                  
                  
              </ul>
            </li>
    -->    
          
          
        
              
    
              <li class="treeview">
              <a href="#">
                <i class="fa fa-database" aria-hidden="true"></i>
                <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/users')}}"><i class="fa fa-tag" aria-hidden="true"></i> Manage Users</a></li>
                <li><a href="{{url('/roles')}}"><i class="fa fa-tag" aria-hidden="true"></i> Manage Roles</a></li>
              </ul>
            </li>


              
     
          
          </ul>
        </section>
      
     
        <!-- /.sidebar -->
      </aside>
    
    

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          
              @yield('content')
       
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> Beta
        </div>
        <strong>Copyright &copy; 2016 La Filipina Uy Gongco Group of Companies</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- .control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->

          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->


        <!-- jQuery 2.2.4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  
    <!-- SlimScroll -->
    <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/js/demo.js') }}"></script>
    <!-- Vue Js script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.min.js"></script>

    

     <!-- JavaScripts   -->
    <script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/js/select2.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('/js/laravel-bootstrap-modal-form.js') }}"></script>
   
    <!-- datatables   -->  
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/js/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.columnFilter.js') }}"></script>
    <script src="{{ asset('/js/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{asset('/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- ChartJS 1.0.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
        <!-- Highchartjs -->
     <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="http://highcharts.github.io/export-csv/export-csv.js"></script>


    <script src="{{ asset('/js/report.js') }}"></script>
    <script src="{{ asset('/js/asset.js') }}"></script>


  



    

    <script>
      $(function () {
           /* export categories table  */
      var table = $('#category').DataTable({
              sDom: "<'row'<'col-sm-4'l><'col-sm-4'T><'col-sm-4'f>>R" +
		"<'row'<'col-sm-12'tr>>" +
		"<'row'<'col-sm-5'i><'col-sm-7'p>>",
          
        
          
        "tableTools": {
            "sSwfPath": "http://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf"
        }
    
    
      });
             
             
                         /* export buttons */
          
          
          var copyButton = $(".DTTT_button_copy").detach();
          $(".copyAsset").append( copyButton );
          
           var csvButton = $(".DTTT_button_csv").detach();
          $(".csvAsset").append( csvButton );
          
           var xlsButton = $(".DTTT_button_xls").detach();
          $(".xlsAsset").append( xlsButton );
          
           var pdfButton = $(".DTTT_button_pdf").detach();
          $(".pdfAsset").append( pdfButton );
          
           var printButton = $(".DTTT_button_print").detach();
          $(".printAsset").append( printButton );
      
          /* assginees table */
          
        $('#assignee').DataTable({
    
        });

         $('#dafault-table').DataTable({
    
        });
          
        $('#search').DataTable({
        "dom": '<"top"l>rt<"bottom"ip><"clear">'
        });
          
    
          
  

      });
    </script>


 







    
    
@yield('footer')    
    
    
    

    
    
    
    
<script type="text/javascript">
  $('.formConfirm').on('click', function(e) {
        e.preventDefault();
        var el = $(this).parent();
        var title = el.attr('data-title');
        var msg = el.attr('data-message');
        var dataForm = el.attr('data-form');
        $('#formConfirm')
        .find('#frm_body').html(msg)
        .end().find('#frm_title').html(title)
        .end().modal('show');
        $('#formConfirm').find('#frm_submit').attr('data-form', dataForm);
  });
  $('#formConfirm').on('click', '#frm_submit', function(e) {
        var id = $(this).attr('data-form');
        $(id).submit();
  });
</script>


<script type="text/javascript">
$('.bs-dispose-modal-lg').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('#modal-id').val(recipient)
})
</script>






   
 

    <script type="text/javascript">
              
 $(document).ready(function() {
  $(".assignee_list").select2({
        placeholder: "Select an assignee"
   });
 });

    </script>
    
    
    <script>
    
    window.onload = function(){
    document.getElementById('button-val').onclick = function(){
        document.getElementById('assignee_list2').value = document.getElementById('assignee_list2').value;   
    }
};
    
    </script>
                    


    
    <script>
        $(document).ready(function(){
            
     	$('#asset').dataTable()
			.columnFilter({aoColumns:[
				{ sSelector: "#asset_type" },
				{ sSelector: "#brand" },
				{ sSelector: "#model" },
				{ sSelector: "#serial" },
				{ sSelector: "#it_code" },
				{ sSelector: "#assignee_name" },
                null
				]}
			);
        });
    </script>
    
  
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


    
    @include('flashy::message')

  </body>
</html>
