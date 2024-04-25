<?php

$techupdates_id = '';
$blog_title = '';
$blog_url = '';
$blog_image = '';
$blog_details = '';

if(!empty($blogdetailsinfo))
{
    foreach ($blogdetailsinfo as $uf)
    {
        $techupdates_id = $uf->techupdates_id;
        $blog_title = $uf->blog_title; 
		$blog_url = $uf->blog_url;
        $blog_image = $uf->blog_image;
        $blog_details = $uf->blog_details;
        
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
  $blog_image=rand(1,100000).$_FILES['blog_image']['name'];
  $c_image_temp=$_FILES['blog_image']['tmp_name'];
 $blog_title = mysqli_real_escape_string($db, $_POST["blog_title"]);
   $blog_url = mysqli_real_escape_string($db, $_POST["blog_url"]);
$blog_details = mysqli_real_escape_string($db, $_POST["blog_details"]);

$target = "gallery/blog/".basename($blog_image);

if($c_image_temp!=''){
move_uploaded_file($_FILES['blog_image']['tmp_name'], $target);
 $sql = "UPDATE Add_techupdates SET blog_title = '$blog_title',blog_url = '".php_slug($blog_url)."', blog_details= '$blog_details',blog_image = '$blog_image' WHERE techupdates_id = '$techupdates_id';";
}
else{
 $sql = "UPDATE Add_techupdates SET blog_title = '$blog_title',blog_url = '".php_slug($blog_url)."', blog_details= '$blog_details' WHERE techupdates_id = '$techupdates_id';";	
}
 if(mysqli_query($db, $sql))
 {
  redirect('viewblog');
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
							
								 <div class="form-group col-md-6">
								   <label>Blog Title:</label>
								   <input type="text" name="blog_title" value="<?php echo $blog_title; ?>" class="form-control">
								   </div>  
								    <div class="form-group col-md-6">
								   <label>Blog Url:</label>
								   <input type="text" name="blog_url" value="<?php echo $blog_url; ?>" class="form-control">
								   </div>  
                                <div class="form-group col-md-6">
								   <label>Blog Image:</label>
								   <input type="file" name="blog_image" class="form-control">
								   </div>
								 <div class="form-group col-md-6">
								   <label>Blog Details</label>
								   <textarea name="blog_details" id="rich-editor" class="form-control"><?php echo $blog_details; ?></textarea>
								   
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