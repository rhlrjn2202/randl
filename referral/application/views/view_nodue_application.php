<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Add/Edit No Due Application
        <small>Edit</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>Add_no_due_application"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Content List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>view_nodue_application" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>

                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>INTL NO </th>
                      <th>ERIDAN NO</th>
                      <th>Status</th>

                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->nodue_id ?></td>
                       <td><?php echo $record->name ?></td>
                       <td><?php echo $record->intl_no ?></td>                    
                       <td><?php echo $record->eridan_no ?></td>                    
                       <td>
  				<?php if($record->status == '0'){ ?>

  					<button class="btn btn-success user_status" uid="<?php echo $record->nodue_id; ?>"  ustatus="<?php echo $record->status; ?>">Approve</button>
  				<?php }else{ ?>

  					<button class="btn btn-danger user_status" uid="<?php echo $record->nodue_id; ?>"  ustatus="<?php echo $record->status; ?>">Disapprove</button>

  				<?php } ?>
  			</td>
                      <td class="text-center">
                         <a class="btn btn-sm btn-info" href="<?php echo base_url().'editnodue_application/'.$record->nodue_id; ?>" target="_blank"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo base_url().'deletedata/'.$record->nodue_id; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
        
  <div class="modal modal-danger fade" id="modal_popup">
    <div class="modal-dialog modal-sm">
    	<form action="<?php echo base_url(); ?>user_status_changed" method="post"> 
	     	 <div class="modal-content">

		        <div class="modal-header" style="height: 150px;">

		          	<h4 style="margin-top: 50px;text-align: center;">Are you sure, do you change user status?</h4>
					<input type="hidden" name="nodue_id" id="user_id" value="">
					<input type="hidden" name="status" id="user_status" value="">

		        </div>

		        <div class="modal-footer">

		            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">No</button>

		            <button type="submit" name="submit" class="btn btn-success">Yes</button>

		        </div>

	        </div>

        </form>

    </div>

 </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).on('click','.user_status',function(){

		var id = $(this).attr('uid'); //get attribute value in variable
		var status = $(this).attr('ustatus'); //get attribute value in variable

		$('#user_id').val(id); //pass attribute value in ID
		$('#user_status').val(status);  //pass attribute value in ID

		$('#modal_popup').modal({backdrop: 'static', keyboard: true, show: true}); //show modal popup

	});
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "view_nodue_application/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
