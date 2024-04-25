<?php

$clergy_id = '';
$name = '';
$dob = '';
$gender = '';
$blood_group = '';
$uid_no = '';
$father_name = '';
$mother_name = '';
$marital_status = '';
$spouse_name = '';
$caste = '';
$religion = '';
$mobile_no = '';
$building_status = '';
$church_address = '';
$correspondent_address = '';
$intoduer_name = '';
$intro_mobile_no = '';
$fssai_reg_no = '';
$mic_no = '';
$police_station = '';
$ci_office = '';
$sub_reg_office = '';
$appli_received_date = '';
$received_document = '';
$remark = '';
$erid_ref_no = '';
$exa_date = '';
$grad_date = '';
$grad_for = '';
$ordi_date = '';
$ordi_for = '';
$intl_no = '';
$eridan = '';
$eri_remark = '';


if(!empty($blogdetailsinfo))
{
    foreach ($blogdetailsinfo as $uf)
    {
        $clergy_id = $uf->clergy_id;
        $name = $uf->name;
	      $dob = $uf->dob;
        $gender = $uf->gender;
        $blood_group = $uf->blood_group;
        $uid_no = $uf->uid_no;
		    $father_name = $uf->father_name;
        $mother_name = $uf->mother_name;
		    $marital_status = $uf->marital_status;
        $spouse_name = $uf->spouse_name;
        $caste = $uf->caste;
        $religion = $uf->religion;
        $mobile_no = $uf->mobile_no;
		    $building_status = $uf->building_status;
        $church_address = $uf->church_address;
		    $correspondent_address = $uf->correspondent_address;
        $intoduer_name = $uf->intoduer_name;
        $intro_mobile_no = $uf->intro_mobile_no;
        $fssai_reg_no = $uf->fssai_reg_no;
        $mic_no = $uf->mic_no;
		    $police_station = $uf->police_station;
		    $ci_office = $uf->ci_office;
		    $sub_reg_office = $uf->sub_reg_office;
		    $appli_received_date = $uf->appli_received_date;
		    $received_document = $uf->received_document;

		    $remark = $uf->remark;
		    $erid_ref_no = $uf->erid_ref_no;
		    $exa_date = $uf->exa_date;
		    $grad_date = $uf->grad_date;
		    $grad_for = $uf->grad_for;
		    $ordi_date = $uf->ordi_date;
		    $ordi_for = $uf->ordi_for;
		    $intl_no = $uf->intl_no;
		    $eridan = $uf->eridan;
		    $eri_remark = $uf->eri_remark;

    }
}
$received_document=explode(',', $received_document);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit Clergy Details
        
      </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Clergy Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
