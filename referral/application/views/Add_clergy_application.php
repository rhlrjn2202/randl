<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Manage Clergy Details
        <small>Enter Clergy Details</small>
      </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Manage Clergy Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php
                    $host="localhost";//host name
                    $username="utqkdsjgz1ezi"; //database username
                    $word="dxrdkvr6rsvl";//database word
                    $db_name="dbzop7x90qlkp4";//database name
                    $con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string
                    if(isset($_POST["submit_btn"]))
                    {
                    $photo=rand(1,100000).$_FILES['photo']['name'];
                    $name = $_POST["name"];
                    $application_for = $_POST["application_for"];
                    $introducer = $_POST["introducer"];
                    $appli_date = $_POST["appli_date"];

                    $target = "gallery/clergyform/".basename($photo);

                    move_uploaded_file($_FILES['photo']['tmp_name'], $target);

                     $sql = mysqli_query($con,"INSERT INTO clergy_application_form (name,application_for,introducer,appli_date,photo)
                      VALUES ('".$name."','".$application_for."','".$introducer."','".$appli_date."','".$photo."')");
                          // }
                          if(mysqli_query($con, $sql))
                          {
                           redirect('Add_clergy_application');
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
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="reviews">Application For</label>
                                      <select class="form-control dropdown" id="application_for" name="application_for">
                                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                        <option value="Priest">Priest</option>
                                        <option value="Deacon">Deacon</option>
                                      
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reviews">Introducer Name</label>
                                        <input type="text" class="form-control" id="introducer" name="introducer">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reviews">Date</label>
                                        <input type="date" class="form-control" id="appli_date" name="appli_date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="reviews">Photo</label>
                                        <input type="file" class="form-control" id="photo" name="photo">
                                    </div>
                                </div>

                              <input type="hidden" class="form-control" id="status" name="status" value="0">


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
