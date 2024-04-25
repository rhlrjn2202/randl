<?php

$manufacturers_id = '';
$manufacturers_name = '';
$manu_url = '';
$Manufacturers_image = '';
$Basic_product_details = '';
$top_list = '';
$product_name1 = '';
$product_name2 = '';
$product_name3 = '';
$product_name4 = '';
$product_name5 = '';
$product_name6 = '';
$product_name7 = '';
$product_name8 = '';
$product_name9 = '';
$product_name10 = '';
$product_name11 = '';
$product_name12 = '';
$product_name13 = '';
$product_name14 = '';
$product_name15 = '';


if(!empty($blogdetailsinfo))
{
    foreach ($blogdetailsinfo as $uf)
    {
        $manufacturers_id = $uf->manufacturers_id;
        $manufacturers_name = $uf->manufacturers_name;
		$manu_url = $uf->manu_url;
        $Manufacturers_image = $uf->Manufacturers_image;
        $Basic_product_details = $uf->Basic_product_details;
        $top_list = $uf->top_list;
		$product_name1 = $uf->product_name1;
        $product_name2 = $uf->product_name2;
		$product_name3 = $uf->product_name3;
        $product_name4 = $uf->product_name4;
        $product_name5 = $uf->product_name5;
        $product_name6 = $uf->product_name6;
        $product_name7 = $uf->product_name7;
		$product_name8 = $uf->product_name8;
        $product_name9 = $uf->product_name9;
		$product_name10 = $uf->product_name10;
        $product_name11 = $uf->product_name11;
        $product_name12 = $uf->product_name12;
        $product_name13 = $uf->product_name13;
        $product_name14 = $uf->product_name14;
		$product_name15 = $uf->product_name15;

        
    }
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit Blog
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
                        <h3 class="box-title">Enter Blog Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php
$db = mysqli_connect("localhost", "utuqw0blisgax", "cgna4b4vvq3s", "dbf6lo3e2dwgnj");
if(isset($_POST["submit_btn"]))
{
$Manufacturers_image=rand(1,100000).$_FILES['Manufacturers_image']['name'];
$c_image_temp=$_FILES['Manufacturers_image']['tmp_name'];
$manufacturers_name = mysqli_real_escape_string($db, $_POST["manufacturers_name"]);
$Basic_product_details = mysqli_real_escape_string($db, $_POST["Basic_product_details"]);
$top_list = mysqli_real_escape_string($db, $_POST["top_list"]);
$product_name1 = mysqli_real_escape_string($db, $_POST["product_name1"]);
$product_name2 = mysqli_real_escape_string($db, $_POST["product_name2"]);
$product_name3 = mysqli_real_escape_string($db, $_POST["product_name3"]);
$product_name4 = mysqli_real_escape_string($db, $_POST["product_name4"]);
$product_name5 = mysqli_real_escape_string($db, $_POST["product_name5"]);
$product_name6 = mysqli_real_escape_string($db, $_POST["product_name6"]);
$product_name7 = mysqli_real_escape_string($db, $_POST["product_name7"]);
$product_name8 = mysqli_real_escape_string($db, $_POST["product_name8"]);
$product_name9 = mysqli_real_escape_string($db, $_POST["product_name9"]);
$product_name10 = mysqli_real_escape_string($db, $_POST["product_name10"]);
$product_name11 = mysqli_real_escape_string($db, $_POST["product_name11"]);
$product_name12 = mysqli_real_escape_string($db, $_POST["product_name12"]);
$product_name13 = mysqli_real_escape_string($db, $_POST["product_name13"]);
$product_name14 = mysqli_real_escape_string($db, $_POST["product_name14"]);
$product_name15 = mysqli_real_escape_string($db, $_POST["product_name15"]);

$target = "gallery/Manufactures/".basename($Manufacturers_image);

if($c_image_temp!=''){
move_uploaded_file($_FILES['Manufacturers_image']['tmp_name'], $target);
 $sql = "UPDATE Add_manufacturers SET manufacturers_name = '$manufacturers_name', Manufacturers_image= '$Manufacturers_image',Basic_product_details = '$Basic_product_details',
top_list = '$top_list', product_name1= '$product_name1',product_name2 = '$product_name2',
product_name3 = '$product_name3', product_name4= '$product_name4',product_name5 = '$product_name5',
product_name6 = '$product_name6', product_name7= '$product_name7',product_name8 = '$product_name8',
product_name9 = '$product_name9', product_name10= '$product_name10',product_name11 = '$product_name11',
product_name12 = '$product_name12', product_name13= '$product_name13',product_name14 = '$product_name14',
product_name15 = '$product_name15' WHERE manufacturers_id = '$manufacturers_id';";
}
else{
 $sql = "UPDATE Add_manufacturers SET manufacturers_name = '$manufacturers_name', Basic_product_details= '$Basic_product_details',
top_list = '$top_list', product_name1= '$product_name1',
product_name2 = '$product_name2', product_name3= '$product_name3',
product_name4 = '$product_name4', product_name5= '$product_name5',
product_name6 = '$product_name6', product_name7= '$product_name7',
product_name8 = '$product_name8', product_name9= '$product_name9',
product_name10 = '$product_name10', product_name11= '$product_name11',
product_name12 = '$product_name12', product_name13= '$product_name13',
product_name14 = '$product_name14', product_name15= '$product_name15' WHERE manufacturers_id = '$manufacturers_id';";	
}
 if(mysqli_query($db, $sql))
 {
  redirect('viewmanufactures');
 }
}
function php_slug($string)
{
 $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));
 return $slug;
}

