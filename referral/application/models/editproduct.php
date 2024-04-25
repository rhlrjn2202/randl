<?php

$product_id = '';
$product_name = '';
$product_type = '';
$manufacturers = '';
$Basic_product_details = '';
$Basic_feature = '';
$design_and_application = '';

if(!empty($cbseinfo))
{
    foreach ($cbseinfo as $uf)
    {
        $product_id = $uf->product_id;
        $product_name = $uf->product_name;
        $product_type = $uf->product_type;
        $manufacturers = $uf->manufacturers;
        $Basic_product_details = $uf->Basic_product_details;
		$Basic_feature = $uf->Basic_feature;
        $design_and_application = $uf->design_and_application;
        
    }
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit product
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
                        <h3 class="box-title">Enter Product Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php
$db = mysqli_connect("localhost", "utuqw0blisgax", "cgna4b4vvq3s", "dbf6lo3e2dwgnj");
if(isset($_POST["submit_btn"]))
{
 
 $product_name = mysqli_real_escape_string($db, $_POST["product_name"]);
$product_type = mysqli_real_escape_string($db, $_POST["product_type"]);
$manufacturers = mysqli_real_escape_string($db, $_POST["manufacturers"]);
$Basic_product_details = mysqli_real_escape_string($db, $_POST["Basic_product_details"]);
$Basic_feature = mysqli_real_escape_string($db, $_POST["Basic_feature"]);
$design_and_application = mysqli_real_escape_string($db, $_POST["design_and_application"]);
 
 $sql = "UPDATE Add_product SET product_name = '$product_name', product_type= '$product_type',manufacturers = '$manufacturers', Basic_product_details= '$Basic_product_details', Basic_feature = '$Basic_feature', design_and_application= '$design_and_application' WHERE product_id = '$product_id';";
 if(mysqli_query($connect, $sql))
 {
  redirect('cbsesolution');
 }
}


?>
    
                    <form role="form"  method="post" id="editUser" role="form">
                        <div class="box-body">
						
						
						 <div class="row">
							<div class="form-group col-md-4">
								   <label>Product Name</label>
								   <input type="text" name="product_name" placeholder="Product Name" value="<?php echo $product_name; ?>" class="form-control">
								   </div>
								  <div class="form-group col-md-4">
								    <label>Product Type</label>

									<select name="product_type" class="form-control">
									  <option value="components">Components</option>
									  <option value="subsystems">Sub Systems</option>
									  <option value="instruments">Instruments</option>
									</select> 
								</div>
								 <div class="form-group col-md-4">
								   <label>Choose Manufacturers:</label>
								   <select name="manufacturers" class="form-control" required>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `manage_categories`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
										<?php endwhile;?>
										</select>
								   </div>   
                               
								 <div class="form-group col-md-6">
								   <label>Basic Product Details</label>
								   <textarea name="Basic_product_details" id="body" class="form-control"><?php echo $Basic_product_details; ?></textarea>
								   <script>
                CKEDITOR.replace( 'body' );
           </script>
								   </div>
								   <div class="form-group col-md-6">
								   <label>Basic & Selection Feature</label>
								  <textarea name="Basic_feature" id="body1" class="form-control"><?php echo $Basic_feature; ?></textarea>
								   <script>
                CKEDITOR.replace( 'body1' );
           </script>
								   </div>  
								   <div class="form-group col-md-6">
								   <label>Design & Application</label>
								  <textarea name="design_and_application" id="body2" class="form-control"><?php echo $design_and_application; ?></textarea>
								   <script>
                CKEDITOR.replace( 'body2' );
           </script>
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