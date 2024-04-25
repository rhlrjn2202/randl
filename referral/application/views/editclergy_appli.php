<?php

$clergy_appli_id = '';
$control_no = '';
$referal_no = '';
$name = '';
$introducer = '';
$appli_date = '';
$photo = '';
$application_for = '';
$statebishop_logo = '';
$districtbishop_logo = '';
$status = '';

if(!empty($clergyappliinfo))
{
    foreach ($clergyappliinfo as $uf)
    {
        $clergy_appli_id = $uf->clergy_appli_id;
        $control_no = $uf->control_no;
	      $referal_no = $uf->referal_no;
        $name = $uf->name;
        $introducer = $uf->introducer;
        $appli_date = $uf->appli_date;
		    $photo = $uf->photo;
        $application_for = $uf->application_for;
		    $statebishop_logo = $uf->statebishop_logo;
        $districtbishop_logo = $uf->districtbishop_logo;
        $status = $uf->status;
        
    }
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit Clergy allication 
        
      </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Clergy Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php
$db = mysqli_connect("localhost", "utqkdsjgz1ezi", "dxrdkvr6rsvl", "dbzop7x90qlkp4");
if(isset($_POST["submit_btn"]))
{
  $statebishop_logo=rand(1,100000).$_FILES['statebishop_logo']['name'];
  $districtbishop_logo=rand(1,100000).$_FILES['districtbishop_logo']['name'];
 $control_no = mysqli_real_escape_string($db, $_POST["control_no"]);
   $referal_no = mysqli_real_escape_string($db, $_POST["referal_no"]);
$name = mysqli_real_escape_string($db, $_POST["name"]);
$introducer = mysqli_real_escape_string($db, $_POST["introducer"]);
$appli_date = mysqli_real_escape_string($db, $_POST["appli_date"]);
$status = mysqli_real_escape_string($db, $_POST["status"]);
$application_for = mysqli_real_escape_string($db, $_POST["application_for"]);


$target1 = "gallery/clergyform/".basename($statebishop_logo);
$target2 = "gallery/clergyform/".basename($districtbishop_logo);

move_uploaded_file($_FILES['statebishop_logo']['tmp_name'], $target1);
move_uploaded_file($_FILES['districtbishop_logo']['tmp_name'], $target2);
 $sql = "UPDATE clergy_application_form SET control_no = '$control_no',referal_no = '$referal_no',name = '$name',introducer = '$introducer',
 appli_date= '$appli_date',status = '$status',
application_for = '$application_for',
statebishop_logo = '$statebishop_logo', districtbishop_logo= '$districtbishop_logo'
 WHERE clergy_appli_id = '$clergy_appli_id'";

 if(mysqli_query($db, $sql))
 {
  redirect('user_view_clergy_application');
 }
}
?>
<script>
$(document).ready(function () {
    $("#flash-msg").delay(1000).fadeOut("slow");
    });
</script>

                   <form role="form" id="addUser" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
                     <div class="box-body">
                         <div class="row">
                           <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Control Number</label>
                                      <input type="text" class="form-control required"  id="control_no" name="control_no">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Referal number</label>
                                      <input type="text" class="form-control required" id="referal_no" name="referal_no">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Name</label>
                                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="reviews">Application For</label>
                                    <select class="form-control dropdown" id="application_for" name="application_for">
                                      <option value="<?php echo $application_for;?>" <?php if($application_for == $application_for) echo 'selected="selected" '; ?>><?php echo $application_for;?></option>
                                      <option value="Priest">Priest</option>
                                      <option value="Deacon">Deacon</option>
                                    
                                    </select>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Introducer Name</label>
                                      <input type="text" class="form-control" id="introducer" name="introducer" value="<?php echo $introducer; ?>">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">State Bishop Logo </label>
                                      <input type="file" class="form-control" id="statebishop_logo" name="statebishop_logo">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">District Bishop Logo</label>
                                      <input type="file" class="form-control" id="districtbishop_logo" name="districtbishop_logo">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Date</label>
                                      <input type="date" class="form-control" id="appli_date" name="appli_date" value="<?php echo $appli_date; ?>">
                                  </div>
                              </div>

                              <input type="hidden" class="form-control" id="status" name="status" value="1">


                           
                     </div><!-- /.box-body -->

                     <div class="box-footer">
                         <input type="submit" name="submit_btn" class="btn btn-primary" value="Submit" />
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
