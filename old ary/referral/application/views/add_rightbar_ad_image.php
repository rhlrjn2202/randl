<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Add Right Bar Ad Image
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add Right Bar Ad Image</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
					
                    <?php
$db = mysqli_connect("localhost", "utuqw0blisgax", "cgna4b4vvq3s", "dbf6lo3e2dwgnj");
if(isset($_POST["submit_btn"]))
{
 $gallery_ad_image1=$_FILES['gallery_ad_image1']['name'];
 $gallery_ad_image2=$_FILES['gallery_ad_image2']['name'];
 $gallery_ad_image3=$_FILES['gallery_ad_image3']['name'];
 
 $target1 = "rightsidebarad/".basename($gallery_ad_image1);
 $target2 = "rightsidebarad/".basename($gallery_ad_image2);
 $target3 = "rightsidebarad/".basename($gallery_ad_image3);
 
 $sql = "INSERT INTO add_rightbar_ad_image (gallery_ad_image1,gallery_ad_image2,gallery_ad_image3) VALUES ('".$gallery_ad_image1."','".$gallery_ad_image2."','".$gallery_ad_image3."')";
 	mysqli_query($db, $sql);
	
 if (move_uploaded_file($_FILES['gallery_ad_image1']['tmp_name'], $target1)) {
 // $msg = "Image uploaded successfully";
  }	
  if (move_uploaded_file($_FILES['gallery_ad_image2']['tmp_name'], $target2)) {
 // $msg = "Image uploaded successfully";
  }	
  if (move_uploaded_file($_FILES['gallery_ad_image3']['tmp_name'], $target3)) {
 // $msg = "Image uploaded successfully";
  }	
	else{
  //$msg = "Failed to upload image";
  }
  $result = mysqli_query($db, "SELECT * FROM add_rightbar_ad_image");
   redirect('add_rightbar_ad_image');
mysqli_close($db);
  
}

?>
                    <form role="form" id="addUser" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group col-md-4">
								   <label>Components Ad Image:</label>
                   <h6 style="color:red;">*Image size (300*300) </h6>
								   <input type="file" name="gallery_ad_image1" class="form-control">
								   </div>
								   
								    <div class="form-group col-md-4">
								   <label>Subsystems Ad Image:</label>
                   <h6 style="color:red;">*Image size (300*300) </h6>
								   <input type="file" name="gallery_ad_image2" class="form-control">
								   </div> 
								   
								   <div class="form-group col-md-4">
								   <label>Instruments Ad Image:</label>
                   <h6 style="color:red;">*Image size (300*300) </h6>
								   <input type="file" name="gallery_ad_image3" class="form-control">
								   </div>
                               
                            </div>
                            
							
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
<script src="<?php echo base_url(); ?>assets/tinymce/custom.tinymce.js"></script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>