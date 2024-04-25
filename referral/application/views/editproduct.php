<?php

$product_id = '';
$product_name = '';
$product_url = '';
$product_type = '';
$manufacturers = ''; 
$top_list = '';
$manufacturers_name1 = '';
$manufacturers_name2 = '';
$manufacturers_name3 = '';
$manufacturers_name4 = '';
$manufacturers_name5 = '';
$manufacturers_name6 = '';
$manufacturers_name7 = '';
$manufacturers_name8 = '';
$manufacturers_name9 = '';
$manufacturers_name10 = '';
$manufacturers_name11 = '';
$manufacturers_name12 = '';
$manufacturers_name13 = '';
$manufacturers_name14 = '';
$manufacturers_name15 = '';
$manufacturers_name16 = '';
$manufacturers_name17 = '';
$manufacturers_name18 = '';
$manufacturers_name19 = '';
$manufacturers_name20 = '';
$manufacturers_name21 = '';
$manufacturers_name22 = '';
$manufacturers_name23 = '';
$manufacturers_name24 = '';
$manufacturers_name25 = '';
$manufacturers_name26 = '';
$manufacturers_name27 = '';
$manufacturers_name28 = '';
$manufacturers_name29 = '';
$manufacturers_name30 = '';
$manufacturers_name31 = '';
$manufacturers_name32 = '';
$manufacturers_name33 = '';
$manufacturers_name34 = '';
$manufacturers_name35 = '';
$manufacturers_name36 = '';
$manufacturers_name37 = '';
$manufacturers_name38 = '';
$manufacturers_name39 = '';
$manufacturers_name40 = '';
$manufacturers_name41 = '';
$manufacturers_name42 = '';
$manufacturers_name43 = '';
$manufacturers_name44 = '';
$manufacturers_name45 = '';
$manufacturers_name46 = '';
$manufacturers_name47 = '';
$manufacturers_name48 = '';
$manufacturers_name49 = '';
$manufacturers_name50 = '';
$Basic_product_details = '';
$Basic_feature = '';
$design_and_application = '';

