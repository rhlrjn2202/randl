<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function userListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, Role.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'
                            OR  BaseTbl.name  LIKE '%".$searchText."%'
                            OR  BaseTbl.mobile  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function userListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, Role.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'
                            OR  BaseTbl.name  LIKE '%".$searchText."%'
                            OR  BaseTbl.mobile  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();

        return $query->result();
    }

    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email, $userId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_users");
        $this->db->where("email", $email);
        $this->db->where("isDeleted", 0);
        if($userId != 0){
            $this->db->where("userId !=", $userId);
        }
        $query = $this->db->get();

        return $query->result();
    }


    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewUser($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_users', $userInfo);

        $insert_id = $this->db->insert_id();

        $this->db->trans_complete();

        return $insert_id;
    }

    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfo($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
		$this->db->where('roleId !=', 1);
        $this->db->where('userId', $userId);
        $query = $this->db->get();

        return $query->result();
    }


    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editUser($userInfo, $userId)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);

        return TRUE;
    }



    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */

     function viewclergy_detailscount($searchText = '')
    {
      $this->db->select('clergy_id, name, dob, father_name, mother_name,gender,photo');
      $this->db->from('add_clergy_details');
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  father_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
            
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function view_clergy_applicationCount($searchText = '')
    {
      $this->db->select('clergy_appli_id, control_no, referal_no, name, appli_date,photo,application_for,status');
      $this->db->from('clergy_application_form');
        $this->db->where('status !=', 0);
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  referal_no  LIKE '%".$searchText."%'
                          OR  application_for  LIKE '%".$searchText."%'
                          OR  control_no  LIKE '%".$searchText."%')";
          $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }
    
     function user_view_clergy_applicationCount($searchText = '')
    {
      $this->db->select('clergy_appli_id, control_no, referal_no, name, appli_date,photo,application_for,status');
      $this->db->from('clergy_application_form');
        $this->db->where('status', 0);
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  referal_no  LIKE '%".$searchText."%'
                          OR  application_for  LIKE '%".$searchText."%'
                          OR  control_no  LIKE '%".$searchText."%')";
          $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }
     function edit_university_applicationCount($searchText = '')
    {
      $this->db->select('bible_app_id, referal_no, name, appli_date,photo,introducer,application_for,status');
      $this->db->from('bible_univ_app');
        $this->db->where('status', 0);
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  referal_no  LIKE '%".$searchText."%'
                          OR  application_for  LIKE '%".$searchText."%'
                          OR  control_no  LIKE '%".$searchText."%')";
          $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function view_bible_applicationCount($searchText = '')
    {
      $this->db->select('bible_app_id, referal_no, name, appli_date,photo,introducer,application_for,status');
      $this->db->from('bible_univ_app');
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  referal_no  LIKE '%".$searchText."%'
                          OR  introducer  LIKE '%".$searchText."%'
                          OR  application_for  LIKE '%".$searchText."%')";
          $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    function get_all_View_Income(){
        $this->db->select('*');

        $this->db->from('add_income');

        $this->db->order_by('income_id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }

    function get_all_ordination_report(){
        $this->db->select('*');

        $this->db->from('add_clergy_details');

        $this->db->order_by('clergy_id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }

     function view_nodue_applicationCount($searchText = '')
    {
      $this->db->select('nodue_id, name, intl_no, eridan_no,status');
      $this->db->from('nodue_application');
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  intl_no  LIKE '%".$searchText."%')";
          $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function view_bill_applicationCount($searchText = '')
    {
      $this->db->select('bill_id,name,date,receipt_no,amount,amount_inwords,status');
      $this->db->from('bill_application');
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  date  LIKE '%".$searchText."%')";
          $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function view_human_rights($searchText = '', $page, $segment)
    {
        $this->db->select('human_right_id, name, dob, father_name, mother_name,gender,photo');
        $this->db->from('add_human_rights');
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                            OR  father_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

     function view_baptismCount($searchText = '')
    {
      $this->db->select('*');
      $this->db->from('add_baptism');
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  father_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function view_human_rightscount($searchText = '')
    {
      $this->db->select('human_right_id, name, dob, father_name, mother_name,gender,photo');
      $this->db->from('add_human_rights');
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  father_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function viewclergy_details($searchText = '', $page, $segment)
    {
        $this->db->select('clergy_id, name, dob, father_name, mother_name,gender,photo');
        $this->db->from('add_clergy_details');
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                            OR  father_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

     function view_baptism($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('add_baptism');
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                            OR  father_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

     function view_clergy_application($searchText = '', $page, $segment)
    {
        $this->db->select('clergy_appli_id, control_no, referal_no, name, appli_date,photo,application_for,status');
        $this->db->from('clergy_application_form');
        $this->db->where('status !=', 0);
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                            OR  referal_no  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
     function user_view_clergy_application($searchText = '', $page, $segment)
    {
        $this->db->select('clergy_appli_id, control_no, referal_no, name, appli_date,photo,application_for,status');
        $this->db->from('clergy_application_form');
        $this->db->where('status', 0);
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                            OR  referal_no  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
    
     function edit_university_application($searchText = '', $page, $segment)
    {
      $this->db->select('bible_app_id, referal_no, name, appli_date,photo,introducer,application_for,status');
      $this->db->from('bible_univ_app');
        $this->db->where('status', 0);
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                            OR  referal_no  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

     function view_bible_application($searchText = '', $page, $segment)
    {
      $this->db->select('bible_app_id, referal_no, name, appli_date,photo,introducer,application_for,status');
      $this->db->from('bible_univ_app');
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                              OR  referal_no  LIKE '%".$searchText."%'
                              OR  introducer  LIKE '%".$searchText."%'
                              OR  application_for  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

     function view_nodue_application($searchText = '', $page, $segment)
    {
      $this->db->select('nodue_id, name, intl_no, eridan_no,status');
      $this->db->from('nodue_application');
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  intl_no  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }
     function view_bill_application($searchText = '', $page, $segment)
    {
      $this->db->select('bill_id,name,date,receipt_no,amount,amount_inwords,status');
      $this->db->from('bill_application');
      if(!empty($searchText)) {
          $likeCriteria = "(name  LIKE '%".$searchText."%'
                          OR  date  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	   function viewblogCount($searchText = '')
    {
        $this->db->select('techupdates_id, blog_title, blog_image, blog_details');
        $this->db->from('Add_techupdates');
        if(!empty($searchText)) {
            $likeCriteria = "(blog_title  LIKE '%".$searchText."%'
                            OR  blog_details  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function viewblog($searchText = '', $page, $segment)
    {
        $this->db->select('techupdates_id, blog_title, blog_image, blog_details');
        $this->db->from('Add_techupdates');
        if(!empty($searchText)) {
            $likeCriteria = "(blog_title  LIKE '%".$searchText."%'
                            OR  blog_details  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }


	function viewhomeslideCount($searchText = '')
    {
        $this->db->select('gallery_id, gallery_image');
        $this->db->from('carousel_gallery');

        $query = $this->db->get();

        return count($query->result());
    }

     function viewhomeslide($searchText = '', $page, $segment)
    {
        $this->db->select('gallery_id, gallery_image');
        $this->db->from('carousel_gallery');

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	 function viewmanufacturesCount($searchText = '')
    {
        $this->db->select('manufacturers_id, manufacturers_name, Manufacturers_image, Basic_product_details,top_list,product_name1,product_name2,product_name3,product_name4,product_name5,product_name6,product_name7,product_name8,product_name9,product_name10,product_name11,product_name12,product_name13,product_name14,product_name15');
        $this->db->from('Add_manufacturers');
        if(!empty($searchText)) {
            $likeCriteria = "(manufacturers_name  LIKE '%".$searchText."%'
                            OR  Basic_product_details  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function viewmanufactures($searchText = '', $page, $segment)
    {
         $this->db->select('manufacturers_id, manufacturers_name, Manufacturers_image, Basic_product_details,top_list,product_name1,product_name2,product_name3,product_name4,product_name5,product_name6,product_name7,product_name8,product_name9,product_name10,product_name11,product_name12,product_name13,product_name14,product_name15');
        $this->db->from('Add_manufacturers');
        if(!empty($searchText)) {
            $likeCriteria = "(manufacturers_name  LIKE '%".$searchText."%'
                            OR  Basic_product_details  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }


	function viewcontactusCount($searchText = '')
    {
        $this->db->select('contact_id, name, email, phone_number,message');
        $this->db->from('contactUs');
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                            OR  phone_number  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function viewcontactus($searchText = '', $page, $segment)
    {
         $this->db->select('contact_id, name, email, phone_number,message');
        $this->db->from('contactUs');
        if(!empty($searchText)) {
            $likeCriteria = "(name  LIKE '%".$searchText."%'
                            OR  phone_number  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }


function viewmanufacturesregCount($searchText = '')
    {
        $this->db->select('contact_id, manufacture_name, contact_details, logo_image,product_dis,about_details,email,phone_no,address');
        $this->db->from('contact_us');
        if(!empty($searchText)) {
            $likeCriteria = "(manufacture_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

     function viewmanufacturesreg($searchText = '', $page, $segment)
    {
         $this->db->select('contact_id, manufacture_name, contact_details, logo_image,product_dis,about_details,email,phone_no,address');
        $this->db->from('contact_us');
        if(!empty($searchText)) {
            $likeCriteria = "(manufacture_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }


	function getcbseInfo($cbse_id)
    {
        $this->db->select('*');
        $this->db->from('Add_product');


        $this->db->where('product_id', $cbse_id);
        $query = $this->db->get();

        return $query->result();
    }

	 function getmanufacturersInfo($manufacturers_id)
    {
        $this->db->select('*');
        $this->db->from('Add_manufacturers');


        $this->db->where('manufacturers_id', $manufacturers_id);
        $query = $this->db->get();

        return $query->result();
    }

    function getclergydetailsInfo($clergy_id)
     {
         $this->db->select('*');
         $this->db->from('add_clergy_details');


         $this->db->where('clergy_id', $clergy_id);
         $query = $this->db->get();

         return $query->result();
     }

     function getclergyapplicationInfo($clergy_appli_id)
      {

        $this->db->where('clergy_appli_id', $clergy_appli_id);
        $data = $this->db->get('clergy_application_form');

             $output = '<div class="content-wrapper">
               <section class="content">

                   <div class="row">
                       <!-- left col-smumn -->
                       <div class="col-sm-12">
             <!DOCTYPE html>
             <html lang="en">
             <head>
                 <meta charset="UTF-8">
                 <meta http-equiv="X-UA-Compatible" content="IE=edge">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">

                 <style>

            body{
              font-family: "Beau Rivage", cursive;
            }
              .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    border:0;
    padding:0;
}
             h1{
                 color:#990012;
                 text-align: center;
             }
             h6{
                 color:#990012;
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
                 word-spacing: 4px;
                 line-height: 150%;
             }
             .container {
             margin-left: 90px;
             font-family:"Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
             }
              .underline{

                 height:9px;
                 background-image: linear-gradient(#990012,black);
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
                 font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
             }
             .image2,.image2{
                margin-left: 100%;
             }

             #underline{
                 text-decoration-line:#990012;
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
                color: #990012;
             }
             #YEL{
                 color:blue;
             }
             .text-center{

                 color:#990012;
             }
             p{
               font-size:16px;
               word-spacing: 4px;
               line-height: 150%;
             }
             .td-25{
            width: 25%;
              }
              .td-50{
                  width: 50%;
              }
              .td-75{
                  width: 75%;
              }
              .td-100{
                  width: 100%;
              }

       @font-face {
           font-family: "source_sans_proregular";
           src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
           font-weight: normal;
           font-style: normal;

       }
       body{
           font-family: "source_sans_proregular", Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;
       }
    @page {margin: 6mm 0mm 0mm 0mm;}

             </style>
             </head>
             <body>
               <div class="row" >
                   <div class="col-sm-4">
                   </div>
                   <div class="col-sm-4">
                   </div>
                   <div align="right" class="col-sm-4">';

                   foreach($data->result() as $row)
                   {
                     $output .= '
                       <p style="color:#990012;margin-right:5%;font-size:12px;"><b>ERID/CON/'.$row->control_no.'</b></p>
                   </div>
               </div>
             <div class="row" style="margin-left:7%;font-size:12px;">
               <div class="col-sm-12" style="line-height: 150%;word-spacing: 4px;">
               <table>
               <tbody>
               <tr >
                  <td class="td-100" align="center">
                  <div align="center">
                    <img src="https://eridiocese.parishtome.com/gallery/clergy_header.png" style="width:680px;height:170px;margin-top:-1%;">
                    </div>
                  </td>
                  </tr>
                  </tbody>
                  </table>
                </div>
             </div>
             <div class="row" style="margin-left:7%;font-size:12px;">
                 <div class="col-sm-12">
                 <h4 style="line-height: 150%;word-spacing: 4px;">Application for '.$row->application_for.'. Anglican Affiliation,<br> Membership,Authorization,Episcopal Ordination & Marriage License (Christian marriage act 1872)<br><br>
                  </h4>
                </div>
              </div>
              <div class="row" style="margin-left:7%;font-size:12px;">
                  <div class="col-sm-12" style="margin-right:8%;font-size:12px;">
                      <p style="font-size:12px;"><span><em><b><h>To,<br>
                      The Archdiocese<br>
                      Episcopal Revival International Diocese  Delhi-110040</b></em>
                      <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" style="width:85px;height:100px;margin-top:-4%;margin-left:83%;" class="rounded mx-auto d-block" alt="...">                  
                   </p>
                     <p style="line-height: 200%;word-spacing: 4px;margin-top:2%;margin-bottom:2%;font-size:12px;">
                     Subject: Application for an<b> <em>Anglican Affiliation,Authorization & Episcopal Ordination </em></b> of Ecclesiastical Authority to get the Episcopal <b><em>Marriage License</em></b> from the Synod of the<b> <em>Episcopal Revival International Diocese.<br></b><br>
                     <b>Respected Archbishop,</b></em><br><br>
                     With due respect, I beg to say that I would like to receive the Affiliation, authorization and the ordination from the Synod of the Episcopal Revival International Diocese</p>
                     <p style="margin-top:3%;margin-bottom:3%;font-size:12px;">1. I am working in an independent church as a Pastor. A group of people from different background have been gathered together on every Sunday to worship the Trion God in our Church.</p>
                     <p style="margin-top:3%;margin-bottom:3%;font-size:12px;">2. My church is not affiliated or authorized with any denomination and also not having received the ordination from any authority of Episcopal Church. I am willing to follow the discipline of your organization in order to get the affiliation or authorization  and an Episcopal Ordination.
                      </p>
                     <p style="margin-top:3%;margin-bottom:3%;font-size:12px;">3. I feel that the necessity of the Ecclesiastical Authority and License to Solemnize the Christian Marriage whenever it is required in our church.</p>
                     <p style="margin-top:3%;margin-bottom:3%;font-size:12px;">4. Hereby, I make sure that I will serve the Lord without any type of support such as monthly salary or material support from authority of <b><em>ERI</em></b>. The full Bio-data of myself is attached herewith my application.</p>
                     <p style="margin-top:3%;margin-bottom:3%;font-size:12px;font-family: "Beau Rivage", cursive;">5. I will be very obliged and grateful to you, if you grant me the affiliation or authorization from the<b><em> Episcopal Revival International Diocese </em></b> and the ordination.</p>
                     <p style="margin-top:3%;margin-bottom:3%;font-size:12px;font-family: "Beau Rivage", cursive;">6. I was Baptized on <input type="text">By<input type="text"></p>
                   </div>
               </div>

                  <div align="right" style="page-break-after: always;">
                    <img src="https://eridiocese.parishtome.com/gallery/ang.png" style="width:80px;height:70px;margin-top:-1%;">
                    </div>
                
               <br/>
             <div class="row" style="margin-left:7%;font-size:12px;">
             <div class="col-sm-12" style="margin-right:8%;font-size:12px;">
                     <h3 class="head" style="line-height: 150%;word-spacing: 4px;margin-bottom:2%;text-align:center;">Personal Profile of the Applicant:</h3></br>
                    <p style="line-height: 150%;word-spacing: 4px;font-size:12px;width:101%;"> 1. Name  <span style="color:blue;">'.$row->name.'</span>
            <br><br>
             2. Father’s Name ...........................................................................................................................................................................<br><br>
             3. Mother’s Name ..........................................................................................................................................................................<br><br>
             4. Date of Birth .............................................................................................................................................................................<br><br>
             5. Gender: Male .........................................................................  Female.....................................................................................<br><br>
             6. Marital Status:	Married.......................................   Bachelor ....................................... Spinster ............................................<br><br>
             7. Spouse’s Name ........................................................................................................................................................................<br><br>
             8. Name of Children in the Family ...........................................................................................................................................<br><br>
             9. Educational Qualification  ...........................................................................................................................................................<br><br>
             10. Theological Qualification .........................................................................................................................................................<br><br>
             11. Experience in Church Ministry ..............................................................................................................................................<br><br>
             12. Religion .................................................................................. Caste .....................................................................................<br><br>
             13. CH/O: .......................................................................................................................................................................................<br><br>
             .......................................................................................................................................................
             Pin Code ............................ <br><br>
             (b). Building Status ...................................	Own ......................................................Rented........................................................<br><br>

             (c). Is your church registered? Yes  ..........................................   No ..................................................<br><br>
             (d). If it is registered, registered as      Trust ............................................................... or Society .......................................... <br><br>
             (e). Total baptized members in your church .............................................................................................................................<br><br>
             (f). Total non baptized members in your church ......................................................................................................................<br><br>

             (g). Govt-Fssai Reg No ...............................................................................................................................................................<br><br>
             (h). Govt-Mic Order Reg No ........................................................................................................................................................<br><br>
             14.  Any criminal case ?................................................................................................................................................................<br><br>
             15. R/O ..........................................................................................................................................................................................<br><br>
             .....................................................................................................................................................
             Pin Code ................................<br><br>
             <div align="right" style="page-break-after: always;">
             <img src="https://eridiocese.parishtome.com/gallery/ang.png" style="width:80px;height:70px;margin-top:-1%;">
             </div>
             16. (a).UID. No .............................................................................................................................................................................<br><br>
             (b). Mobile No ...............................................................................................................................................................................<br><br>
             (C). Blood group ...........................................................................................................................................................................<br><br>
             17. Email ID .................................................................................................................................................................................<br><br>
             18. Personal identification marks (any two):<br><br>
             (i). .....................................................................................................................................................................................................<br><br>
             (ii). ...................................................................................................................................................................................................<br><br>
             19. Marriage Sub-Registrar’s Office ............................................................................................................................................<br><br>
             (a) CI office& Police station  ........................................................................................................................................................<br><br>
             (b) CH/Village .................................................................................................................................................................................<br><br>
             (c) CH/Tehsil  ...................................................................................................................................................................................<br><br>
             20. Yours Ability in languages: ....................................................................................................................................................<br><br>
              </p>
            <p style="line-height: 200%;word-spacing: 4px;font-size:12px;width:101%;">
             I, .....................................................................................hereby declare that all the information furnished in this Application Form is true to the best of my knowledge and also I solemnly affirm that I will abide by the Indian Christian Marriage Act Rules and Regulations as well as the directions of ERI Diocese
             Name: .................................. Signature ......................................... <br>
            </p>
             <h3 class="head" style="line-height: 200%;word-spacing: 4px;margin-top:2%;text-align:center;">Oath of Covenant
             </h3><br><br>
             <p style="line-height: 200%;word-spacing: 4px;font-size:12px;width:101%;">I, '.$row->name.' would like to state that, I will be faithful in the ministries of
             God in every aspects of my life especially in the matter of money, avoidbad companionship or being touch with the
             case of prostitution with the females and committing criminal offence against the laws of the Government as well
             the norms of the Synod of Episcopal Revival International Diocese.I pledge that, I will return my affiliation and
             the ordination certificate to the respective authority, if the Synod and the affiliation committee find any guilt
              against me. <br>

             Place: ....................................................  <span style="text-align:right;">Date: ..........................................................</span><br><br>
             Name: ........................................................	<span style="text-align:right;">Signature ......................................................</span><br><br>


             Thumb</p><br><br>
             <div align="right" style="page-break-after: always;">
             <img src="https://eridiocese.parishtome.com/gallery/ang.png" style="width:80px;height:70px;margin-top:-2%;">
             </div>
             <p style="line-height: 200%;word-spacing: 4px;font-size:12px;width:101%;">I........................................................................UID......................................................... I, myself with full consciousness admit that, if any of the attached/submitted documents,
             identity proofs etc are found fake/fraud/illegal by the governing authority of Breakthrough International Bible University and
             the Episcopal Revival International Diocese, then the application will be cancelled and the Ordination Charges, University fees,
             and other charges would not be returned.And I, Mr./Mrs./Ms................................................................. accept this with my full consciousnessand
              in this regard I am ready to faceall legal actions of the above.<br>


             Here with I state that I am receiving the ordination without any compel or pressure from anyone. I am ready to do
              Voluntary Service. I am ready to follow the laws and instructions respectively. And also I will pay the monthly
               offering and yearly renewal charge without any dues.</p><br>

             </div>
             </div>
            
             <div class="row" style="margin-left:7%;font-size:12px;">
               <div align="center" class="col-sm-3" style="margin-right:8%;">
               </div>

               <div align="center">
               <div >
                 <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" style="width:200px;height:250px;" class="rounded mx-auto d-block" alt="...">
                 </div>
                 <div align="center" class="col-sm-6" style="border-style: double;border-width: 6px;border-color: #990012;width:90%;">
               <h4><span style="color:#990012;font-weight:bold;">ERI DIOCESE</span></br></h4>
               <h4>'.$row->name.'</br></h4>
               <h4>'.$row->referal_no.'</br></h4>
             </div>
             </div>

             <div class="col-sm-3">
             </div>
             </div>
             <div class="row">
               <div class="col-sm-3">
               </div>
                <br> <br>
               <div align="center" class="col-sm-6" style="margin-top:2%;margin-bottom:2%;">
                 For Office Use Only
               </div>
               <div class="col-sm-3">
               </div>
             </div>
             <div class="row" style="margin-left:7%;font-size:12px;">
               <div class="col-sm-12" style="margin-right:8%;font-size:12px;">
               Ref. No. _'.$row->referal_no.' Date…'.$row->appli_date.'
             <p style="margin-top:4%;margin-bottom:2%;font-size:12px;">
             1.	Pending any Document:<br>
             2.	Checked by<br>
             Introducer '.$row->introducer.'<br>
             Decision of <em>ERI Diocese </em>on this application:- Moderator or Archbishop</p><br>
             </div>
             </div>
             <br> <br>
             <table class="table-borderless" style="width:100%;">
              <tbody>
                <tr>
                       <td class="td-25" align="center">
                           District Bishop<br><br>
                           <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->districtbishop_logo.'" style="width:75px;height:70px;" class="rounded mx-auto d-block" alt="...">
                       </td>
                       <td class="td-25" align="center">
                           State Bishop<br><br>
                           <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->statebishop_logo.'" style="width:75px;height:70px;" class="rounded mx-auto d-block" alt="...">
                       </td>
                       <td class="td-25" align="center">
                           Moderator Bishop<br><br>
                           <img src="https://eridiocese.parishtome.com/gallery/bishop sam peter(1).png" style="width:75px;height:70px;" class="rounded mx-auto d-block" alt="...">
                       </td>
                       <td class="td-25" align="center">
                           Arch Bishop<br><br>
                           <img src="https://eridiocese.parishtome.com/gallery/archbishop(1).png" style="width:75px;height:70px;" class="rounded mx-auto d-block" alt="...">
                       </td>
                   </tr>
                   
                 </tbody>
               </table>
               <br>
               <div align="right">
                 <img src="https://eridiocese.parishtome.com/gallery/ang.png" style="width:80px;height:70px;margin-bottom:5%;">
                 </div>
               
             </span>
                     </p>
                 </body>
                 </html>
               </div>
               </div>
               </section>
             </div>
             <script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>
             <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>';
             return $output;
      }
    }

    function getbibleapplicationInfo($bible_app_id)
     {

       $this->db->where('bible_app_id', $bible_app_id);
       $data = $this->db->get('bible_univ_app');
       foreach($data->result() as $row)
       {
            $output = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>university application</title>
                <style>

                *{
                    margin: 0px;
                    padding: 0px;
                    box-sizing: border-box;
                }

                 .underline{

                    height:13px;
                    background-image: linear-gradient(#990012,black);
                    box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
                    margin-top:10px;
                    position: relative;
                 }
                 em{
                     color: blue;
                 }
                 .td-25{
                width: 25%;
                  }
                  .td-50{
                      width: 50%;
                  }
                  .td-75{
                      width: 75%;
                  }
                  .td-100{
                      width: 100%;
                  }
                </style>
            </head>
            <body>
                  <table class="table-borderless">
                   <tbody>
                   <tr >
                      <td class="td-100" align="center">
                      <div align="center">
                        <img src="https://eridiocese.parishtome.com/gallery/logo.jpeg" style="width:720px;height:180px;margin-left:5%;">
                        </div>
                      </td>
                      </tr>
                        <tr>
                               <td class="td-100" align="center">
                               <div align="center" style="color:#990012;margin-left:6%;margin-top:2%;">
                                <h4 > APPLICATION FOR '.$row->application_for.'</h4>
                                <div>
                               </td>
                        </tr>
                        <tr>
                               <td class="td-100" align="center">
                               <div align="right" style="margin-right:8%;">
                                   <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" style="width:130px;height:140px;margin-top:-3%;" >
                                </div>
                               </td>
                           </tr>
                           <tr >
                              <td class="td-100">
                                <div style="margin-left:8%;font-size:12px;line-height: 150%;word-spacing: 4px;width:101%;"> 1.	Name  ..<b>'.$row->name.'

                                    <br><br>
                                    2.	Father’s Name  ............................................................................................................................................................................<br><br>
                                    3. Mother’s Name  ............................................................................................................................................................................<br><br>
                                    4. Date of Birth  ...............................................................................................................................................................................<br><br>
                                    5. Gender: Male  ........................................................................ Female ......................................................................................<br><br>
                                    6. Marital Status: 	Married .......................................  Bachelor .....................................  Spinster ...............................................<br><br>
                                    7. Spouse’s Name  ...........................................................................................................................................................................<br><br>
                                    8.	Educational Qualification  .............................................................................................................................................................<br><br>
                                    9. 	UID No .........................................................................................................................................................................................<br><br>
                                    10.	Position in the Church   .............................................................................................................................................................<br><br>
                                    11.	Ministry Training details ............................................................................................................................................................<br><br>
                                    12.	Number of year in Ministry experience  ..................................................................................................................................<br><br>
                                    13.	What type of ministerial gift do you have? ...........................................................................................................................<br><br>
                                    14. Present Occupation  .....................................................................................................................................................................<br><br>
                                    15. R/O  .............................................................................................................................................................................................<br><br>
                                        ...........................................................................................................................................................................................................<br><br>
                                        Village ............................................................................................ Taluk ....................................................................................  <br><br>
                                      District .........................................................................  State ............................................................................................................ <br><br>
                                      Pin Code ............................................................................................................................................................................................  <br><br>
                                    16.(a)   Mobile No.  ...............................................................................................................................................................................  <br><br>
                                    (b)  E. mail  ............................................................................................................................................................................................ <br><br>

                                    </div>
                              </td>
                              </tr>

                                 <tr>
                                        <td class="td-100" align="center" style="margin-left:8%;">
                                        <div style="margin-left:8%;font-size:12px;margin-top:4%;">

                                            PLEASE NOTE <br><br>
                                            a)	Candidate must attach the photocopies
                                            (Xerox Copies) of Certificates or all documents to support the information which <br> is furnished above.<br><br>
                                        </div>
                                        <div align="center">
                                          <h4 style="color:#990012;margin-left:10%;"> <u>   DECLARATION</u></h4>
                                          </div>
                                        </td>

                                    </tr>
                                    <tr>
                                     <td class="td-100" align="right">

                                        <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" style="width:80px;height:90px;margin-top: 25px;margin-right:15%;" >
                                    </td>
                                </tr>
                                    <tr >
                                       <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                         <div style="margin-left:8%;font-size:12px;width:101%;"> Name '.$row->name.'........
                                          would like to state that. I will be faithful in the ministries
                                           of God in every <br>aspects of my life especially in the matter of money, avoid bad companionship or
                                           being touch with the case<br> of prostitution with the females, gay sex and committing criminal offence
                                           against the laws of the a government<br> as well as the norms of the synod of Episcopal Revival International
                                             Diocese. I pledge that, I will return my<br> Affiliation, Ordination Certificate, Identity card and Marriage
                                             license to the respective authority, if the Synod and<br> the affiliation committee find any guilt in me and my ministry<br><br>

                                             </div>
                                       </td>
                                       </tr>

                           <tr >
                              <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                <div style="margin-left:8%;margin-top:2%;margin-bottom:2%;font-size:12px;width:101%;">  Name ..................................................................................................  Place .................................................................................. <br></br>
                                  Date ..................................................................................  Signature .............................................................................................

                                    </div>
                              </td>
                              </tr>
                              <tr>
                                     <td class="td-100" align="center">
                                     <div align="center" style="color:#990012;margin-left:6%;margin-top:2%;">
                                      <h4 > For Office Use Only</h4><br>
                                      <div>
                                     </td>
                              </tr>
                              <tr style="margin-top:4%;margin-bottom:2%;">
                                 <td class="td-100">
                                 <div style="margin-left:8%;color:#990012;font-size:12px;width:101%;"> Date…'.$row->appli_date.'
                                 <span style="margin-left:56%;">Ref. No. _'.$row->referal_no.'</span>
                                     </div>
                                 </td>
                                </tr>

                              <tr >
                                 <td class="td-100">
                                   <div style="margin-left:8%;margin-bottom:8%;line-height: 150%;word-spacing: 4px;font-size:12px;width:101%;margin-bottom:2%;">    1.	Pending any Document   <br><br>

                                     2.	Checked by <br><br>
                                     3.	Decision of  BIBU <br><br>
                                     4.	Introducer, '.$row->introducer.'

                                       </div>
                                 </td>

                                 </tr>
                                
                                 <tr style="margin-top:4%;margin-bottom:2%;">
                                    <td class="td-100">
                                    <div style="margin-left:8%;color:blue;font-size:12px;width:101%;">
                                    <br>
                                    <br>
                          
                                        </div>
                                    </td>
                                    </tr >
                                 
                                 <tr style="margin-top:4%;margin-bottom:2%;">
                                    <td class="td-100">
                                    <div style="margin-left:8%;color:blue;font-size:12px;width:101%;"> The Rt .Rev. Dr .Sampeter
                                    <span style="margin-left:46%;">The Most Rev Dr .Venugopalan</span><br>
                                  
                                        </div>
                                    </td>
                                    </tr >
                                 <tr style="margin-top:4%;margin-bottom:2%;">
                                    <td class="td-100">
                                    <div style="margin-left:8%;color:blue;font-size:12px;width:101%;">India Director(BIBU)
                                    <span style="margin-left:54%;">  Asia Director(BIBU)</span>
                                        </div>
                                    </td>
                                    </tr >
                                 <tr style="margin-top:2%;margin-bottom:2%;">
                                    <td class="td-100">
                                    <div style="margin-left:8%;color:blue;font-size:12px;width:101%;">  <img src="https://eridiocese.parishtome.com/gallery/bishop sam peter(1).png" style="width:75px;height:70px;margin-top:1%;margin-left:2%;" class="rounded mx-auto d-block" alt="...">
                                    <span style="margin-left:54%;">    <img src="https://eridiocese.parishtome.com/gallery/archbishop(1).png" style="width:75px;height:70px;margin-top:1%;margin-left:6%;" class="rounded mx-auto d-block" alt="...">
                                </span>
                                        </div>
                                    </td>
                                    </tr >

                    </tbody>
                </table>

            </body>
            </html>';
          }
            return $output;

   }

    function getbaptismInfo($baptism_id)
     {

       $this->db->where('baptism_id', $baptism_id);
       $data = $this->db->get('add_baptism');
       foreach($data->result() as $row)
       {
         if($row->type=='baptism')
          {
            $output = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>AFFIDAVIT FOR BAPTISM</title>

                <style>

                *{
                    margin: 0px;
                    padding: 0px;
                    box-sizing: border-box;
                }

                 .underline{

                    height:13px;
                    background-image: linear-gradient(#990012,black);
                    box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
                    margin-top:10px;
                    position: relative;
                 }
                 em{
                     color: blue;
                 }
                 .td-25{
                width: 25%;
                  }
                  .td-50{
                      width: 50%;
                  }
                  .td-75{
                      width: 75%;
                  }
                  .td-100{
                      width: 100%;
                  }

                </style>
            </head>
            <body>
                  <table class="table-borderless" style="width:100%;">
                   <tbody>
                   <tr>
                          <td class="td-100" align="center">  
                          <div style="width:25%;float:left;margin-left:3%;margin-top:2%;font-size:12px;">
                                   <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" class="rounded float-right" style="width:90px;height:90px;" >
                                   <h2 style="border-top-style: solid;border-top:8px solid #990012;width:410%;margin-left:30%;"> </h2>
                          </div>
                          <div style="width:75%;float:left;font-size:12px;margin-top:2%;margin-bottom:2%;" align="center">
                                <h2 style="color:#990012;"> <b>'.$row->title.'<br></b></h2>
                                <h4 style="color:black;">'.$row->address.'</h4>
                                <u><h5 style="color:#990012";>Anglican Priest Reg No: '.$row->reg_no.'</h5></u><br><br>
                                
                          </div>
                          
                         </td>
                         </tr>
                                          
                        <tr> 

                               <td class="td-75" align="center" style="color:#990012;">
                               <div align="center" style="margin-top:2%;margin-bottom:2%;margin-left:25%;">
                               <br>
                                <h4> AFFIDAVIT FOR BAPTISM</h4>
                                </div>
                               </td>
                               <td class="td-25">

                               </td>
                           </tr>
                           <tr >
                              <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                <div style="margin-left:15%;line-height: 150%;word-spacing: 4px;font-size:12px;width:105%;">
                                I. Name of believer	:	……………………………………………………………………………………………………………...<br>
                                II. Male/Female      : ……………………………………………………………………………………………………………........... <br>
                                III. Father’s/Husband’s Name:……………………………………………………………………………………………………...<br>
                                IV. Date of Birth & Age	:	……………………………………				Age: ………………………………………………………….	  <br>
                                V. R/O  :...........…………………………………………………………....................………………………………………………  <br>
                                          …………………………………………………………………………………………………………………………………………... <br>
                                          ………………………………………………………………….....................………………………..………………………………..  <br>
                                          VI. Contact No :  ……………………………………………………………………………………………………………………. <br>
                                          VII. UID No    :  ……………………………………………………………………………………………………………………….. <br>
                                          VIII. Native Place  :	…………………………………………………………………………………………………………………. <br>
                                          IX. Educational Qualification: ……………………………………………………………………………………………………… <br>
                                          X. Occupation & Name of the employer:	………………………………….………………………………………………….. <br>
                                </div>
                          </td>
                          </tr>

                          <tr >
                             <td class="td-100" style="line-height: 150%;word-spacing: 4px;">

                                <div align="center" style="margin-top:2%;margin-bottom:2%;margin-left:25%;">
                                <h4  style="color:#990012;">DECLARATION</h4>
                                </div>
                              </td>
                              </tr>
                              <tr >
                                 <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                   <div style="margin-left:15%;line-height: 150%;word-spacing: 4px;width:102%;margin-bottom:1%;font-size:12px;text-align:justify;">
                                   <p >I, ……………………………………………… residing in the above mentioned address and in my conscious hereby I declare that I have gained faith in true God and accepted Jesus Christ as my personal Savior and Lord after hearing the word of God. And I decided to take baptism according to the word of God.<br></p><br>
    <p>I herewith declare that no one forced me to take baptism where as I decided with full of my conscious without expecting any type of materialistic benefits and financial aid from the Church or from anyone.</p>
    </div>
</td>
</tr>                        

                    </tbody>
                </table>
<br><br>
                <div style="width:60%;float:left;">
                        <p style="margin-left:21%;font-size:12px;">Name of witness:</p><br>
                        <p style="margin-left:21%;font-size:12px;">………………………………………….</p><br><br>
                        <p style="margin-left:21%;font-size:12px;">Signature: ………………………………</p>
                </div>
                <div style="width:39%;float:left;">
                        <p style="margin-left:30%;font-size:12px;">Place……………<br><br><br></p>
                        <p style="margin-left:30%;font-size:12px;">Sign of believer</p><br><br>
                        <p style="margin-left:30%;font-size:12px;">Date……………</p>
                </div>

            </body>
            </html>';
          }
          else if($row->type=='marriage')
           {
             $output = '<!DOCTYPE html>
             <html lang="en">
             <head>
                 <meta charset="UTF-8">
                 <meta http-equiv="X-UA-Compatible" content="IE=edge">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <title>Marriage application</title>
                 <style>

                 *{
                     margin: 0px;
                     padding: 0px;
                     box-sizing: border-box;
                 }

                  .underline{

                     height:13px;
                     background-image: linear-gradient(#990012,black);
                     box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
                     margin-top:10px;
                     position: relative;
                  }
                  em{
                      color: blue;
                  }
                  .td-25{
                 width: 25%;
                   }
                   .td-50{
                       width: 50%;
                   }
                   .td-75{
                       width: 75%;
                   }
                   .td-100{
                       width: 100%;
                   }
                 </style>
             </head>
             <body>
                   <table class="table-borderless" style="width:100%;">
                    <tbody>
                    <tr>
                           <td class="td-100" align="center">  
                           <div style="width:25%;float:left;margin-left:3%;margin-top:2%;font-size:12px;">
                                    <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" class="rounded float-right" style="width:90px;height:90px;" >
                                    <h2 style="border-top-style: solid;border-top:8px solid #990012;width:410%;margin-left:30%;"> </h2>
                           </div>
                           <div style="width:75%;float:left;font-size:12px;margin-top:2%;margin-bottom:2%;" align="center">
                                 <h2 style="color:#990012;"> <b>'.$row->title.'<br></b></h2>
                                 <h4 style="color:black;">'.$row->address.'</h4>
                                 <u><h5 style="color:#990012";>Anglican Priest Reg No: '.$row->reg_no.'</h5></u><br><br>
                                 
                           </div>
                           
                          </td>
                          </tr>
                      
                         <tr>
                                <td class="td-100" align="right" style="color:#990012;margin-top:2%;">     
                                <br> <br>   <br> <br>   <br> <br>           
                                 <h6 style="font-weight:bold;"> <br><br> REV. M.K.PAUL SOMANATHAN<br>
                                    ( ANGLICAN CHURCH  PRIEST)</h6>                                
                                </td>                            
                            </tr>
                         <tr>
                                <td class="td-75" align="center" style="color:#990012;">
                                <div style="margin-top:2%;margin-bottom:2%;margin-left:25%;">
                                 <h4 style="font-weight:bold;"> <u>THE NOTICE OF MARRIGE BANN</u></h4>
                                 </div>
                                </td>
                                <td class="td-25">

                                </td>
                            </tr>
                            <tr >
                               <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                <div style="margin-left:15%;line-height: 150%;word-spacing: 4px;font-size:12px;width:105%;">
                                 As per the Indian Christian Marriage Act1872, <br>
                                The Marriage between Mr. / Miss…………………………….…….……………..…………………………………………....<br>
                                (UID No :………………………..…………..)
                                 Believer of this church. As per family register No………....................<br>
                                 Baptized on:……………… S/D of Mr.………………………………………………………………………………………..….<br>
                                  & Mrs.………………………………………………………….  Born on : ………………………………………………………<br>
                                   R/O:…………………………………………….……………………………………….……………………………………………....<br>
                                   ……………………………………………………………………………………………………………………………………………<br>
                                   ………………………………………………………..….Village/Panchayath, ......…………………………………..........……….<br>
                                   .........................…..…………………………………………………………………………………………………………….Thaluk<br>
                                   …………………………………..………………………District …………………………….……………………………... State.     <br>
                                   And Mr./Miss………………………………………………………………..…………………………………………………................... <br>
                                   (UID NO:…………………………..) Believer of……………………………………………………………………………..........<br>
                                 </div>
                           </td>
                           </tr>

                           <tr >
                              <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                              <div style="margin-left:15%;line-height: 150%;word-spacing: 4px;font-size:12px;width:105%;">


                                …………………………………………………………………………………………………………………………….....................<br>
                                Church, As per family register No:…………...................................... Baptised on:……………………………………... <br>
                                S/D of Mr.…………………………….. ………..…………………& Mrs.…………………………………………………........<br>
                                born on :……………………… R/O………………………………………………………………............................................<br>
                                  ……………………………………………………………………………………………………………………...............................<br>
                                  ……………………………………………….……Village/Panchayath .……………………....................................................<br>
                                     </div>
                               </td>
                               </tr>
                               <tr >
                                  <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                  <div style="margin-left:15%;line-height: 150%;word-spacing: 4px;font-size:12px;width:105%;">

                                      Thaluk………………………………………………....…………District …………………………............................................. <br>
                                      State.…………………..…......................................................................................................................................................<br>
                                    Have decided to be solemnized on……………..........................  At ……………………....................................am/pm <br>
                                    In…………………………….……………………………………………………………………..........….....
                                    Auditorium/ Church <br> in……………………………………………..............................................................................................….………...district<br>


                               </div>
                           </td>
                           </tr>
                           <tr >
                              <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                <div style="margin-left:15%;line-height: 150%;word-spacing: 4px;margin-bottom:2%;margin-top:2%;width:101%;font-size:12px;">
                                <p style="text-align:justify">This marriage has been decided by both families and churches of the bride groom and bride,
                                only after<br>  confirming the concern and approval of the bride groom and bride for this marriage.</p>
                                <br>
                                Bride groom’s Signature:………………………………………………………………………...................................................<br>
                                Bride Groom’s father/mother’s Signature:…………………………………………………….................................................<br>
                                Bride’s Signature:……………………………………………………………………………….....................................................<br>
                                Bride’s father/mother’s Signature:……………………………………………………...............................................................<br>
                               </div>
                           </td>
                           </tr>

                               <tr >
                                  <td class="td-75" style="line-height: 150%;word-spacing: 4px;">
                                    <div style="margin-left:20%;font-size:12px;">  Date
                                        </div>
                                  </td>
                                  <td class="td-25" >
                                  <div style="margin-right:50%;font-size:12px;">
                                    S/d
                                    </div>
                                  </td>
                                  </tr>
                                  <tr >
                                  <td class="td-75" >
                                  <div style="margin-left:15%;font-size:12px;">
                                    (Church Seal)
                                    </div>
                                  </td>
                                  <div style="margin-left:30%;margin-top:-3%;font-size:12px;">
                                    (Marriage seal)
                                      </div>
                                  </td>

                                  <td class="td-25" >
                                  <div style="margin-right:30%;font-size:12px;">
                                    (AnglicanChurch  priest seal)
                                    </div>
                                  </td>
                                     </tr>

                     </tbody>
                 </table>

             </body>
             </html>';
           }
           else if($row->type=='Funaral')
            {
              $output = '<!DOCTYPE html>
              <html lang="en">
              <head>
                  <meta charset="UTF-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Funaral application</title>
                  <style>

                  *{
                      margin: 0px;
                      padding: 0px;
                      box-sizing: border-box;
                  }

                   .underline{

                      height:13px;
                      background-image: linear-gradient(#990012,black);
                      box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
                      margin-top:10px;
                      position: relative;
                   }
                   em{
                       color: blue;
                   }
                   .td-25{
                  width: 25%;
                    }
                    .td-50{
                        width: 50%;
                    }
                    .td-75{
                        width: 75%;
                    }
                    .td-100{
                        width: 100%;
                    }
                  </style>
              </head>
              <body>
                    <table class="table-borderless" style="width:100%;">
                     <tbody>
                     <tr>
                            <td class="td-100" align="center">  
                            <div style="width:25%;float:left;margin-left:3%;margin-top:2%;font-size:12px;">
                                     <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" class="rounded float-right" style="width:90px;height:90px;" >
                                     <h2 style="border-top-style: solid;border-top:8px solid #990012;width:410%;margin-left:30%;"> </h2>
                            </div>
                            <div style="width:75%;float:left;font-size:12px;margin-top:2%;margin-bottom:2%;" align="center">
                                  <h2 style="color:#990012;"> <b>'.$row->title.'<br></b></h2>
                                  <h4 style="color:black;">'.$row->address.'</h4>
                                  <u><h5 style="color:#990012";>Anglican Priest Reg No: '.$row->reg_no.'</h5></u><br><br>
                                  
                            </div>
                            
                           </td>
                           </tr>
                       
                          <tr>
                                 <td class="td-100" align="right" style="color:#990012;margin-top:2%;">     
                                 <br> <br>   <br> <br>   <br> <br>           
                                  <h6 style="font-weight:bold;"> <br><br> REV. M.K.PAUL SOMANATHAN<br>
                                     ( ANGLICAN CHURCH  PRIEST)</h6>                                
                                 </td>                            
                             </tr>
                          <tr>
                                 <td class="td-75" align="center" style="color:#990012;">
                                 <div style="margin-top:1%;margin-bottom:1%;margin-left:25%;">
                                  <h4 style="font-weight:bold;"> <u>FUNERAL SERVICE CONSENT FORM</u></h4>
                                  </div>
                                 </td>
                                 <td class="td-25">

                                 </td>
                             </tr>
                             <tr >
                                <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                  <div style="margin-left:15%;line-height: 150%;word-spacing: 4px;font-size:12px;width:101%;">

                                    1. NAME OF THE DECEASED	:	<br>
                                    2. AGE 	:<br>
                                    3. MALE / FEMALE	:<br>
                                    4. TIME AND DATE OF DEATH	:<br>
                                    5. CAUSE OF DEATH	:<br>
                                    6. WHICH  CHURCH  MEMBER	:<br>
                                    7. PRIEST  WHO WILL  BURY	:<br>
                                    8. CONGREGATION OF PRIEST	:<br>
                                    9. TIME  AND DATE OF BURIAL	:	<br><br>
                                    BASED  ON  THE  ABOVE  INFORMATION,  REV.-----------------------------------------
                                    LICENCE NO.------------------------ AND OTHER CLERGYMEN ARE CONSENTED TO PERFORM THE FUNERAL SERVICES. <br>
                                  </div>
                            </td>
                            </tr>

                            <tr >
                               <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                 <div style="margin-left:15%;line-height: 150%;word-spacing: 4px;margin-top:2%;font-size:12px;width:101%;">

                                 	CONSENT  FROM,<br>
                                 1)MR / MRS------------------------------------------------------------------RELATION---------------------------------------------------------SIGN<br><br>
                                 2)MR / MRS------------------------------------------------------------------RELATION---------------------------------------------------------SIGN<br>
                                 <div style="margin-bottom:1%;margin-top:1%;text-align:center;">
                                  <h4 style="font-weight:bold;color:#990012;"> STATEMENT OF THE PRIEST<br></h4>
                                  </div>

                                 BASED ON THE ABOVE INFORMATION AND ASSURANCE, I ----------------------------------------------------------------------
                                 LICENCE  NO.-----------------------, ON--------------------------------HAD STARTED THE FUNERAL
                                  SERVICE AT------------------------ AND THE SERIVCE ENDED IN-----------------.<br><br>
                                  IN THIS SERVICE,<br>
                                       1)-------------------------------------------------   SIGN<br>
                                       2)-------------------------------------------------   SIGN<br>
                                       3)-------------------------------------------------   SIGN<br>
                                       4)-------------------------------------------------   SIGN<br>
                                       5)-------------------------------------------------   SIGN<br><br>
                                       <div align="center">
                                       THE  ABOVE  CLERGYMEN WERE  ALSO  PRESENT.<br>

                                       IN CHRIST,<br>

                                       ---------------------------------------------------------<br>

                                       SIGN------------------------------------<br>
                                      </div>

                                </td>
                                </tr>


                      </tbody>
                  </table>

              </body>
              </html>';
            }
            else if($row->type=='Church Membership')
             {
               $output = '<!DOCTYPE html>
               <html lang="en">
               <head>
                   <meta charset="UTF-8">
                   <meta http-equiv="X-UA-Compatible" content="IE=edge">
                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <title>Church Membership application</title>
                   <style>

                   *{
                       margin: 0px;
                       padding: 0px;
                       box-sizing: border-box;
                   }

                    .underline{

                       height:13px;
                       background-image: linear-gradient(#990012,black);
                       box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
                       margin-top:10px;
                       position: relative;
                    }
                    em{
                        color: blue;
                    }
                    .td-25{
                   width: 25%;
                     }
                     .td-50{
                         width: 50%;
                     }
                     .td-75{
                         width: 75%;
                     }
                     .td-100{
                         width: 100%;
                     }
                   </style>
               </head>
               <body>
                     <table class="table-borderless">
                      <tbody>
                      <tr>
                             <td class="td-100" align="center">  
                             <div style="width:25%;float:left;margin-left:3%;margin-top:2%;font-size:12px;">
                                      <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" class="rounded float-right" style="width:90px;height:90px;" >
                                      <h2 style="border-top-style: solid;border-top:8px solid #990012;width:410%;margin-left:30%;"> </h2>
                             </div>
                             <div style="width:75%;float:left;font-size:12px;margin-top:2%;margin-bottom:2%;" align="center">
                                   <h2 style="color:#990012;"> <b>'.$row->title.'<br></b></h2>
                                   <h4 style="color:black;">'.$row->address.'</h4>
                                   <u><h5 style="color:#990012";>Anglican Priest Reg No: '.$row->reg_no.'</h5></u><br><br>
                                   
                             </div>
                             
                            </td>
                            </tr>
                        
                           <tr>
                                  <td class="td-100" align="right" style="color:#990012;margin-top:2%;">     
                                  <br> <br>   <br> <br>   <br> <br>           
                                   <h6 style="font-weight:bold;"> <br><br> REV. M.K.PAUL SOMANATHAN<br>
                                      ( ANGLICAN CHURCH  PRIEST)</h6>                                
                                  </td>                            
                              </tr>
                           <tr>
                                  <td class="td-75" align="center" style="color:#990012;">
                                  <div style="margin-top:1%;margin-bottom:1%;margin-left:25%;">
                                   <h4 style="font-weight:bold;"> <u>MEMBERSHIP FORM</u></h4>
                                   </div>
                                  </td>
                                  <td class="td-25">

                                  </td>
                              </tr>
                              <tr >
                                 <td class="td-100" style="line-height: 200%;word-spacing: 4px;">
                                   <div style="margin-left:15%;line-height: 200%;word-spacing: 4px;width:101%;font-size:12px;">

   1. Name : …………………………………………………………………………...................................................................<br>

   2. Name of father/Mother/husband/ Wife  …………………………………………............................................................<br>

   3.  Sex …………………............................................................................................................................. (Male/Female)<br>


   4. Date of birth	:  ……………………....................  UID NO   : ………………….............................................................<br>

  5. Occupation		:  ……………………………………………………………………………........................................................<br>
  6. Marital Status :  …………………….......................................................................................... Married/ Unmarried   <br>

  7. Spouse’s Name……………………………………………................................................................................................<br>



                                   </div>
                             </td>
                             </tr>
                              <tr >
                                 <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                   <div style="margin-left:15%;line-height: 200%;word-spacing: 4px;width:101%;font-size:12px;">


                                  8. Name of children	:  ………………………………………………………………………………….....................................<br>

                                  …………………………………………………………………………………………………........................................................<br>



                                  9. R/O	: ….……………………………………………………………………………………....................................................<br>

                                  ……………………………………………………………………………………………………….................................................<br>
                                  10. Have you born again according to the word of God (John.3:3 to 5, 2Cor.5:17)    ?<br>
                                                Yes/No………………………………………. a). When? ………………………………………………..<br>

                                     11. Have you been baptized in water by immersion in the name of  the Father, Son and the Holy Spirit according to the word of 

                                  God (Mark.16:16, Mtt.28:19, Rom.6:3-5) ?  Yes/No	:  ………………………...  a). When?.............................<br>

                                  12. Have you been baptized in the Holy Spirit with the evidence of speaking of other tongues according to the word of God

                                  (Act.2:4, 10:44, 46) ?   Yes/No:  ………………………… a). When? …………………………………………………………<br>

                                  13. If your answer is ‘no’ do you believe in this experience and are you seeking for it (Please read Act.1:4-5) ?<br>

                                  Yes / No:  ………………………………………………………………………………….<br>

                                   </div>
                             </td>
                             </tr>

                              <tr >
                                 <td class="td-100" style="line-height: 150%;word-spacing: 4px;">
                                 <div style="margin-top:2%;margin-bottom:2%;margin-left:60%;">
                                  <h4 style="font-weight:bold;color:#990012;"> PLEDGE</h4>
                                  </div>
                                   <div style="margin-left:15%;line-height: 200%;word-spacing: 4px;width:101%;font-size:12px;">


I, …………………………………………………………. hereby promise to fulfill all the requirements of membership

for the ................................................................................ I will faithfully
attend all the services of the Church as much as possible, and I will obey the leaders of the Church in accordance with the word of God.
I will give my tithe and offerings to the Church and support it with my time and strength as God enables me.<br><br>

Date: …………………					                 Place……………………………..



                                         Signature ………………………….Thumb

                                   </div>
                             </td>
                             </tr>

                       </tbody>
                   </table>

               </body>
               </html>';
             }
            else if($row->type=='Letter head')
             {
               $output = '<!DOCTYPE html>
               <html lang="en">
               <head>
                   <meta charset="UTF-8">
                   <meta http-equiv="X-UA-Compatible" content="IE=edge">
                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <title>Letter head</title>
                   <style>

                   *{
                       margin: 0px;
                       padding: 0px;
                       box-sizing: border-box;
                   }

                    .underline{

                       height:13px;
                       background-image: linear-gradient(#990012,black);
                       box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
                       margin-top:10px;
                       position: relative;
                    }
                    em{
                        color: blue;
                    }
                    .td-25{
                   width: 25%;
                     }
                     .td-50{
                         width: 50%;
                     }
                     .td-75{
                         width: 75%;
                     }
                     .td-100{
                         width: 100%;
                     }
                     #customers{
                       font-family: "Times New Roman", Times, serif;
                  }
                   </style>
               </head>
               <body>
               <table class="table-borderless">
                <tbody>
                <tr>
                       <td class="td-100" align="center">  
                       <div style="width:25%;float:left;margin-left:3%;margin-top:2%;font-size:12px;">
                                <img src="https://eridiocese.parishtome.com/gallery/clergyform/'.$row->photo.'" class="rounded float-right" style="width:90px;height:90px;" >
                                <h2 style="border-top-style: solid;border-top:8px solid #990012;width:410%;margin-left:30%;"> </h2>
                       </div>
                       <div style="width:75%;float:left;font-size:12px;margin-top:2%;margin-bottom:2%;" align="center">
                             <h2 style="color:#990012;"> <b>'.$row->title.'<br></b></h2>
                             <h4 style="color:black;">'.$row->address.'</h4>
                             <u><h5 style="color:#990012";>Anglican Priest Reg No: '.$row->reg_no.'</h5></u><br><br>
                             
                       </div>
                       
                      </td>
                      </tr>
                  
                     <tr>
                            <td class="td-100" align="right" style="color:#990012;margin-top:2%;">     
                            <br> <br>   <br> <br>   <br> <br>           
                             <h6 style="font-weight:bold;"> <br><br> REV. M.K.PAUL SOMANATHAN<br>
                                ( ANGLICAN CHURCH  PRIEST)</h6>                                
                            </td>                            
                        </tr>
                        <tr>
                               <td class="td-75" align="center" style="color:#990012;">
                               
                               </td>
                               <td class="td-25">

                               </td>
                           </tr>
                           <tr >
                              <td class="td-100" style="line-height: 200%;word-spacing: 4px;">
                              <div id="customers" style="margin-top:75%;margin-left:10%;">
  <p style="color:blue;">..................................................................................................................................................<br></p>
  <div style="width:45%;float:left;margin-left:10%;font-size:12px;">
           Email : prmkpsomnathansm@gmail.com
  </div>
  <div style="width:45%;float:left;margin-left:10%;font-size:12px;">
           Mobile : 9669577960, 9174160691
  </div>
</div>
                          </td>
                          </tr>
                          
                 </tbody>
             </table>

               </body>
               </html>';
             }
          }
            return $output;

   }


   function getnodueapplicationInfo($nodue_id)
    {

      $this->db->where('nodue_id', $nodue_id);
      $data = $this->db->get('nodue_application');
      foreach($data->result() as $row)
      {
           $output = '<!DOCTYPE html>
           <html lang="en">
           <head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>No Due application</title>
               <style>

               *{
                   margin: 0px;
                   padding: 0px;
                   box-sizing: border-box;
               }

                .underline{

                   height:13px;
                   background-image: linear-gradient(#990012,black);
                   box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
                   margin-top:5px;
                   position: relative;
                }
                em{
                    color: blue;
                }
                .td-25{
               width: 25%;
                 }
                 .td-50{
                     width: 50%;
                 }
                 .td-75{
                     width: 75%;
                 }
                 .td-100{
                     width: 100%;
                 }
               </style>
           </head>
           <body>
                 <table class="table-borderless" style="width:100%;line-height: 150%;word-spacing: 4px;">
                  <tbody>
                  <tr >
                     <td class="td-100" align="center">
                     <div align="center">
                       <img src="https://eridiocese.parishtome.com/gallery/Header.jpg" style="width:720px;height:120px;">
                       </div>
                     </td>
                     </tr>
                       <tr>
                              <td class="td-100" align="center" style="color:#990012;">
                              <div class="underline">
                              </div><br>
                             </td>
                             </tr>
                       <tr>
                              <td class="td-100" align="center" style="color:#990012;">
                              <u><h4 style="color:#990012;font-weight:bold;">NO DUE CERTIFICATE </h4></u></br></br>
                             </td>
                             </tr>
                             <tr>
                                    <td class="td-100" align="center" style="color:#990012;">
                                    <div class="underline">
                                    </div><br>
                                   </td>
                                   </tr>
                             <tr >
                                <td class="td-100" >
                                  <div style="margin-left:10%;line-height: 200%;word-spacing: 4px;font-size:12px;">
                                Name of the Candidate: '.$row->name.',	INTL NO: '.$row->intl_no.'  ,ERIDAN: '.$row->eridan_no.' <br>
                                       I, certify that Mr./Mrs./Ms.'.$row->name.' have clear all the fee dues for....................................................... <br> <br>
                                      <div align="right" style="margin-right:15%;">Signature of Accountant/Auditor.</div>
                                      I, certify that Mr./Mrs./Ms.'.$row->name.' have submitted the </br>required documents for .......................................<br> <br>
                                      </div>
                                </td>
                                </tr>
                                <tr>
                                       <td class="td-100" align="right">
                                       <div style="margin-right:10%;margin-top:1%;">
                                          <h6>   Signature of ERID Officer </h6></br>
                                          <h6 style="color:#990012">   Moderator Bishop </h6></br>
                                          </div>
                                       </td>

                                   </tr>

                   </tbody>
               </table>

           </body>
           </html>';
         }
           return $output;

  }

  function getbillapplicationInfo($bill_id)
   {

     $this->db->where('bill_id', $bill_id);
     $data = $this->db->get('bill_application');
     foreach($data->result() as $row)
     {
          $output = '<!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Bill application</title>
              <style>

              *{
                  margin: 0px;
                  padding: 0px;
                  box-sizing: border-box;
              }

               .underline{

                  height:13px;
                  background-image: linear-gradient(#990012,black);
                  box-shadow: 2px 2px 2px .2px rgb(48, 47, 47);
                  margin-top:5px;
                  position: relative;
               }
               em{
                   color: blue;
               }
               .td-25{
              width: 25%;
                }
                .td-50{
                    width: 50%;
                }
                .td-75{
                    width: 75%;
                }
                .td-100{
                    width: 100%;
                }
              </style>
          </head>
          <body>
                <table style="border: 1px solid black;width:100%;line-height: 150%;word-spacing: 4px;" >
                 <tbody>
                 <tr >
                    <td class="td-100" align="center">
                    <div align="center">
                      <img src="https://eridiocese.parishtome.com/gallery/Header.jpg" style="width:760px;height:170px;">
                      </div>
                    </td>
                    </tr>
                      <tr>
                             <td class="td-100" align="center" style="color:#990012;">
                             <div class="underline">
                             </div><br>
                            </td>
                            </tr>

                         <tr>
                                <td class="td-100" >
                                <div style="margin-left:5%;width:101%;">
                                <h5 style="text-align:left;margin-left:12%;">No : '.$row->receipt_no.'</h5>

                                <div align="center">
                                  <h5 style="border:2px solid black;width:65%;margin-left:10%;">RECEIPT</h5>
                                  </div>
                                  <br>
                                <div align="right" style="margin-right:26%;">
                                  <h5> <b>Date : '.$row->date.'</h5>
                                  </div>
                                  <br>
                                  <p style="text-align:left;margin-left:10%;">
                                Received with thanks from Mr/Mrs '.$row->name.'
                                    a sum of Rs '.$row->amount.'<br> (in Wards) '.$row->amount_inwords.'
                                towards by .......................................<br>
                                  by way of Cash/Cheque/DD .................................</p>
                                  </div>
                                  <br><br>
                                  <div align="left" style="margin-left:15%;">
                                        <h6 style="border:2px solid black;width:20%;"> RS</h6>
                                  </div>
                                  <div align="right" >
                                        <p style="margin-right:19%;"> Seal with signature</p>
                                  </div>
                                </td>
                            </tr>



                  </tbody>
              </table>

          </body>
          </html>';
        }
          return $output;

  }

    function gethumanrightsInfo($human_right_id)
     {
         $this->db->select('*');
         $this->db->from('add_human_rights');


         $this->db->where('human_right_id', $human_right_id);
         $query = $this->db->get();

         return $query->result();
     }
     
    function getclergy_appliInfo($clergy_appli_id)
     {
         $this->db->select('*');
         $this->db->from('clergy_application_form');


         $this->db->where('clergy_appli_id', $clergy_appli_id);
         $query = $this->db->get();

         return $query->result();
     }
    function getuniversity_appliInfo($bible_app_id)
     {
         $this->db->select('*');
         $this->db->from('bible_univ_app');


         $this->db->where('bible_app_id', $bible_app_id);
         $query = $this->db->get();

         return $query->result();
     }

	 function getblogInfo($blog_id)
    {
        $this->db->select('*');
        $this->db->from('Add_techupdates');


        $this->db->where('techupdates_id', $blog_id);
        $query = $this->db->get();

        return $query->result();
    }

    function getcontactInfo($contact_id)
    {
        $this->db->select('*');
        $this->db->from('contactUs');


        $this->db->where('contact_id', $contact_id);
        $query = $this->db->get();

        return $query->result();
    }

	function getslideInfo($slide_id)
    {
        $this->db->select('*');
        $this->db->from('carousel_gallery');


        $this->db->where('gallery_id', $slide_id);
        $query = $this->db->get();

        return $query->result();
    }

   function deleterecords($cbse_id)
	{
		$this->db->query("delete from Add_product where product_id='".$cbse_id."'");

	}

  function deleteblogs($blog_id)
	{
		$this->db->query("delete from Add_techupdates where techupdates_id='".$blog_id."'");

	}

	 function deletemanu($manufacturers_id)
	{
		$this->db->query("delete from Add_manufacturers where manufacturers_id='".$manufacturers_id."'");

	}

     function deletecontact($contact_id)
	{
		$this->db->query("delete from contactUs where contact_id='".$contact_id."'");

	}

	 function deleteslide($slide_id)
	{
		$this->db->query("delete from carousel_gallery where gallery_id='".$slide_id."'");

	}


    function deleteUser($userId, $userInfo)
    {

        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);

        return $this->db->affected_rows();
    }


    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('userId, password');
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_users');

        $user = $query->result();

        if(!empty($user)){
            if(verifyHashedPassword($oldPassword, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function changePassword($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', $userInfo);

        return $this->db->affected_rows();
    }


function ElectricianCount($searchText1 = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_electrician');
        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  level  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function Electrician($searchText1 = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_electrician');

        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  level  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	function store_pic_data($data){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['level'] = $data['level'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['reviews'] = $data['reviews'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];

		$query = $this->db->insert('tbl_electrician', $insert_data);
	}

     /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */

	  function getElectricianInfo($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_electrician');

        $this->db->where('electrician_id', $userId);
        $query = $this->db->get();

        return $query->result();
    }
	 function getUserRoleselect()
    {
        $this->db->select('service_status, status');
        $this->db->from('tbl_active_flag');

        $query = $this->db->get();

        return $query->result();
    }

	function store_pic_elec($data,$userId){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];
			$this->db->where('electrician_id', $userId);
		$this->db->update('tbl_electrician', $insert_data);

	}

       function electriciandelete($userId)
    {
        $this->db->query("delete from tbl_electrician where electrician_id='".$userId."'");

    }


function store_pic_blog($data){
        $insert_data['url'] = $data['url'];
		$insert_data['blog_tittle'] = $data['blog_tittle'];
		$insert_data['blog_content'] = $data['blog_content'];
		$insert_data['blog_cat'] = $data['blog_cat'];
		$insert_data['signature_title'] = $data['signature_title'];
        $insert_data['post_date'] = $data['post_date'];
		$insert_data['signaturecontent'] = $data['signaturecontent'];
		$insert_data['seo_tittle'] = $data['seo_tittle'];
		$insert_data['seo_description'] = $data['seo_description'];
		$insert_data['seo_keywords'] = $data['seo_keywords'];
		$insert_data['seo_focuskeywords'] = $data['seo_focuskeywords'];
		$insert_data['blog_photo'] = $data['blog_photo'];
		$insert_data['signature_image'] = $data['signature_image'];

		$query = $this->db->insert('add_blog', $insert_data);
	}

function PlumberCount($searchText1 = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_plumber');
        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function Plumber($searchText1 = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_plumber');

        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	function store_pic_data1($data){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['level'] = $data['level'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['reviews'] = $data['reviews'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];

		$query = $this->db->insert('tbl_plumber', $insert_data);
	}

	function getPlumberInfo($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_plumber');

        $this->db->where('plumber_id', $userId);
        $query = $this->db->get();

        return $query->result();
    }
	 function getUserRoleselect1()
    {
        $this->db->select('service_status, status');
        $this->db->from('tbl_active_flag');

        $query = $this->db->get();

        return $query->result();
    }

	function store_pic_elec1($data,$userId){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];
			$this->db->where('plumber_id', $userId);
		$this->db->update('tbl_plumber', $insert_data);

	}

	function ACRepairCount($searchText1 = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_acrepair');
        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function ACrepair($searchText1 = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_acrepair');

        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	function store_pic_data2($data){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['level'] = $data['level'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['reviews'] = $data['reviews'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];

		$query = $this->db->insert('tbl_acrepair', $insert_data);
	}

	function getACrepairInfo($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_acrepair');

        $this->db->where('ACrepair_id', $userId);
        $query = $this->db->get();

        return $query->result();
    }
	 function getUserRoleselect2()
    {
        $this->db->select('service_status, status');
        $this->db->from('tbl_active_flag');

        $query = $this->db->get();

        return $query->result();
    }

	function store_pic_elec2($data,$userId){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];
			$this->db->where('ACrepair_id', $userId);
		$this->db->update('tbl_acrepair', $insert_data);

	}

	function CCTVCount($searchText1 = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_cctvservices');
        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function CCTV($searchText1 = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_cctvservices');

        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	function store_pic_data3($data){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['level'] = $data['level'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['reviews'] = $data['reviews'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];

		$query = $this->db->insert('tbl_cctvservices', $insert_data);
	}

	function getCCTVInfo($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_cctvservices');

        $this->db->where('CCTVservices_id', $userId);
        $query = $this->db->get();

        return $query->result();
    }
	 function getUserRoleselect3()
    {
        $this->db->select('service_status, status');
        $this->db->from('tbl_active_flag');

        $query = $this->db->get();

        return $query->result();
    }

	function store_pic_elec3($data,$userId){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];
			$this->db->where('CCTVservices_id', $userId);
		$this->db->update('tbl_cctvservices', $insert_data);

	}
	function ComputerServicesCount($searchText1 = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_computerservices');
        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function ComputerServices($searchText1 = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_computerservices');

        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	function store_pic_data4($data){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['level'] = $data['level'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['reviews'] = $data['reviews'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];

		$query = $this->db->insert('tbl_computerservices', $insert_data);
	}

	function getComputerServicesInfo($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_computerservices');

        $this->db->where('ComputerServices_id', $userId);
        $query = $this->db->get();

        return $query->result();
    }
	 function getUserRoleselect4()
    {
        $this->db->select('service_status, status');
        $this->db->from('tbl_active_flag');

        $query = $this->db->get();

        return $query->result();
    }

	function store_pic_elec4($data,$userId){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];
			$this->db->where('ComputerServices_id', $userId);
		$this->db->update('tbl_computerservices', $insert_data);

	}
	function MailManagementCount($searchText1 = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_mailmanagement');
        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function MailManagement($searchText1 = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_mailmanagement');

        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	function store_pic_data5($data){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['level'] = $data['level'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['reviews'] = $data['reviews'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];

		$query = $this->db->insert('tbl_mailmanagement', $insert_data);
	}

	function getMailManagementInfo($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_mailmanagement');

        $this->db->where('Mailmanagement_id', $userId);
        $query = $this->db->get();

        return $query->result();
    }
	 function getUserRoleselect5()
    {
        $this->db->select('service_status, status');
        $this->db->from('tbl_active_flag');

        $query = $this->db->get();

        return $query->result();
    }

	function store_pic_elec5($data,$userId){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];
			$this->db->where('Mailmanagement_id', $userId);
		$this->db->update('tbl_mailmanagement', $insert_data);

	}

	function PGManagementCount($searchText1 = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_pgmanagement');
        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function PGManagement($searchText1 = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_pgmanagement');

        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	function store_pic_data6($data){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['level'] = $data['level'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['reviews'] = $data['reviews'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];

		$query = $this->db->insert('tbl_pgmanagement', $insert_data);
	}

	function getPGManagementInfo($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_pgmanagement');

        $this->db->where('PGmanagement_id', $userId);
        $query = $this->db->get();

        return $query->result();
    }
	 function getUserRoleselect6()
    {
        $this->db->select('service_status, status');
        $this->db->from('tbl_active_flag');

        $query = $this->db->get();

        return $query->result();
    }

	function store_pic_elec6($data,$userId){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['email'] = $data['email'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];
			$this->db->where('PGmanagement_id', $userId);
		$this->db->update('tbl_pgmanagement', $insert_data);

	}

	function CarpenterCount($searchText1 = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_carpenter');
        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();

        return count($query->result());
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function Carpenter($searchText1 = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_carpenter');

        if(!empty($searchText1)) {
            $likeCriteria = "(name  LIKE '%".$searchText1."%'
                            OR  status  LIKE '%".$searchText1."%'
                            OR  age  LIKE '%".$searchText1."%')";
            $this->db->where($likeCriteria);
        }

        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }

	function store_pic_data7($data){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];
		$insert_data['level'] = $data['level'];
		$insert_data['jobs_done'] = $data['jobs_done'];
		$insert_data['reviews'] = $data['reviews'];
		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];

		$query = $this->db->insert('tbl_carpenter', $insert_data);
	}

	function getCarpenterInfo($userId)
    {
        $this->db->select('*');
        $this->db->from('tbl_carpenter');

        $this->db->where('carpenter_id', $userId);
        $query = $this->db->get();

        return $query->result();
    }
	 function getUserRoleselect7()
    {
        $this->db->select('service_status, status');
        $this->db->from('tbl_active_flag');

        $query = $this->db->get();

        return $query->result();
    }

	function store_pic_elec7($data,$userId){
		$insert_data['sl'] = $data['sl'];
		$insert_data['name'] = $data['name'];
		$insert_data['designation'] = $data['designation'];
		$insert_data['join_date'] = $data['join_date'];

		$insert_data['jobs_done'] = $data['jobs_done'];

		$insert_data['age'] = $data['age'];
		$insert_data['service_status'] = $data['service_status'];
		$insert_data['pic'] = $data['pic'];
			$this->db->where('carpenter_id', $userId);
		$this->db->update('tbl_carpenter', $insert_data);

	}

}
