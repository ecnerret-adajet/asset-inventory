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


       $('#table_custom').DataTable({
    
        });


      
    

         $('#dafault-table').DataTable({
    
        });
          
        $('#search').DataTable({
        "dom": '<"top"l>rt<"bottom"ip><"clear">'
        });


        //select 2
         $(".select2").select2({
        placeholder: "Select a data"
   });

         $(".assignee_list").select2({
        placeholder: "Select an assignee"
   });


      $("#assignee_list").select2({
        placeholder: "Select an assignee"
  });


        $("#place_list").select2({
        placeholder: "Select asset place"
  });


       $("#location_list").select2({
        placeholder: "Select a location"
  });


    $("#assignee_list").change(function() {                 
        $('#transfer_name').val(this.value);                
    });


         // assets datatables
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



});//end



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




  $('.bs-dispose-modal-lg').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('#modal-id').val(recipient)
});