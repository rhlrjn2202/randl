<?php

$clergy_appli_id = '';
$control_no = '';
$referal_no = '';
$name = '';
$photo = '';
$appli_date = '';

if(!empty($blogdetailsinfo))
{
    foreach ($blogdetailsinfo as $uf)
    {
        $clergy_appli_id = $uf->clergy_appli_id;
        $control_no = $uf->control_no;
		$referal_no = $uf->referal_no;
        $name = $uf->name;
        $photo = $uf->photo;
        $appli_date = $uf->appli_date;

    }
}


?>
<div class='content-wrapper'>
  <section class='content'>

      <div class='row'>
          <!-- left column -->
          <div class='col-md-12'>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>

*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
h1{
    color:red;
    text-align: center;
}
h6{
    color:red;
    text-align: center;
}
img{
    align-items: flex-end;
}

.image{
    display: flex;
    justify-content: space-between;
    width: 180px;
    height:180px;
    overflow: visible;
    position:absolute;


}
.para1{

    position:absolute;
    padding-left: 250px;

}
.container {
margin-left: 100px;
font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
 .underline{

    height:9px;
    background-image: linear-gradient(red,black);
    box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
    position: relative;
    margin-top:40px;
}
h4{
    text-align: center;
    color: blue;
}

 em{
    color:rgb(223, 7, 7)

}
.para2 span em{
    line-height: 15px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.image2,.image2{
   margin-left: 100%;

}
#underline{
    text-decoration-line:red;
}
#Qrcode{
    display: flex;
    justify-content: space-between;
    width: 180px;
    height:180px;
    overflow: visible;
    position:absolute;

}
.head{
   color: red;
}
#YEL{
    color:blue;
}
.text-center{
    font-size:20px;
    color:red;
}

</style>
</head>
<body>
  <div class='container'>
  <div class='row'>
      <div class='col-4'>
      </div>
      <div class='col-4'>
      </div>
      <div align='right' class='col-4'>
          <p style='color:red;'><b><?php echo $control_no; ?></b></p>
      </div>
  </div>
<div class='row'>      
  <div class='col-8'>  
  <h1>Episcopal Revival International Diocese</h1>
  <h6>CERTIFIED BY GOVT.OF INDIA MINISTRY OF HOME AFFAIRES  UID –DL/2020/0266779</h6>
  <p class='para1'>The Anglican communion and Episcopal church of England<br>
      The Protestant Episcopal Church of England -1897<br>
      Church House, 22 Southcliff Road, Southampton S014, England, UK<br>
      PRCC 224-Ellison Road London, England, UK &<br>
      World Anglican Communion Churches, The World Episcopal Council of Bishop<br>
      Mangaram, PowdikonamP.O, Trivandrum kerala 695588 S-India<br>
      10A, Gautam Colony, Street No.2, Narela, Delhi-110040 India-North.
      </p>

   </div>
   <div class='col-4'>
   <img src='https://eridiocese.parishtome.com/gallery/sh_1621710762990.png'>
   </div>
</div>
<div class='row'>     
  <div class='col-12'>
   <h6 class='underline'></h6>
 </div>
</div>
<div class='row'> 
    <div class='col-12'>
     <span>  <h4>Application for Church , Priest/Ministry.AnglicanAffiliation,<br> Membership,Authorization, Episcopal Ordination & Marriage License (Christian marriage act 1872)</em><br>
     </h4><br>
   </div>
 </div>
 <div class='row'> 
     <div class='col-12'>

         <p class='para2'><span><em><b><h5>To,<br><br>
         The Archdiocese<br>
         Episcopal Revival International Diocese  Delhi-110040</b></em>
      </p>
        <p>
        Subject: Application for an<b> <em>AnglicanAffiliation, Authorization&Episcopal Ordination </em></b> of Ecclesiastical Authority to get the Episcopal <b><em>Marriage License</em></b> from the Synod of the<b> <em>Episcopal Revival International Diocese.<br></b>
        <b>Respected Archbishop,</b></em><br>
        With due respect, I beg to say that I would like to receive the.Affiliation, authorization and the ordination from the Synod of the <b> <em>Episcopal Revival International Diocese</em><br></b>
        1. I am working in an independent church as a Pastor. A group of people from different background have been gathered together on every Sunday to worship the Trion God in our Church.<br>
        2. My church is not affiliated or authorizedwith any denomination and also not having received the ordination from any authority of Episcopal Church. I am willing to follow the discipline of your organization in order to get the affiliation or authorization  and an Episcopal Ordination.
        <br>      3. I feel that the necessity of the Ecclesiastical Authority and License to Solemnize the Christian Marriage whenever it is required in our church.<br>
        4. Hereby, I make sure that I will serve the Lord without any type of support such as monthly salary or material support from authority of <b><em>ERI</em></b>. The full Bio-data of myself is attached herewith my application.<br>
        5. I will be very obliged and grateful to you, if you grant me the affiliation or authorization from the<b><em> Episcopal Revival International Diocese </em></b> and the ordination.<br>
        6. I was Baptized on <input type='text'>By<input type='text'><br></p>
      </div>
  </div>
<div class='row'>       
<div class='col-12'>
        <h5 class='head'>Personal Profile of the Applicant:</h5><br><br>
        1. Name  .<?php echo $name; ?> <br>