if(!empty($cbseinfo))
{
    foreach ($cbseinfo as $uf)
    {
        $product_id = $uf->product_id;
        $product_name = $uf->product_name;
		$product_url = $uf->product_url;
        $product_type = $uf->product_type;
        $manufacturers = $uf->manufacturers;
		$top_list = $uf->top_list;
		$manufacturers_name1 = $uf->manufacturers_name1;
		$manufacturers_name2 = $uf->manufacturers_name2;
		$manufacturers_name3 = $uf->manufacturers_name3;
		$manufacturers_name4 = $uf->manufacturers_name4;
		$manufacturers_name5 = $uf->manufacturers_name5;
		$manufacturers_name6 = $uf->manufacturers_name6;
		$manufacturers_name7 = $uf->manufacturers_name7;
		$manufacturers_name8 = $uf->manufacturers_name8;
		$manufacturers_name9 = $uf->manufacturers_name9;
		$manufacturers_name10 = $uf->manufacturers_name10;
		$manufacturers_name11 = $uf->manufacturers_name11;
		$manufacturers_name12 = $uf->manufacturers_name12;
		$manufacturers_name13 = $uf->manufacturers_name13;
		$manufacturers_name14 = $uf->manufacturers_name14;
		$manufacturers_name15 = $uf->manufacturers_name15;
		$manufacturers_name16 = $uf->manufacturers_name16;
		$manufacturers_name17 = $uf->manufacturers_name17;
		$manufacturers_name18 = $uf->manufacturers_name18;
		$manufacturers_name19 = $uf->manufacturers_name19;
		$manufacturers_name20 = $uf->manufacturers_name20;
		$manufacturers_name21 = $uf->manufacturers_name21;
		$manufacturers_name22 = $uf->manufacturers_name22;
		$manufacturers_name23 = $uf->manufacturers_name23;
		$manufacturers_name24 = $uf->manufacturers_name24;
		$manufacturers_name25 = $uf->manufacturers_name25;
		$manufacturers_name26 = $uf->manufacturers_name26;
		$manufacturers_name27 = $uf->manufacturers_name27;
		$manufacturers_name28 = $uf->manufacturers_name28;
		$manufacturers_name29 = $uf->manufacturers_name29;
		$manufacturers_name30 = $uf->manufacturers_name30;
		$manufacturers_name31 = $uf->manufacturers_name31;
		$manufacturers_name32 = $uf->manufacturers_name32;
		$manufacturers_name33 = $uf->manufacturers_name33;
		$manufacturers_name34 = $uf->manufacturers_name34;
		$manufacturers_name35 = $uf->manufacturers_name35;
		$manufacturers_name36 = $uf->manufacturers_name36;
		$manufacturers_name37 = $uf->manufacturers_name37;
		$manufacturers_name38 = $uf->manufacturers_name38;
		$manufacturers_name39 = $uf->manufacturers_name39;
		$manufacturers_name40 = $uf->manufacturers_name40;
		$manufacturers_name41 = $uf->manufacturers_name41;
		$manufacturers_name42 = $uf->manufacturers_name42;
		$manufacturers_name43 = $uf->manufacturers_name43;
		$manufacturers_name44 = $uf->manufacturers_name44;
		$manufacturers_name45 = $uf->manufacturers_name45;
		$manufacturers_name46 = $uf->manufacturers_name46;
		$manufacturers_name47 = $uf->manufacturers_name47;
		$manufacturers_name48 = $uf->manufacturers_name48;
		$manufacturers_name49 = $uf->manufacturers_name49;
		$manufacturers_name50 = $uf->manufacturers_name50;
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
 $gallery_image=rand(1,100000).$_FILES['gallery_image']['name'];
$c_image_temp1=$_FILES['gallery_image']['tmp_name'];

$gallery_image1=rand(1,100000).$_FILES['gallery_image1']['name'];
$c_image_temp2=$_FILES['gallery_image1']['tmp_name'];

$gallery_image2=rand(1,100000).$_FILES['gallery_image2']['name'];
$c_image_temp3=$_FILES['gallery_image2']['tmp_name'];

$gallery_image3=rand(1,100000).$_FILES['gallery_image3']['name'];
$c_image_temp4=$_FILES['gallery_image3']['tmp_name'];

 $product_name = mysqli_real_escape_string($db, $_POST["product_name"]);
 $product_url = mysqli_real_escape_string($db, $_POST["product_url"]);
$product_type = mysqli_real_escape_string($db, $_POST["product_type"]);
$manufacturers = mysqli_real_escape_string($db, $_POST["manufacturers"]);
$manufacturers_name1 = mysqli_real_escape_string($db, $_POST["manufacturers_name1"]);
$manufacturers_name2 = mysqli_real_escape_string($db, $_POST["manufacturers_name2"]);
$manufacturers_name3 = mysqli_real_escape_string($db, $_POST["manufacturers_name3"]);
$manufacturers_name4 = mysqli_real_escape_string($db, $_POST["manufacturers_name4"]);
$manufacturers_name5 = mysqli_real_escape_string($db, $_POST["manufacturers_name5"]);
$manufacturers_name6 = mysqli_real_escape_string($db, $_POST["manufacturers_name6"]);
$manufacturers_name7 = mysqli_real_escape_string($db, $_POST["manufacturers_name7"]);
$manufacturers_name8 = mysqli_real_escape_string($db, $_POST["manufacturers_name8"]);
$manufacturers_name9 = mysqli_real_escape_string($db, $_POST["manufacturers_name9"]);
$manufacturers_name10 = mysqli_real_escape_string($db, $_POST["manufacturers_name10"]);
$manufacturers_name11 = mysqli_real_escape_string($db, $_POST["manufacturers_name11"]);
$manufacturers_name12 = mysqli_real_escape_string($db, $_POST["manufacturers_name12"]);
$manufacturers_name13 = mysqli_real_escape_string($db, $_POST["manufacturers_name13"]);
$manufacturers_name14 = mysqli_real_escape_string($db, $_POST["manufacturers_name14"]);
$manufacturers_name15 = mysqli_real_escape_string($db, $_POST["manufacturers_name15"]);
$manufacturers_name16 = mysqli_real_escape_string($db, $_POST["manufacturers_name16"]);
$manufacturers_name17 = mysqli_real_escape_string($db, $_POST["manufacturers_name17"]);
$manufacturers_name18 = mysqli_real_escape_string($db, $_POST["manufacturers_name18"]);
$manufacturers_name19 = mysqli_real_escape_string($db, $_POST["manufacturers_name19"]);
$manufacturers_name20 = mysqli_real_escape_string($db, $_POST["manufacturers_name20"]);
$manufacturers_name21 = mysqli_real_escape_string($db, $_POST["manufacturers_name21"]);
$manufacturers_name22 = mysqli_real_escape_string($db, $_POST["manufacturers_name22"]);
$manufacturers_name23 = mysqli_real_escape_string($db, $_POST["manufacturers_name23"]);
$manufacturers_name24 = mysqli_real_escape_string($db, $_POST["manufacturers_name24"]);
$manufacturers_name25 = mysqli_real_escape_string($db, $_POST["manufacturers_name25"]);
$manufacturers_name26 = mysqli_real_escape_string($db, $_POST["manufacturers_name26"]);
$manufacturers_name27 = mysqli_real_escape_string($db, $_POST["manufacturers_name27"]);
$manufacturers_name28 = mysqli_real_escape_string($db, $_POST["manufacturers_name28"]);
$manufacturers_name29 = mysqli_real_escape_string($db, $_POST["manufacturers_name29"]);
$manufacturers_name30 = mysqli_real_escape_string($db, $_POST["manufacturers_name30"]);
$manufacturers_name31 = mysqli_real_escape_string($db, $_POST["manufacturers_name31"]);
$manufacturers_name32 = mysqli_real_escape_string($db, $_POST["manufacturers_name32"]);
$manufacturers_name33 = mysqli_real_escape_string($db, $_POST["manufacturers_name33"]);
$manufacturers_name34 = mysqli_real_escape_string($db, $_POST["manufacturers_name34"]);
$manufacturers_name35 = mysqli_real_escape_string($db, $_POST["manufacturers_name35"]);
$manufacturers_name36 = mysqli_real_escape_string($db, $_POST["manufacturers_name36"]);
$manufacturers_name37 = mysqli_real_escape_string($db, $_POST["manufacturers_name37"]);
$manufacturers_name38 = mysqli_real_escape_string($db, $_POST["manufacturers_name38"]);
$manufacturers_name39 = mysqli_real_escape_string($db, $_POST["manufacturers_name39"]);
$manufacturers_name40 = mysqli_real_escape_string($db, $_POST["manufacturers_name40"]);
$manufacturers_name41 = mysqli_real_escape_string($db, $_POST["manufacturers_name41"]);
$manufacturers_name42 = mysqli_real_escape_string($db, $_POST["manufacturers_name42"]);
$manufacturers_name43 = mysqli_real_escape_string($db, $_POST["manufacturers_name43"]);
$manufacturers_name44 = mysqli_real_escape_string($db, $_POST["manufacturers_name44"]);
$manufacturers_name45 = mysqli_real_escape_string($db, $_POST["manufacturers_name45"]);
$manufacturers_name46 = mysqli_real_escape_string($db, $_POST["manufacturers_name46"]);
$manufacturers_name47 = mysqli_real_escape_string($db, $_POST["manufacturers_name47"]);
$manufacturers_name48 = mysqli_real_escape_string($db, $_POST["manufacturers_name48"]);
$manufacturers_name49 = mysqli_real_escape_string($db, $_POST["manufacturers_name49"]);
$manufacturers_name50 = mysqli_real_escape_string($db, $_POST["manufacturers_name50"]);

$Basic_product_details = mysqli_real_escape_string($db, $_POST["Basic_product_details"]);
$Basic_feature = mysqli_real_escape_string($db, $_POST["Basic_feature"]);
$design_and_application = mysqli_real_escape_string($db, $_POST["design_and_application"]);

$target = "gallery/addproduct/".basename($gallery_image);
 $target1 = "gallery/addproduct/".basename($gallery_image1);
 $target2 = "gallery/addproduct/".basename($gallery_image2);
 $target3 = "gallery/addproduct/".basename($gallery_image3);
 

 if(($c_image_temp1!='')&&($c_image_temp2!='')&&($c_image_temp3!='')&&($c_image_temp4!=''))
{
move_uploaded_file($_FILES['gallery_image']['tmp_name'], $target);
move_uploaded_file($_FILES['gallery_image1']['tmp_name'], $target1);
move_uploaded_file($_FILES['gallery_image2']['tmp_name'], $target2);
move_uploaded_file($_FILES['gallery_image3']['tmp_name'], $target3);
$sql = "UPDATE Add_product SET product_name = '$product_name',product_url = '".php_slug($product_url)."', product_type= '$product_type',gallery_image= '$gallery_image',gallery_image1= '$gallery_image1',
gallery_image2= '$gallery_image2',gallery_image3= '$gallery_image3',manufacturers = '$manufacturers',
manufacturers_name1 = '$manufacturers_name1',
manufacturers_name2 = '$manufacturers_name2',manufacturers_name3 = '$manufacturers_name3',manufacturers_name4 = '$manufacturers_name4',
manufacturers_name5 = '$manufacturers_name5',manufacturers_name6 = '$manufacturers_name6',manufacturers_name7 = '$manufacturers_name7',
manufacturers_name8 = '$manufacturers_name8',manufacturers_name9 = '$manufacturers_name9',manufacturers_name10 = '$manufacturers_name10', 
manufacturers_name11 = '$manufacturers_name11',
manufacturers_name12 = '$manufacturers_name12',manufacturers_name13 = '$manufacturers_name13',manufacturers_name14 = '$manufacturers_name14',
manufacturers_name15 = '$manufacturers_name15',manufacturers_name16 = '$manufacturers_name16',manufacturers_name17 = '$manufacturers_name17',
manufacturers_name18 = '$manufacturers_name18',manufacturers_name19 = '$manufacturers_name19',manufacturers_name20 = '$manufacturers_name20', 
manufacturers_name21 = '$manufacturers_name21',
manufacturers_name22 = '$manufacturers_name22',manufacturers_name23 = '$manufacturers_name23',manufacturers_name24 = '$manufacturers_name24',
manufacturers_name25 = '$manufacturers_name25',manufacturers_name26 = '$manufacturers_name26',manufacturers_name27 = '$manufacturers_name27',
manufacturers_name28 = '$manufacturers_name28',manufacturers_name29 = '$manufacturers_name29',manufacturers_name30 = '$manufacturers_name30', 

manufacturers_name31 = '$manufacturers_name31',
manufacturers_name32 = '$manufacturers_name32',manufacturers_name33 = '$manufacturers_name33',manufacturers_name34 = '$manufacturers_name34',
manufacturers_name35 = '$manufacturers_name35',manufacturers_name36 = '$manufacturers_name36',manufacturers_name37 = '$manufacturers_name37',
manufacturers_name38 = '$manufacturers_name38',manufacturers_name39 = '$manufacturers_name39',manufacturers_name40 = '$manufacturers_name40',
manufacturers_name41 = '$manufacturers_name41',
manufacturers_name42 = '$manufacturers_name42',manufacturers_name43 = '$manufacturers_name43',manufacturers_name44 = '$manufacturers_name44',
manufacturers_name45 = '$manufacturers_name45',manufacturers_name46 = '$manufacturers_name46',manufacturers_name47 = '$manufacturers_name47',
manufacturers_name48 = '$manufacturers_name48',manufacturers_name49 = '$manufacturers_name49',manufacturers_name50 = '$manufacturers_name50',
Basic_product_details= '$Basic_product_details', Basic_feature = '$Basic_feature', 
design_and_application= '$design_and_application' WHERE product_id = '$product_id';";
	
}
else{
$sql = "UPDATE Add_product SET product_name = '$product_name',product_url = '".php_slug($product_url)."', product_type= '$product_type',
manufacturers = '$manufacturers',manufacturers_name1 = '$manufacturers_name1',
manufacturers_name2 = '$manufacturers_name2',manufacturers_name3 = '$manufacturers_name3',manufacturers_name4 = '$manufacturers_name4',
manufacturers_name5 = '$manufacturers_name5',manufacturers_name6 = '$manufacturers_name6',manufacturers_name7 = '$manufacturers_name7',
manufacturers_name8 = '$manufacturers_name8',manufacturers_name9 = '$manufacturers_name9',manufacturers_name10 = '$manufacturers_name10', 
manufacturers_name11 = '$manufacturers_name11',
manufacturers_name12 = '$manufacturers_name12',manufacturers_name13 = '$manufacturers_name13',manufacturers_name14 = '$manufacturers_name14',
manufacturers_name15 = '$manufacturers_name15',manufacturers_name16 = '$manufacturers_name16',manufacturers_name17 = '$manufacturers_name17',
manufacturers_name18 = '$manufacturers_name18',manufacturers_name19 = '$manufacturers_name19',manufacturers_name20 = '$manufacturers_name20', 
manufacturers_name21 = '$manufacturers_name21',
manufacturers_name22 = '$manufacturers_name22',manufacturers_name23 = '$manufacturers_name23',manufacturers_name24 = '$manufacturers_name24',
manufacturers_name25 = '$manufacturers_name25',manufacturers_name26 = '$manufacturers_name26',manufacturers_name27 = '$manufacturers_name27',
manufacturers_name28 = '$manufacturers_name28',manufacturers_name29 = '$manufacturers_name29',manufacturers_name30 = '$manufacturers_name30', 

manufacturers_name31 = '$manufacturers_name31',
manufacturers_name32 = '$manufacturers_name32',manufacturers_name33 = '$manufacturers_name33',manufacturers_name34 = '$manufacturers_name34',
manufacturers_name35 = '$manufacturers_name35',manufacturers_name36 = '$manufacturers_name36',manufacturers_name37 = '$manufacturers_name37',
manufacturers_name38 = '$manufacturers_name38',manufacturers_name39 = '$manufacturers_name39',manufacturers_name40 = '$manufacturers_name40',
manufacturers_name41 = '$manufacturers_name41',
manufacturers_name42 = '$manufacturers_name42',manufacturers_name43 = '$manufacturers_name43',manufacturers_name44 = '$manufacturers_name44',
manufacturers_name45 = '$manufacturers_name45',manufacturers_name46 = '$manufacturers_name46',manufacturers_name47 = '$manufacturers_name47',
manufacturers_name48 = '$manufacturers_name48',manufacturers_name49 = '$manufacturers_name49',manufacturers_name50 = '$manufacturers_name50',
Basic_product_details= '$Basic_product_details', Basic_feature = '$Basic_feature', 
design_and_application= '$design_and_application' WHERE product_id = '$product_id';";
} 
 
 if(mysqli_query($db, $sql))
 {
  redirect('viewproduct');
 }
}
function php_slug($string)
{
 $slug = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($string)));
 return $slug;
}