?>
    
                   <form role="form" id="addUser" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
                        <div class="box-body">
                            <div class="row">
							
								 <div class="form-group col-md-4">
								   <label>Manufacturers Name:</label>
								   <select name="manufacturers_name" class="form-control" required>
								   <option value="">Choose Manufacturers Name</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>   
								   
                                <div class="form-group col-md-6">
								   <label>Manufacturers Image:</label>
								   <input type="file" name="Manufacturers_image" class="form-control">
								   </div>
								 <div class="form-group col-md-6">
								   <label>Basic Product Details</label>
								   <textarea name="Basic_product_details" id="rich-editor" class="form-control"><?php echo $Basic_product_details; ?></textarea>
								  
								   </div>
								   <div class="form-group col-md-6">
								   <label>Top List Product</label>
								   <select name="top_list" class="form-control">
								  <option value="<?php echo $top_list;?>" <?php if($top_list == $top_list) echo 'selected="selected" '; ?>><?php echo $top_list;?></option>									
								   <option value="0">No</option>
								    <option value="1">Yes</option>
								   </select>
								   </div>
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:1</label>
								   <select name="product_name1" class="form-control" required>
								    <option value="">Choose Product Name1</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name1 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
																			
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:2</label>
								   <select name="product_name2" class="form-control" >
								   <option value="">Choose Product Name2</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name2 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:3</label>
								   <select name="product_name3" class="form-control" >
								   <option value="">Choose Product Name3</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name3 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:4</label>
								   <select name="product_name4" class="form-control" >
								   <option value="">Choose Product Name4</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name4 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:5</label>
								   <select name="product_name5" class="form-control" >
								   <option value="">Choose Product Name5</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name5 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:6</label>
								   <select name="product_name6" class="form-control" >
								   <option value="">Choose Product Name6</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name6 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:7</label>
								   <select name="product_name7" class="form-control" >
								   <option value="">Choose Product Name7</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name7 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:8</label>
								   <select name="product_name8" class="form-control" >
								   <option value="">Choose Product Name8</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name8 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:9</label>
								   <select name="product_name9" class="form-control" >
								   <option value="">Choose Product Name9</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name9 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:10</label>
								   <select name="product_name10" class="form-control" >
								   <option value="">Choose Product Name10</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name10 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:11</label>
								   <select name="product_name11" class="form-control" >
								   <option value="">Choose Product Name11</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name11 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								   <div class="form-group col-md-4">
								   <label>Product Name:12</label>
								   <select name="product_name12" class="form-control" >
								   <option value="">Choose Product Name12</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name12 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:13</label>
								   <select name="product_name13" class="form-control" >
								   <option value="">Choose Product Name13</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name13 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:14</label>
								   <select name="product_name14" class="form-control" >
								   <option value="">Choose Product Name14</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name14 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
								   
								    <div class="form-group col-md-4">
								   <label>Product Name:15</label>
								   <select name="product_name15" class="form-control" >
								   <option value="">Choose Product Name15</option>
										 <?php
											$hostname="localhost";
										$username="utuqw0blisgax";
										$password="cgna4b4vvq3s";
										$databasename="dbf6lo3e2dwgnj";

										$connect=mysqli_connect($hostname, $username, $password, $databasename);
										$query="SELECT * FROM `Add_product`";
										$result1=mysqli_query($connect, $query);
										?>
										<?php while($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1['product_name'];?>" <?php if($product_name15 == $row1['product_name']) echo 'selected="selected" '; ?>><?php echo $row1['product_name'];?></option>
										
										<?php endwhile;?>
										</select>
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