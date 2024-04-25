<?php

$contact_id = '';
$name = '';
$email = '';
$phone_number = '';
$message = '';

if(!empty($contactdetailsinfo))
{
    foreach ($contactdetailsinfo as $uf)
    {
        $contact_id = $uf->contact_id;
        $name = $uf->name; 
		$email = $uf->email;
        $phone_number = $uf->phone_number;
        $message = $uf->message;
        
    }
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit Contact Us
        <small>Add / Edit</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Contact Us</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php
$db = mysqli_connect("localhost", "utuqw0blisgax", "cgna4b4vvq3s", "dbf6lo3e2dwgnj");
if(isset($_POST["submit_btn"]))
{
 $name = mysqli_real_escape_string($db, $_POST["name"]);
   $email = mysqli_real_escape_string($db, $_POST["email"]);
$phone_number = mysqli_real_escape_string($db, $_POST["phone_number"]);
$message = mysqli_real_escape_string($db, $_POST["message"]);


 $sql = "UPDATE contactUs SET name = '$name', email= '$email',phone_number= '$phone_number',message= '$message' WHERE contact_id = '$contact_id';";	

 if(mysqli_query($db, $sql))
 {
  redirect('viewcontactus');
 }
}

?>
    
                   <form role="form" id="addUser" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
                        <div class="box-body">
                            <div class="row">
							
								 <div class="form-group col-md-6">
								   <label>Name:</label>
								   <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
								   </div>  
								    <div class="form-group col-md-6">
								   <label>E-mail:</label>
								   <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
								   </div>  
                                <div class="form-group col-md-6">
								   <label>Phone Number:</label>
								   <input type="text" name="phone_number" value="<?php echo $phone_number; ?>" class="form-control">
								   </div>
								 <div class="form-group col-md-6">
								   <label>Message</label>
								   <textarea name="message" id="rich-editor" class="form-control"><?php echo $message; ?></textarea>
								   
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

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>