?>
    
                    <form role="form"  method="post" id="editUser" enctype="multipart/form-data" data-toggle="validator" role="form">
                        <div class="box-body">
						
						
						 <div class="row">
							<div class="form-group col-md-4">
								   <label>Product Name</label>
								   <input type="text" name="product_name" placeholder="Product Name" value="<?php echo $product_name; ?>" class="form-control">
								   </div>
								   <div class="form-group col-md-6">
								   <label>Product Url:</label>
								   <input type="text" name="product_url" value="<?php echo $product_url; ?>" class="form-control">
								   </div> 
								  <div class="form-group col-md-4">
								    <label>Product Type</label>

									<select name="product_type" class="form-control">
									<option value="<?php echo $product_type;?>" <?php if($product_type == $product_type) echo 'selected="selected" '; ?>><?php echo $product_type;?></option>									
									  <option value="components">Components</option>
									  <option value="subsystems">Sub Systems</option>
									  <option value="instruments">Instruments</option>
									</select> 
								</div>
								 <div class="form-group col-md-4">
								   <label>Choose Manufacturers:</label>
								   <select name="manufacturers" class="form-control" >
								   <option value="">Choose Manufacturers</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div> 
									<div class="form-group col-md-6">
								   <label>Top List Product</label>
								   <select name="top_list" class="form-control">
								  <option value="<?php echo $top_list;?>" <?php if($top_list == $top_list) echo 'selected="selected" '; ?>><?php echo $top_list;?></option>									
								   <option value="0">No</option>
								    <option value="1">Yes</option>
								   </select>
								   </div>
								    <div class="form-group col-md-6">
								   <label>Upload Image 1:</label>
								   <input type="file" name="gallery_image" class="form-control">
								   </div>
								   <div class="form-group col-md-6">
								   <label>Upload Image 2:</label>
								   <input type="file" name="gallery_image1" class="form-control">
								   </div>
								   <div class="form-group col-md-6">
								   <label>Upload Image 3:</label>
								   <input type="file" name="gallery_image2" class="form-control">
								   </div>
								   <div class="form-group col-md-6">
								   <label>Upload Image 4:</label>
								   <input type="file" name="gallery_image3" class="form-control">
								   </div>
									<div class="form-group col-md-4">
								   <label>Manufacturers Name 1:</label>
								   <select name="manufacturers_name1" class="form-control" >
								   <option value="">Choose Manufacturers1</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name1 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 2:</label>
								   <select name="manufacturers_name2" class="form-control" >
								   <option value="">Choose Manufacturers2</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name2 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 3:</label>
								   <select name="manufacturers_name3" class="form-control" >
								   <option value="">Choose Manufacturers3</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name3 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 4:</label>
								   <select name="manufacturers_name4" class="form-control" >
								   <option value="">Choose Manufacturers4</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name4 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 5:</label>
								   <select name="manufacturers_name5" class="form-control" >
								   <option value="">Choose Manufacturers5</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name5 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 6:</label>
								   <select name="manufacturers_name6" class="form-control" >
								   <option value="">Choose Manufacturers6</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name6 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 7:</label>
								   <select name="manufacturers_name7" class="form-control" >
								   <option value="">Choose Manufacturers7</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name7 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 8:</label>
								   <select name="manufacturers_name8" class="form-control" >
								   <option value="">Choose Manufacturers8</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name8 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 9:</label>
								   <select name="manufacturers_name9" class="form-control" >
								   <option value="">Choose Manufacturers9</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name9 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 10:</label>
								   <select name="manufacturers_name10" class="form-control" >
								   <option value="">Choose Manufacturers10</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name10 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>
									<div class="form-group col-md-4">
								   <label>Manufacturers Name 11:</label>
								   <select name="manufacturers_name11" class="form-control" >
								   <option value="">Choose Manufacturers11</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name11 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 12:</label>
								   <select name="manufacturers_name12" class="form-control" >
								   <option value="">Choose Manufacturers12</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name12 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 13:</label>
								   <select name="manufacturers_name13" class="form-control" >
								   <option value="">Choose Manufacturers13</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name13 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 14:</label>
								   <select name="manufacturers_name14" class="form-control" >
								   <option value="">Choose Manufacturers14</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name14 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 15:</label>
								   <select name="manufacturers_name15" class="form-control" >
								   <option value="">Choose Manufacturers15</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name15 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 16:</label>
								   <select name="manufacturers_name16" class="form-control" >
								   <option value="">Choose Manufacturers16</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name16 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 17:</label>
								   <select name="manufacturers_name17" class="form-control" >
								   <option value="">Choose Manufacturers17</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name17 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 18:</label>
								   <select name="manufacturers_name18" class="form-control" >
								   <option value="">Choose Manufacturers18</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name18 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 19:</label>
								   <select name="manufacturers_name19" class="form-control" >
								   <option value="">Choose Manufacturers19</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name19 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 20:</label>
								   <select name="manufacturers_name20" class="form-control" >
								   <option value="">Choose Manufacturers20</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name20 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>
									<div class="form-group col-md-4">
								   <label>Manufacturers Name 21:</label>
								   <select name="manufacturers_name21" class="form-control" >
								   <option value="">Choose Manufacturers21</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name21 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 22:</label>
								   <select name="manufacturers_name22" class="form-control" >
								   <option value="">Choose Manufacturers22</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name22 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 23:</label>
								   <select name="manufacturers_name23" class="form-control" >
								   <option value="">Choose Manufacturers23</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name23 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 24:</label>
								   <select name="manufacturers_name24" class="form-control" >
								   <option value="">Choose Manufacturers24</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name24 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 25:</label>
								   <select name="manufacturers_name25" class="form-control" >
								   <option value="">Choose Manufacturers25</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name25 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 26:</label>
								   <select name="manufacturers_name26" class="form-control" >
								   <option value="">Choose Manufacturers26</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name26 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 27:</label>
								   <select name="manufacturers_name27" class="form-control" >
								   <option value="">Choose Manufacturers27</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name27 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 28:</label>
								   <select name="manufacturers_name28" class="form-control" >
								   <option value="">Choose Manufacturers28</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name28 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 29:</label>
								   <select name="manufacturers_name29" class="form-control" >
								   <option value="">Choose Manufacturers29</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name29 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 30:</label>
								   <select name="manufacturers_name30" class="form-control" >
								   <option value="">Choose Manufacturers30</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name30 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>
									<div class="form-group col-md-4">
								   <label>Manufacturers Name 31:</label>
								   <select name="manufacturers_name31" class="form-control" >
								   <option value="">Choose Manufacturers31</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name31 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 32:</label>
								   <select name="manufacturers_name32" class="form-control" >
								   <option value="">Choose Manufacturers32</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name32 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 33:</label>
								   <select name="manufacturers_name33" class="form-control" >
								   <option value="">Choose Manufacturers33</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name33 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 34:</label>
								   <select name="manufacturers_name34" class="form-control" >
								   <option value="">Choose Manufacturers34</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name34 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 35:</label>
								   <select name="manufacturers_name35" class="form-control" >
								   <option value="">Choose Manufacturers35</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name35 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 36:</label>
								   <select name="manufacturers_name36" class="form-control" >
								   <option value="">Choose Manufacturers36</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name36 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 37:</label>
								   <select name="manufacturers_name37" class="form-control" >
								   <option value="">Choose Manufacturers37</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name37 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 38:</label>
								   <select name="manufacturers_name38" class="form-control" >
								   <option value="">Choose Manufacturers38</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name38 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 39:</label>
								   <select name="manufacturers_name39" class="form-control" >
								   <option value="">Choose Manufacturers39</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name39 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 40:</label>
								   <select name="manufacturers_name40" class="form-control" >
								   <option value="">Choose Manufacturers40</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name40 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>
									<div class="form-group col-md-4">
								   <label>Manufacturers Name 41:</label>
								   <select name="manufacturers_name41" class="form-control" >
								   <option value="">Choose Manufacturers41</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name41 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 42:</label>
								   <select name="manufacturers_name42" class="form-control" >
								   <option value="">Choose Manufacturers42</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name42 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 43:</label>
								   <select name="manufacturers_name43" class="form-control" >
								   <option value="">Choose Manufacturers43</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name43 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 44:</label>
								   <select name="manufacturers_name44" class="form-control" >
								   <option value="">Choose Manufacturers44</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name44 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 45:</label>
								   <select name="manufacturers_name45" class="form-control" >
								   <option value="">Choose Manufacturers45</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name45 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 46:</label>
								   <select name="manufacturers_name46" class="form-control" >
								   <option value="">Choose Manufacturers46</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name46 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 47:</label>
								   <select name="manufacturers_name47" class="form-control" >
								   <option value="">Choose Manufacturers47</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name47 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 48:</label>
								   <select name="manufacturers_name48" class="form-control" >
								   <option value="">Choose Manufacturers48</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name48 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 49:</label>
								   <select name="manufacturers_name49" class="form-control" >
								   <option value="">Choose Manufacturers49</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name49 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>  
								   
								   <div class="form-group col-md-4">
								   <label>Manufacturers Name 50:</label>
								   <select name="manufacturers_name50" class="form-control" >
								   <option value="">Choose Manufacturers50</option>
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
										<option value="<?php echo $row1['categories'];?>" <?php if($manufacturers_name50 == $row1['categories']) echo 'selected="selected" '; ?>><?php echo $row1['categories'];?></option>
										
										<?php endwhile;?>
										</select>
								   </div>
                               
								 <div class="form-group col-md-6">
								   <label>Basic Product Details</label>
								   <textarea name="Basic_product_details" id="rich-editor" class="form-control"><?php echo $Basic_product_details; ?></textarea>
								  
								   </div>
								   <div class="form-group col-md-6">
								   <label>Basic & Selection Feature</label>
								  <textarea name="Basic_feature" id="rich-editor1" class="form-control"><?php echo $Basic_feature; ?></textarea>
								  
								   </div>  
								   <div class="form-group col-md-6">
								   <label>Design & Application</label>
								  <textarea name="design_and_application" id="rich-editor2" class="form-control"><?php echo $design_and_application; ?></textarea>
								  
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