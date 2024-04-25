<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Add/Edit University Application
        <small>Edit</small>
      </h1>
    </section>
  <?php
      if($role == 1 || $role == 4)
      {
      ?>
      <section class="content">
          <div class="row">
              <div class="col-xs-12 text-right">
                  <div class="form-group">
                      <a class="btn btn-primary" href="<?php echo base_url(); ?>Add_bible_application"><i class="fa fa-plus"></i> Add New</a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                      <h3 class="box-title">Content List</h3>
                      <div class="box-tools">
                          <form action="<?php echo base_url() ?>view_bible_application" method="POST" id="searchList">
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
                        <th>Referal number</th>
                        <th>Name </th>
                        <th>Application For</th>
                        <th>Photo</th>
                        <th>Appoval Action</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                      <?php
                      if(!empty($userRecords))
                      {
                          foreach($userRecords as $record)
                          {
                      ?>
                      <tr>
                        <td><?php echo $record->bible_app_id ?></td>
                         <td><?php echo $record->referal_no ?></td>
                         <td><?php echo $record->name ?></td> 
                         <td><?php echo $record->application_for ?></td>                             
                         <td><img class="img-thumbnail " src="https://eridiocese.parishtome.com/gallery/clergyform/<?php echo $record->photo ?>" width="75px" height="75px" border="1" /></td>
                    <td>   
                 <button class="btn btn-success user_status" uid="<?php echo $record->bible_app_id; ?>"  ustatus="2"><i class="fa fa-check" aria-hidden="true"></i>
      </button>
           <button class="btn btn-danger user_status" uid="<?php echo $record->bible_app_id; ?>"  ustatus="3"><i class="fa fa-times" aria-hidden="true"></i>
      </button>
                  </td>
                      <td>
        <?php if($record->status == '1'){ ?>

          <button class="btn btn-primary"><i class="fa fa-spinner" aria-hidden="true"></i>
Pending</button>
<?php } if($record->status == '2'){ ?>
          <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>
Approve</button>
<?php }else if($record->status == '3') { ?>
          <button class="btn btn-danger" ><i class="fa fa-times" aria-hidden="true"></i>
Disapprove</button>

        <?php } ?>
      </td>
      <td class="text-center">
         <a class="btn btn-sm btn-info" href="<?php echo base_url().'editbible_application/'.$record->bible_app_id; ?>" target="_blank"><i class="fa fa-pencil"></i></a>
          <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo base_url().'deletedata/'.$record->bible_app_id; ?>"><i class="fa fa-trash"></i></a>
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
    <form action="<?php echo base_url(); ?>bible_user_status_changed" method="post">
       <div class="modal-content">

          <div class="modal-header" style="height: 150px;">

              <h4 style="margin-top: 50px;text-align: center;">Are you sure, do you change user status?</h4>
        <input type="hidden" name="bible_app_id" id="user_id" value="">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><script type="text/javascript">
  	$(document).on('click','.user_status',function(){
  
  		var id = $(this).attr('uid'); //get attribute value in variable
  		var status = $(this).attr('ustatus'); //get attribute value in variable
  
  		$('#user_id').val(id); //pass attribute value in ID
  		$('#user_status').val(status);  //pass attribute value in ID
  
  		$('#modal_popup').modal({backdrop: 'static', keyboard: true, show: true}); //show modal popup
  
  	});
  </script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
  <script type="text/javascript">
      jQuery(document).ready(function(){
          jQuery('ul.pagination li a').click(function (e) {
              e.preventDefault();
              var link = jQuery(this).get(0).href;
              var value = link.substring(link.lastIndexOf('/') + 1);
              jQuery("#searchList").attr("action", baseURL + "view_bible_application/" + value);
              jQuery("#searchList").submit();
          });
      });
  </script>
<?php }
else if($role == 2){
  ?>
  <section class="content">
    <div class="row">
        <div class="col-xs-12 text-right">
            <div class="form-group">
                <a class="btn btn-primary" href="<?php echo base_url(); ?>Add_bible_application"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
    </div>
      <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                  <h3 class="box-title">Content List</h3>
                  <div class="box-tools">
                      <form action="<?php echo base_url() ?>view_clergy_application" method="POST" id="searchList">
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
                    <th>Referal number</th>
                    <th>Name </th>
                    <th>Photo</th>
                    <th>Application For</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  <?php
                  if(!empty($userRecords))
                  {
                      foreach($userRecords as $record)
                      {
                  ?>
                  <tr>
                    <td><?php echo $record->bible_app_id ?></td>
                     <td><?php echo $record->referal_no ?></td>
                     <td><?php echo $record->name ?></td> 
                     <td><?php echo $record->application_for ?></td>                             
                     <td><img class="img-thumbnail " src="https://eridiocese.parishtome.com/gallery/clergyform/<?php echo $record->photo ?>" width="75px" height="75px" border="1" /></td>
              </td>
                  <td>
    <?php if($record->status == '1'){ ?>

      <button class="btn btn-primary"><i class="fa fa-spinner" aria-hidden="true"></i>
Pending</button>
<?php } if($record->status == '2'){ ?>
      <button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>
Approve</button>
<?php }else if($record->status == '3') { ?>
      <button class="btn btn-danger" ><i class="fa fa-times" aria-hidden="true"></i>
Disapprove</button>

    <?php } ?>
  </td>
  <?php if($record->status == '2'){ ?>
    <td class="text-center">
       <a class="btn btn-sm btn-info" href="<?php echo base_url().'editbible_application/'.$record->bible_app_id; ?>" target="_blank"><i class="fa fa-pencil"></i></a>
        </td>
  <?php } ?>

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
  <form action="<?php echo base_url(); ?>bible_user_status_changed" method="post">
     <div class="modal-content">

        <div class="modal-header" style="height: 150px;">

            <h4 style="margin-top: 50px;text-align: center;">Are you sure, do you change user status?</h4>
      <input type="hidden" name="bible_app_id" id="user_id" value="">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><script type="text/javascript">
	$(document).on('click','.user_status',function(){

		var id = $(this).attr('uid'); //get attribute value in variable
		var status = $(this).attr('ustatus'); //get attribute value in variable

		$('#user_id').val(id); //pass attribute value in ID
		$('#user_status').val(status);  //pass attribute value in ID

		$('#modal_popup').modal({backdrop: 'static', keyboard: true, show: true}); //show modal popup

	});
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "view_bible_application/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>

<?php } ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><script type="text/javascript">
	$(document).on('click','.user_status',function(){

		var id = $(this).attr('uid'); //get attribute value in variable
		var status = $(this).attr('ustatus'); //get attribute value in variable

		$('#user_id').val(id); //pass attribute value in ID
		$('#user_status').val(status);  //pass attribute value in ID

		$('#modal_popup').modal({backdrop: 'static', keyboard: true, show: true}); //show modal popup

	});
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "view_bible_application/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>