<?php
$host="localhost";//host name
$username="utqkdsjgz1ezi"; //database username
$word="dxrdkvr6rsvl";//database word
$db_name="dbzop7x90qlkp4";//database name
$tbl_name="add_clergy_details"; //table name
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string
if(isset($_POST["submit_btn"]))
{
$name = $_POST["name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$blood_group = $_POST["blood_group"];
$uid_no = $_POST["uid_no"];
$father_name = $_POST["father_name"];
$mother_name = $_POST["mother_name"];
$marital_status = $_POST["marital_status"];
$spouse_name = $_POST["spouse_name"];
$caste = $_POST["caste"];
$religion = $_POST["religion"];
$mobile_no = $_POST["mobile_no"];
$building_status = $_POST["building_status"];
$church_address = $_POST["church_address"];
$correspondent_address = $_POST["correspondent_address"];
$intoduer_name = $_POST["intoduer_name"];
$intro_mobile_no = $_POST["intro_mobile_no"];
$fssai_reg_no = $_POST["fssai_reg_no"];
$mic_no = $_POST["mic_no"];
$police_station = $_POST["police_station"];
$ci_office = $_POST["ci_office"];
$sub_reg_office = $_POST["sub_reg_office"];
$appli_received_date = $_POST["appli_received_date"];
$received_document = $_POST["received_document"];
$remark = $_POST["remark"];
$erid_ref_no = $_POST["erid_ref_no"];
$exa_date = $_POST["exa_date"];
$grad_date = $_POST["grad_date"];
$grad_for = $_POST["grad_for"];
$ordi_date = $_POST["ordi_date"];
$ordi_for = $_POST["ordi_for"];
$intl_no = $_POST["intl_no"];
$eridan = $_POST["eridan"];
$eri_remark = $_POST["eri_remark"];

$item="";
foreach($received_document as $item1){
$item .= $item1.",";
 }
 $sql = mysqli_query($con,"UPDATE add_clergy_details SET name = '$name',dob = '$dob',
 gender= '$gender',blood_group = '$blood_group',
uid_no = '$uid_no', father_name= '$father_name',mother_name = '$mother_name',
marital_status = '$marital_status', spouse_name= '$spouse_name',caste = '$caste',
religion = '$religion', mobile_no= '$mobile_no',building_status = '$building_status',
church_address = '$church_address', correspondent_address= '$correspondent_address',intoduer_name = '$intoduer_name',
intro_mobile_no = '$intro_mobile_no', fssai_reg_no= '$fssai_reg_no',mic_no = '$mic_no',police_station = '$police_station',
ci_office = '$ci_office',sub_reg_office = '$sub_reg_office',appli_received_date = '$appli_received_date',
received_document = '$item',remark = '$remark',erid_ref_no = '$erid_ref_no',
exa_date = '$exa_date',grad_date = '$grad_date',ordi_date = '$ordi_date',
ordi_for = '$ordi_for',intl_no = '$intl_no',eridan = '$eridan',eri_remark = '$eri_remark'
 WHERE clergy_id = '$clergy_id'");
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
                                   <input type="text" class="form-control required" value="<?php echo $name; ?>" id="name" name="name">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="reviews">Date Of Birth</label>
                                   <input type="date" class="form-control required" id="dob" value="<?php echo $dob; ?>" name="dob">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="level">Gender</label>
                                   <select class="form-control required" id="gender" name="gender">
                                     <option value="<?php echo $gender;?>" <?php if($gender == $gender) echo 'selected="selected" '; ?>><?php echo $gender;?></option>
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="level">Blood Group</label>
                                   <select class="form-control required" id="blood_group" name="blood_group">
                                     <option value="<?php echo $blood_group;?>" <?php if($blood_group == $blood_group) echo 'selected="selected" '; ?>><?php echo $blood_group;?></option>
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
                                   <input type="text" class="form-control required" id="uid_no" name="uid_no" value="<?php echo $uid_no; ?>">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="reviews">Father Name</label>
                                   <input type="text" class="form-control required" id="father_name" name="father_name" value="<?php echo $father_name; ?>">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="reviews">Mother Name</label>
                                   <input type="text" class="form-control required" id="mother_name" name="mother_name" value="<?php echo $mother_name; ?>">
                               </div>
                           </div>
                           <div class="col-md-6">
                           <div class="form-group">
                             <label for="reviews">Marital Status</label>
                           <select name="marital_status" class="form-control required" id="marital_status">
                             <option value="<?php echo $marital_status;?>" <?php if($marital_status == $marital_status) echo 'selected="selected" '; ?>><?php echo $marital_status;?></option>
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
                             <input type="text" class="form-control" id="spouse_name" name="spouse_name" value="<?php echo $spouse_name; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">caste</label>
                             <input type="text" class="form-control" id="caste" name="caste" value="<?php echo $caste; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                           <label for="reviews">Religion</label>
                           <select class="form-control dropdown" id="religion" name="religion">
                            <option value="<?php echo $religion;?>" <?php if($religion == $religion) echo 'selected="selected" '; ?>><?php echo $religion;?></option>
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
                             <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo $mobile_no; ?>">
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="level">Churh Building Status</label>
                             <select class="form-control required" id="building_status" name="building_status">
                               <option value="<?php echo $building_status;?>" <?php if($building_status == $building_status) echo 'selected="selected" '; ?>><?php echo $building_status;?></option>
                                 <option value="male">Own</option>
                                 <option value="rented">Rented</option>
                                 <option value="lease">Lease</option>
                             </select>
                         </div>
                     </div>
                     <div class="form-group col-md-6">
                    <label>Resident Address:</label>
                   <textarea name="church_address" id="rich-editor" class="form-control"><?php echo $church_address; ?></textarea>
                     </div>
                     <div class="form-group col-md-6">
                    <label>Currespondent Address:</label>
                   <textarea name="correspondent_address" id="rich-editor" class="form-control"><?php echo $correspondent_address; ?></textarea>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Name Of Introduer</label>
                             <input type="text" class="form-control" id="intoduer_name" name="intoduer_name" value="<?php echo $intoduer_name; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Introduer Mobile No</label>
                             <input type="text" class="form-control" id="intro_mobile_no" name="intro_mobile_no" value="<?php echo $intro_mobile_no; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">FSSAI Reg No</label>
                             <input type="text" class="form-control" id="fssai_reg_no" name="fssai_reg_no" value="<?php echo $fssai_reg_no; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Govt mic Order No</label>
                             <input type="text" class="form-control" id="mic_no" name="mic_no" value="<?php echo $mic_no; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Police Station</label>
                             <input type="text" class="form-control" id="police_station" name="police_station" value="<?php echo $police_station; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">CI Office</label>
                             <input type="text" class="form-control" id="ci_office" name="ci_office" value="<?php echo $ci_office; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Sub Register Office</label>
                             <input type="text" class="form-control" id="sub_reg_office" name="sub_reg_office" value="<?php echo $sub_reg_office; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Application Received Date</label>
                             <input type="date" class="form-control" id="appli_received_date" name="appli_received_date" value="<?php echo $appli_received_date; ?>">
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="form-group">
                           <fieldset>
                               <legend>Received Documents</legend>
                               <input type="checkbox" name="received_document[]" value="univ_application" <?php if (in_array('univ_application',$received_document)) echo "checked";?>>University Application<br>
                               <input type="checkbox" name="received_document[]" value="Appli_ordination" <?php if (in_array('Appli_ordination',$received_document)) echo "checked";?>>Application For Ordination<br>
                               <input type="checkbox" name="received_document[]" value="sslc_copy" <?php if (in_array('sslc_copy',$received_document)) echo "checked";?>>SSLC Copy<br>
                               <input type="checkbox" name="received_document[]" value="theo_certi" <?php if (in_array('theo_certi',$received_document)) echo "checked";?>>Theological Certificate<br>
                               <input type="checkbox" name="received_document[]" value="aadhar_copy" <?php if (in_array('aadhar_copy',$received_document)) echo "checked";?>>AAdhar Copy<br>
                               <input type="checkbox" name="received_document[]" value="ration_copy" <?php if (in_array('ration_copy',$received_document)) echo "checked";?>>Ration Card Copy<br>
                               <input type="checkbox" name="received_document[]" value="baptism_cert" <?php if (in_array('baptism_cert',$received_document)) echo "checked";?>>Baptism Certificate<br>
                               <input type="checkbox" name="received_document[]" value="marriage_copy" <?php if (in_array('marriage_copy',$received_document)) echo "checked";?>>Marriage Certificate<br>
                               <input type="checkbox" name="received_document[]" value="photo" <?php if (in_array('photo',$received_document)) echo "checked";?>>Photo<br>
                               <input type="checkbox" name="received_document[]" value="family_photo" <?php if (in_array('family_photo',$received_document)) echo "checked";?>>Family Photo<br>
                               <input type="checkbox" name="received_document[]" value="ministry_photo" <?php if (in_array('ministry_photo',$received_document)) echo "checked";?>>Ministry Photo<br>
                               <input type="checkbox" name="received_document[]" value="rec_ord" <?php if (in_array('rec_ord',$received_document)) echo "checked";?>>Recomendation For Ordination<br>
                               <input type="checkbox" name="received_document[]" value="rec_univ" <?php if (in_array('rec_univ',$received_document)) echo "checked";?>>Recomendation For University<br>
                               <input type="checkbox" name="received_document[]" value="self_deci" <?php if (in_array('self_deci',$received_document)) echo "checked";?>>Self Decision Letter<br>
                               <input type="checkbox" name="received_document[]" value="per_testimony" <?php if (in_array('per_testimony',$received_document)) echo "checked";?>>Personal Testimony<br>
                               <input type="checkbox" name="received_document[]" value="thesis" <?php if (in_array('thesis',$received_document)) echo "checked";?>>Thesis<br>
                               <br>
                           </fieldset>
                         </div>
                     </div>
                     <div class="form-group col-md-6">
                    <label>Remark</label>
                   <textarea name="remark" id="rich-editor" class="form-control"><?php echo $remark; ?></textarea>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">ERID Reference Number</label>
                             <input type="text" class="form-control" id="erid_ref_no" name="erid_ref_no" value="<?php echo $erid_ref_no; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Examination Date</label>
                             <input type="date" class="form-control" id="exa_date" name="exa_date" value="<?php echo $exa_date; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Graduation Date</label>
                             <input type="date" class="form-control" id="grad_date" name="grad_date" value="<?php echo $grad_date; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Graduation For</label>
                             <input type="text" class="form-control" id="grad_for" name="grad_for" value="<?php echo $grad_for; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Ordination Date</label>
                             <input type="date" class="form-control" id="ordi_date" name="ordi_date" value="<?php echo $ordi_date; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">Ordination For</label>
                             <input type="text" class="form-control" id="ordi_for" name="ordi_for" value="<?php echo $ordi_for; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">INTL No</label>
                             <input type="text" class="form-control" id="intl_no" name="intl_no" value="<?php echo $intl_no; ?>">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="reviews">ERIDAN</label>
                             <input type="text" class="form-control" id="eridan" name="eridan" value="<?php echo $eridan; ?>">
                         </div>
                     </div>
                     <div class="form-group col-md-6">
                    <label>ERi Remark</label>
                   <textarea name="eri_remark" id="rich-editor" class="form-control"><?php echo $eri_remark; ?></textarea>
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
