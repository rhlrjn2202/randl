<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Add Bible Application
      </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Add NO DUE Application</h3>
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
                    $intl_no = $_POST["intl_no"];
                    $eridan_no = $_POST["eridan_no"];
                    $status = $_POST["status"];
                                      
                     $sql = mysqli_query($con,"INSERT INTO nodue_application (name,intl_no,eridan_no,status)
                      VALUES ('".$name."','".$intl_no."','".$eridan_no."','".$status."')");
                          // }
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
                                      <label for="reviews">Name</label>
                                      <input type="text" class="form-control required" id="name" name="name">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">INTL NO</label>
                                      <input type="text" class="form-control required" id="intl_no" name="intl_no">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">ERIDAN NO</label>
                                      <input type="text" class="form-control required" id="eridan_no" name="eridan_no" >
                                  </div>
                              </div>
                                    <input type="hidden" class="form-control required" id="status" name="status" value="1">

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