(AS GIVEN IN PASSPORT OR SCHOOL CERTIFICATE)<br>
2. Father’s Name <input type='text'><br>
3. Mother’s Name <input type='text'><br>
4. Date of Birth <input type='text'>      <br>Gender: Male  <input type='checkbox'>         Female<input type='checkbox'><br>
5. Marital Status:<br>	Married<input type='checkbox'>           Bachelor     <input type='checkbox'>           Spinster <input type='checkbox'><br>
6. Spouse’s Name <input type='text'><br>
7. Name of Children in the Family
<input type='text'><br>
8. Educational Qualification  <input type='text'><br>
9. Theological Qualification <input type='text'><br>
10. Experience in Church Ministry <input type='text'><br>
11. Religion <input type='text'> Caste <input type='text'><br>
12. CH/O: <input type='text'>
Pin Code<input type='text'> <br>
(b). Building Status   <input type='checkbox'>         		Own       <input type='checkbox'> Rented<br>

(c). Is your church registered?  Yes  <input type='checkbox'>   No <input type='checkbox'><br>
(d). If it is registered, registered as      Trust<input type='checkbox'> or Society <input type='checkbox'> <br>
(e). Total baptized members in your church <input type='text'><br>
(f). Total non baptized members in your church <input type='text'><br>

(g). Govt-Fssai Reg No <input type='text'><br>
(h). Govt-Mic Order Reg No <input type='text'><br>
13.  Any criminal case ?<input type='text'><br>
14. R/O
<input type='text'>Pin Code <input type='text'><br>
15. (a).UID. No <input type='text'><br>
(b). Mobile No <input type='text'><br>
(C). Blood group <input type='text'><br>
16. Email ID <input type='text'><br>
17. Personal identification marks (any two):<br>
(i). <input type='text'><br>
(ii). <input type='text'><br>
18. Marriage Sub-Registrar’s Office <input type='text'><br>
(a) CI office& Police station  <input type='text'><br>
(b) CH/Village <input type='text'><br>
(c) CH/Tehsil  <input type='text'><br>
19. Yours Ability in languages: <input type='text'><br><br>
I, <input type='text'> hereby declare that all the information furnished in this Application Form is true to the best<br> of my knowledge and also I solemnly affirm that I will abide by the<em> Indian Christian Marriage Act Rules and Regulations as well as <br>the directions of ERI Diocese</em><br>
Name: <input type='text'> Signature <input type='text'> <br>
<h5 class='head'>Oath of Covenant
</h5><br><br>
I,<em><?php echo $name; ?></em> would like to state that, I will be faithful in the ministries of <br>
God in every aspects of my life especially in the matter of money, avoidbad companionship or being touch with the<br>
case of prostitution with the females and committing criminal offence against the laws of the Government as well <br>
the norms of the Synod of<em>Episcopal Revival International Diocese</em> .I pledge that, I will return my affiliation and<br>
the ordination certificate to the respective authority, if the Synod and the affiliation committee find any guilt<br>
 against me. <br>
Place: <input type='text'>Date: <input type='text'><br><br>
Name: <input type='text'>	Signature <input type='text'><br><br>


Thumb<br><br>
I<input type='text'>UID<input type='text'> I, myself with full consciousness admit that, if any of the attached/submitted documents,<br>
identity proofs etc are found fake/fraud/illegal by the governing authority of Breakthrough International Bible Universityand <br>
theEpiscopal Revival International Diocese, then the application will be cancelled and the Ordination Charges, University fees, <br>
and other charges would not be returned.And I, Mr./Mrs./Ms<input type='text'> accept this with my full consciousnessand<br>
 in this regard I am ready to faceall legal actions of the above.<br><br>


Herewith I state that I am receiving the ordination without any compel or pressure from anyone. I am ready to do<br>
 Voluntary Service. I am ready to follow the laws and instructions respectively. And also I will pay the monthly<br>
  offering and yearly renewal charge without any dues.<br><br>
  
</div>
</div>
<div class='row'> 
  <div align='center' class='col-3'>
  </div>

  <div align='center' class='col-6'>
    <img src='https://eridiocese.parishtome.com/gallery/clergyform/<?php echo $photo; ?>' class='rounded mx-auto d-block' alt='...'>
  <p style='border-style: double;border-width: 6px;border-color: red;'><span style='color:red;font-weight:bold;'>ERI DIOCESE</span></br>
  <?php echo $name; ?></br>
  <?php echo $referal_no; ?></br>
</div>
<div class='col-3'>
</div>
</div>
<div class='row'> 
  <div class='col-3'>
  </div>
  <div align='center' class='col-6'>   
    For Office Use Only
  </div>
  <div class='col-3'>
  </div>
</div>
<div class='row'> 
  <div class='col-12'>   
  Ref. No. _<?php echo $referal_no; ?> Date…<?php echo $appli_date; ?>
<!-- <img src='Qrcode.png' class='rounded float-right' alt='...'> -->
<p>
1.	Pending any Document:<br>
2.	Checked by<br>
Introducer REV  .MKP SOMANATHAN<br>
Decision of <em>ERI Diocese </em>on this application:- Moderator or Archbishop</p><br>
</div>
</div>
<div class='row'>
    <div class='col-3'>
        <b>Districtbishop</b>
    </div>
    <div class='col-3'>
        <b>Statebishop</b>
    </div>
    <div class='col-3'>
        <b>Moderatorbishop</b>
    </div>
    <div class='col-3'>
        <b>Archbishop</b>
    </div>
</div>
  <br><br><br>
</span>
        </p>
  </div>
    </body>
    </html>
  </div>
  </div>
  </section>
</div>
<script src='<?php echo base_url(); ?>assets/js/editUser.js' type='text/javascript'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/common.js' charset='utf-8'></script>