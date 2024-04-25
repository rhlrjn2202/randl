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
                        <h3 class="box-title">Add Bible Application</h3>
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
                    $photo=rand(1,100000).$_FILES['photo']['name'];
                    $title = $_POST["title"];
                    $address = $_POST["address"];
                    $reg_no = $_POST["reg_no"];
                    $type = $_POST["type"];
                    
                    $target = "gallery/clergyform/".basename($photo);
                    
                     $sql = mysqli_query($con,"INSERT INTO add_baptism (title,address,reg_no,photo,type)
                      VALUES ('".$title."','".$address."','".$reg_no."','".$photo."','".$type."')");
                          // }
                          if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
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
                                      <label for="reviews">Title</label>
                                      <input type="text" class="form-control required" id="title" name="title">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Address</label>
                                      <textarea class="form-control required" id="address" name="address"></textarea>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Photo</label>
                                      <input type="file" class="form-control required" id="photo" name="photo">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Reg No</label>
                                      <input type="text" class="form-control required" id="reg_no" name="reg_no">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Type</label>
                                      <select name="type" id="type" class="form-control required" >
                                        <option value="baptism">Baptism</option>
                                        <option value="marriage">Wedding Declaration</option>
                                        <option value="Funaral">Funaral</option>
                                        <option value="Church Membership">Church Membership</option>
                                        <option value="Letter head">Letter head</option>
                                        <option value="Form M20 and Form M21">Form M20 and Form M21</option>
                                      </select>
                                  </div>
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
