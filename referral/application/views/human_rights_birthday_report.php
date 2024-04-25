<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Human Rights Birthday report
      </h1>
    </section>
    <section class="content">
         
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
            <title>Human Rights Birthday report</title>
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
                     <th style="text-align:center;">ID</th>
                     <th style="text-align:center;">Name</th>  		
                     <th style="text-align:center;">DOB</th>
                     <th style="text-align:center;">Gender</th>
                     <th style="text-align:center;">Mobile Number</th>
                     <th style="text-align:center;">Church Address</th>
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
              $result = $db->prepare("SELECT * from add_human_rights");
              $result->execute();
              for($i=0; $row = $result->fetch(); $i++)
              
              {
              ?>
              <tr>
              <td style="text-align:center;"><?php echo $row['human_right_id']; ?></td>
              <td style="text-align:center;"><?php echo $row['name']; ?></td>
              <td style="text-align:center;"><?php echo $row['dob']; ?></td>
              <td style="text-align:center;"><?php echo $row['gender']; ?></td>
             <td style="text-align:center;"><?php echo $row['mobile_no']; ?></td>
              <td style="text-align:center;"><?php echo $row['church_address']; ?></td>
              
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