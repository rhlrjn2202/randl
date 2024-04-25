<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Manage Disclaimer
        <small>Add, Manage Disclaimer</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Manage Disclaimer</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
   <?php
$connect = mysqli_connect("localhost", "utuqw0blisgax", "cgna4b4vvq3s", "dbf6lo3e2dwgnj");
if(isset($_POST["submit_btn"]))
{
 //mysqli_real_escape_string() - mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement
 //htmlentities() - htmlentities() function converts special characters to HTML entities.

  $disclaimer_content = mysqli_real_escape_string($connect, $_POST["disclaimer_content"]); 
 $disclaimer_content = htmlentities($disclaimer_content);

$sql = "UPDATE disclaimer SET disclaimer_content = '$disclaimer_content' WHERE dis_id = 1";


 if(mysqli_query($connect, $sql))
 {
  redirect('add_disclaimer');
 }
}

?>
<?php
$connect = mysqli_connect("localhost", "utuqw0blisgax", "cgna4b4vvq3s", "dbf6lo3e2dwgnj");

$query = "SELECT * FROM disclaimer";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
$disclaimer_content=$row["disclaimer_content"];
$disclaimer_content = html_entity_decode($disclaimer_content);
?>
					
                    <form role="form" id="addUser" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
                        <div class="box-body">
                            <div class="row">
                               
								   <div class="form-group col-md-8">
								   <label>Content:</label>
								  <textarea name="disclaimer_content" id="rich-editor" class="form-control"><?php echo $disclaimer_content; ?></textarea>
								
                                   </div>
                               
                            </div>
                            
							
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" name="submit_btn" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
					 <?php } ?>
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