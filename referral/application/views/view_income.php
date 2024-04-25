<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Income Reports
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>Add_clergy_details"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        
        <!DOCTYPE html>
        <html>
          <head>
            <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-html5-2.1.1/datatables.min.css"/>
         
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.1.1/b-html5-2.1.1/datatables.min.js"></script>
        <style>
             #invoicetable {
             
             border-collapse: collapse;
             width: 94%;
           }
           
           #invoicetable td, #invoicetable th {
             border: 1px solid #ddd;
             padding: 6px;
           }
           
           #invoicetable tr:nth-child(even){background-color: #f2f2f2;}
           
           #invoicetable tr:hover {background-color: #ddd;}
           
           #invoicetable th {
             padding-top: 3px;
             padding-bottom: 3px;
             margin-left: 10px;
             text-align: left;
             background-color: #33414E;
             color: white;
           }
   </style>
            <meta charset=utf-8 />
            <title>Income Reports</title>
          </head>
          <body>
            <div class="box box-info">
              <br>
              <div class="container">
              <div class="form-row">
              <div class="col-md-4">
              </div>
               <div class="col-md-4">
              </div>
              <div class="col-md-3">
                <div class="input-group input-daterange">
                  <input type="text" id="min" name="min" class="form-control date-range-filter" placeholder="From:">
                
                  <div class="input-group-addon">to</div>
        
                  <input type="text" id="max" name="max" class="form-control date-range-filter" placeholder="To:">
            
                </div>
              </div>
            </div>
            </div>
        
              <table id="invoicetable">
                <thead>
                  <tr>
                     <th style="text-align:center;display:none;">Income ID</th>
                     <th style="text-align:center;">Name</th>
                     <th style="text-align:center;">Date</th>    		
                     <th style="text-align:center;">Payment_type</th>
                     <th style="text-align:center;">Amount</th>
                     <th style="text-align:center;">Particular</th>
                     <th style="text-align:center;">Remarks</th>
                 </tr>
                </thead>
                <tbody>
                  <?php
                  $db_host		= 'localhost';
                    $db_user		= 'utqkdsjgz1ezi';
                    $db_pass		= 'dxrdkvr6rsvl';
                    $db_database	= 'dbzop7x90qlkp4'; 
                     
                    /* End config */
                     
                    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $result = $db->prepare("SELECT * from add_income");
              $result->execute();
              for($i=0; $row = $result->fetch(); $i++)
              
              {
              ?>
              <tr>
              <td style="text-align:center;display:none;"><?php echo $row['income_id']; ?></td>
              <td style="text-align:center;"><?php echo $row['name']; ?></td>
              <td style="text-align:center;"><?php echo $row['date']; ?></td>
              <td style="text-align:center;"><?php echo $row['payment_mode']; ?></td>
             <td style="text-align:center;"><?php echo $row['amount']; ?></td>
              <td style="text-align:center;"><?php echo $row['particular']; ?></td>
              <td style="text-align:center;"><?php echo $row['remark']; ?></td>
              
              
              </tr>
              <?php
              }
              ?>
                </tbody>
              </table>
            </div>
            </div>
          </body>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/b-2.1.1/b-html5-2.1.1/date-1.1.1/datatables.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/b-2.1.1/b-html5-2.1.1/date-1.1.1/sp-1.4.0/datatables.min.js"></script>
        <script>
                $(document).ready( function () {
                $.fn.dataTable.ext.search.push(
                function( settings, data, dataIndex ) {
                var min = minDate.val();
                var max = maxDate.val();
                // data[1] is the date column
                var date = new Date( data[2] );
        
                if (
                ( min === null && max === null ) ||
                ( min === null && date <= max ) ||
                ( min <= date   && max === null ) ||
                ( min <= date   && date <= max )
                ) {
                return true;
                }
                return false;
                }
                );
        
                // Refilter the table
                $('#min, #max').on('change', function () {
                table.draw();
                });
        
        
                // Create date inputs
                minDate = new DateTime($('#min'), {
                format: 'YYYY-MM-DD'
                });
                maxDate = new DateTime($('#max'), {
                format: 'YYYY-MM-DD'
                });
        
                var table = $('#invoicetable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'print', {
                    extend: 'pdfHtml5',
                    download: 'open'
                }
                ]
                } );
                } );
        
        </script>
        </html>