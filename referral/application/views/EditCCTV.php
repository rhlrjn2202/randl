<?php

$userId = '';
$sl = '';
$name = '';
$designation = '';
$join_date = '';
$jobs_done = '';
$age = '';
$service_status = '';

if(!empty($CCTVInfo))
{
    foreach ($CCTVInfo as $uf)
    {
        $userId = $uf->CCTVservices_id;
		$sl = $uf->sl;
        $name = $uf->name;
        $designation = $uf->designation;
        $join_date = $uf->join_date;
		 $jobs_done = $uf->jobs_done;
        $age = $uf->age;
		$service_status = $uf->service_status;
       
    }
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add / Edit CCTV</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter CCTV Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>EditCCTVUser" enctype="multipart/form-data" method="post" id="editUser" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                       <label for="sl">Sl No</label>
                                        <input type="text" class="form-control required" id="sl" name="sl" value="<?php echo $sl; ?>" maxlength="128">
                                        <input type="hidden" value="<?php echo $userId; ?>" name="CCTVservices_id" id="CCTVservices_id" />    
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="pic">Profile Photos</label>
                                        <input type="file" class="form-control" id="pic"  name="pic" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                         <label for="name">Name</label>
                                        <input type="text" class="form-control required" id="name"  name="name" value="<?php echo $name; ?>" maxlength="128">
                                       
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="designation">Designation</label>
                                        <input type="text" class="form-control required" id="designation" name="designation" value="<?php echo $designation; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="join_date">Join Date</label>
                                        <input type="date" class="form-control required" id="join_date" name="join_date" value="<?php echo $join_date; ?>" maxlength="10">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jobs_done">Jobs Done</label>
                                        <input type="date" class="form-control required" id="jobs_done"  name="jobs_done" value="<?php echo $jobs_done; ?>" maxlength="10">
                                    </div>
                                </div>
                                  
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="join_date">Age</label>
                                        <input type="number" class="form-control required digits" id="age" name="age" value="<?php echo $age; ?>" maxlength="10">
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="level">Service Status</label>
                                        <select class="form-control required" id="service_status" name="service_status">
										<option value="">Select Status</option>
                                            <?php
                                            if(!empty($roles))
                                            {
                                                foreach ($roles as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->service_status; ?>" <?php if($rl->service_status == $service_status) {echo "selected=selected";} ?>><?php echo $rl->status ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                  
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>