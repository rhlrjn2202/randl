<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Manage Human Rights
      </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Details</h3>
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
$received_document = $_POST["received_document"];
$name = $_POST["name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$blood_group = $_POST["blood_group"];
$uid_no = $_POST["uid_no"];
$pan_no = $_POST["pan_no"];
$father_name = $_POST["father_name"];
$mother_name = $_POST["mother_name"];
$marital_status = $_POST["marital_status"];
$spouse_name = $_POST["spouse_name"];
$caste = $_POST["caste"];
$religion = $_POST["religion"];
$mobile_no = $_POST["mobile_no"];
$church_address = $_POST["church_address"];
$correspondent_address = $_POST["correspondent_address"];
$intoduer_name = $_POST["intoduer_name"];
$intro_mobile_no = $_POST["intro_mobile_no"];
$police_station = $_POST["police_station"];
$ci_office = $_POST["ci_office"];
$sub_reg_office = $_POST["sub_reg_office"];
$appli_received_date = $_POST["appli_received_date"];
$remark = $_POST["remark"];
$ahrpw_ref_no = $_POST["ahrpw_ref_no"];
$ahrpw_doc_no = $_POST["ahrpw_doc_no"];
$ahrpw_reg_no = $_POST["ahrpw_reg_no"];
$id_issued_date = $_POST["id_issued_date"];
$id_delivered_date = $_POST["id_delivered_date"];
$id_collected_date = $_POST["id_collected_date"];
$id_valid_upto = $_POST["id_valid_upto"];
$designation = $_POST["designation"];
$photo=rand(1,100000).$_FILES['photo']['name'];
$item="";
if($received_document!=null)
{
foreach($received_document as $item1){
$item .= $item1.",";  
  }
}
    $target = "gallery/clergyform/".basename($photo);

 $sql = mysqli_query($con,"INSERT INTO add_human_rights (name,dob,photo,gender,blood_group,uid_no,pan_no,father_name,mother_name,marital_status,
        spouse_name,caste,religion,mobile_no,church_address,correspondent_address,intoduer_name,intro_mobile_no,
        police_station,ci_office,sub_reg_office,appli_received_date,received_document,remark,
        ahrpw_ref_no,ahrpw_doc_no,ahrpw_reg_no,id_issued_date,id_delivered_date,id_collected_date,id_valid_upto,designation)
  VALUES ('".$name."','".$dob."','".$photo."','".$gender."','".$blood_group."','".$uid_no."','".$pan_no."','".$father_name."','".$mother_name."',
        '".$marital_status."','".$spouse_name."','".$caste."','".$religion."','".$mobile_no."','".$church_address."',
       '".$correspondent_address."','".$intoduer_name."','".$intro_mobile_no."',
       '".$police_station."','".$ci_office."','".$sub_reg_office."','".$appli_received_date."','".$item."',
       '".$remark."','".$ahrpw_ref_no."','".$ahrpw_doc_no."','".$ahrpw_reg_no."','".$id_issued_date."','".$id_delivered_date."','".$id_collected_date."',
        '".$id_valid_upto."','".$designation."')");
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
                                      <label for="reviews">Name</label>
                                      <input type="text" class="form-control required" id="name" name="name">
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
                                      <label for="reviews">Date Of Birth</label>
                                      <input type="date" class="form-control required" id="dob" name="dob">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="level">Gender</label>
                                      <select class="form-control required" id="gender" name="gender">
                                          <option value="male">Male</option>
                                          <option value="female">Female</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="level">Blood Group</label>
                                      <select class="form-control required" id="blood_group" name="blood_group">
                                          <option value="a+ve"> A+ve</option>
                                          <option value="a-ve">A-ve </option>
                                          <option value="b+ve">B+ve</option>
                                          <option value="b-ve">B-ve</option>
                                          <option value="ab+ve">AB+ve</option>
                                          <option value="ab-ve">AB-ve</option>
                                          <option value="o+ve">O+ve</option>
                                          <option value="o-ve">O-ve</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Uid No</label>
                                      <input type="text" class="form-control required" id="uid_no" name="uid_no">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Pan Card No</label>
                                      <input type="text" class="form-control required" id="pan_no" name="pan_no">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Father Name</label>
                                      <input type="text" class="form-control required" id="father_name" name="father_name">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="reviews">Mother Name</label>
                                      <input type="text" class="form-control required" id="mother_name" name="mother_name">
                                  </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label for="level">Marital Status</label>
                              <select name="marital_status" class="form-control required" id="marital_status">
                                  <option value="">-Select Marital Status-</option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                  <option value="Widowed">Widowed</option>
                                  <option value="Separated">Separated</option>
                                  <option value="Divorced">Divorced</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Spouse Name</label>
                                <input type="text" class="form-control" id="spouse_name" name="spouse_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">caste</label>
                                <input type="text" class="form-control" id="caste" name="caste">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="reviews">Religion</label>
                              <select class="form-control dropdown" id="religion" name="religion">
                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                <option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
                                <option value="Agnostic">Agnostic</option>
                                <option value="Atheist">Atheist</option>
                                <option value="Baha'i">Baha'i</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Cao Dai">Cao Dai</option>
                                <option value="Chinese traditional religion">Chinese traditional religion</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Islam">Islam</option>
                                <option value="Jainism">Jainism</option>
                                <option value="Juche">Juche</option>
                                <option value="Judaism">Judaism</option>
                                <option value="Neo-Paganism">Neo-Paganism</option>
                                <option value="Nonreligious">Nonreligious</option>
                                <option value="Rastafarianism">Rastafarianism</option>
                                <option value="Secular">Secular</option>
                                <option value="Shinto">Shinto</option>
                                <option value="Sikhism">Sikhism</option>
                                <option value="Spiritism">Spiritism</option>
                                <option value="Tenrikyo">Tenrikyo</option>
                                <option value="Unitarian-Universalism">Unitarian-Universalism</option>
                                <option value="Zoroastrianism">Zoroastrianism</option>
                                <option value="primal-indigenous">primal-indigenous</option>
                                <option value="Other">Other</option>
                              </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Mobile No</label>
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
     								   <label>Resident Address:</label>
     								  <textarea name="church_address" id="rich-editor" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-6">
     								   <label>Currespondent Address:</label>
     								  <textarea name="correspondent_address" id="rich-editor" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Name Of Introduer</label>
                                <input type="text" class="form-control" id="intoduer_name" name="intoduer_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Introduer Mobile No</label>
                                <input type="text" class="form-control" id="intro_mobile_no" name="intro_mobile_no">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Police Station</label>
                                <input type="text" class="form-control" id="police_station" name="police_station">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">CI Office</label>
                                <input type="text" class="form-control" id="ci_office" name="ci_office">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Sub Register Office</label>
                                <input type="text" class="form-control" id="sub_reg_office" name="sub_reg_office">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Application Received Date</label>
                                <input type="date" class="form-control" id="appli_received_date" name="appli_received_date">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                              <fieldset>
                                  <legend>Received Documents</legend>
                                  <input type="checkbox" name="received_document[]" value="Appli_ahrpw">Application For AHRPW<br>
                                  <input type="checkbox" name="received_document[]" value="aadhar_copy">AAdhar Copy<br>
                                  <input type="checkbox" name="received_document[]" value="pan_copy">PAN Card Copy<br>
                                  <br>
                              </fieldset>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
     								   <label>Remark</label>
     								  <textarea name="remark" id="rich-editor" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">AHRPW REF NO</label>
                                <input type="text" class="form-control" id="ahrpw_ref_no" name="ahrpw_ref_no">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">AHRPW DOC NO</label>
                                <input type="date" class="form-control" id="ahrpw_doc_no" name="ahrpw_doc_no">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">AHRPW REG NO</label>
                                <input type="text" class="form-control" id="ahrpw_reg_no" name="ahrpw_reg_no">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Id Issued Date</label>
                                <input type="date" class="form-control" id="id_issued_date" name="id_issued_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Id Delivered By</label>
                                <input type="date" class="form-control" id="id_delivered_date" name="id_delivered_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Id Collected On</label>
                                <input type="date" class="form-control" id="id_collected_date" name="id_collected_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Id Valid Upto</label>
                                <input type="date" class="form-control" id="id_valid_upto" name="id_valid_upto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reviews">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation">
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
<script>
  $(function() {

  $('#chkveg').multiselect({
    includeSelectAllOption: true
  });

  $('#btnget').click(function() {
    alert($('#chkveg').val());
  });
});
</script>
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
