<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Add Income
        <small>Add Income</small>
      </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add Income</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

 <?php
 $host="localhost";//host name  
 $username="utqkdsjgz1ezi"; //database username  
 $word="dxrdkvr6rsvl";//database word  
 $db_name="dbzop7x90qlkp4";//database name  
 $tbl_name="request_quote"; //table name  
 $con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
if(isset($_POST["submit_btn"]))
{
$name = $_POST["name"];
$date = $_POST["date"];
$payment_mode = $_POST["payment_mode"];
$amount = $_POST["amount"];
$particular = $_POST["particular"];
$remark = $_POST["remark"];

 $sql = mysqli_query($con,"INSERT INTO add_income (name,date,payment_mode,amount,particular,remark)
  VALUES ('".$name."','".$date."','".$payment_mode."','".$amount."','".$particular."','".$remark."')");

      if($sql==true)
         {
           echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4 id="success"><i class="icon fa fa-check"></i>Success!</h4>
        </div>';
         }
         else{
           echo ''.mysql_error();
         }
 redirect('add_income');
}
?>

					 <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>
                    <form role="form" id="addUser" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
                        <div class="box-body">
                            <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Date</label>
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Payment Mode</label>
                                <select class="form-control required" id="payment_mode" name="payment_mode">
                                    <option value="cash">Direct Hand</option>
                                    <option value="bank">Bank</option>
                                    <option value="card">Card</option>
                                    <option value="online">Online</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Particular</label>
                                <input type="text" class="form-control" id="particular" name="particular">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Amount</label>
                                <input type="text" class="form-control" id="amount" name="amount">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
     								   <label> Remark</label>
     								  <textarea name="remark" class="form-control"></textarea>
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
