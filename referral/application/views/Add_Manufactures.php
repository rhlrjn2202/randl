<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Add Manufactures Form
        <small>Add Manufactures</small>
      </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add Manufactures</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php
$db = mysqli_connect("localhost", "utuqw0blisgax", "cgna4b4vvq3s", "dbf6lo3e2dwgnj");
if(isset($_POST["submit_btn"]))
{
 $Manufacturers_image=rand(1,100000).$_FILES['Manufacturers_image']['name'];

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

 $sql = "INSERT INTO Add_manufacturers (manufacturers_name,Manufacturers_image,Basic_product_details,top_list,product_name1,product_name2,product_name3,product_name4,product_name5,product_name6,product_name7,product_name8,product_name9,product_name10,product_name11,product_name12,product_name13,product_name14,product_name15) VALUES ('".$manufacturers_name."','".$Manufacturers_image."','".$Basic_product_details."','".$top_list."','".$product_name1."','".$product_name2."','".$product_name3."','".$product_name4."','".$product_name5."','".$product_name6."','".$product_name7."','".$product_name8."',
 '".$product_name9."','".$product_name10."','".$product_name11."','".$product_name12."','".$product_name13."','".$product_name14."','".$product_name15."')";
 	mysqli_query($db, $sql);

 if (move_uploaded_file($_FILES['Manufacturers_image']['tmp_name'], $target)) {
 //echo "<script>alert('Your message Here');</script>";
  }

	else {
        //echo "send success";
    }
  $result = mysqli_query($db, "SELECT * FROM Add_manufacturers");
   redirect('Add_Manufactures');
mysqli_close($db);

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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
										<?php endwhile;?>
										</select>
								   </div>
								
                                <div class="form-group col-md-6">
								   <label>Manufacturers Image:</label>
								   <input type="file" name="Manufacturers_image" class="form-control">
								   </div>
								 <div class="form-group col-md-6">
								   <label>Basic Product Details</label>
								   <textarea name="Basic_product_details" id="rich-editor" class="form-control"></textarea>

								   </div>
								   <div class="form-group col-md-6">
								   <label>Top List Product</label>
								   <select name="top_list" class="form-control">

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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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

										<option value="<?php echo $row1[1];?>"><?php echo $row1[1]; ?></option>
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
<script src="<?php echo base_url(); ?>assets/tinymce/custom.tinymce.js"></script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
