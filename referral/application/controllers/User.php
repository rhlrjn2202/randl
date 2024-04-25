<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();

    }

    /**
     * This function used to load the first screen of the user
     */

    public function index()
    {
        $this->global['pageTitle'] = ' Dashboard';

        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }

    // function GeneratePdf(){
    //     $dompdf = new \Dompdf\Dompdf();
    //     $dompdf->loadHtml(view("editbible_application", $this->global, $data, NULL));
    //     $dompdf->setPaper('A4', 'portrait');
    //     $dompdf->render();
    //     $dompdf->stream();
    // }

	public function Add_categories()
    {
        $this->global['pageTitle'] = '  Add Categories';

        $this->loadViews("Add_categories", $this->global, NULL , NULL);
    }

    public function Add_gallery()
    {
        $this->global['pageTitle'] = '  Add Carousel Gallery';

        $this->loadViews("Add_gallery", $this->global, NULL , NULL);
    }

    public function Add_aboutus()
    {
        $this->global['pageTitle'] = ' Add About Us';

        $this->loadViews("Add_aboutus", $this->global, NULL , NULL);
    }

    public function add_baptism()
    {
        $this->global['pageTitle'] = ' Add Baptism';

        $this->loadViews("add_baptism", $this->global, NULL , NULL);
    }

	public function manage_contactus()
    {
        $this->global['pageTitle'] = ' Add Contact Us';

        $this->loadViews("manage_contactus", $this->global, NULL , NULL);
    }

    public function add_short_about()
    {
        $this->global['pageTitle'] = ' Add Short About';

        $this->loadViews("add_short_about", $this->global, NULL , NULL);
    }

    public function add_privacy_policy()
    {
        $this->global['pageTitle'] = ' Add Privacy Policy';

        $this->loadViews("add_privacy_policy", $this->global, NULL , NULL);
    }

    public function add_disclaimer()
    {
        $this->global['pageTitle'] = ' Add Disclaimer';

        $this->loadViews("add_disclaimer", $this->global, NULL , NULL);
    }

     public function add_terms_conditions()
    {
        $this->global['pageTitle'] = ' Add Terms and conditions';

        $this->loadViews("add_terms_conditions", $this->global, NULL , NULL);
    }

     public function add_countries()
    {
        $this->global['pageTitle'] = 'Add Countries';

        $this->loadViews("add_countries", $this->global, NULL , NULL);
    }

     public function add_income()
    {
        $this->global['pageTitle'] = 'Add Income';

        $this->loadViews("add_income", $this->global, NULL , NULL);
    }
    
    public function View_Income(){
         $data = array();
         $this->global['pageTitle'] = 'View Income';
           $data['AllIncome'] = $this->user_model->get_all_View_Income();
         $this->loadViews("view_income", $this->global, NULL , NULL);
     }
    
    public function Clergy_Expiring_report(){
         $data = array();
         $this->global['pageTitle'] = 'Ordination Report';
           $data['Allordination'] = $this->user_model->get_all_ordination_report();
         $this->loadViews("clergy_ordination_report", $this->global, NULL , NULL);
     }
     
    public function Clergy_Birthday_report(){
         $data = array();
         $this->global['pageTitle'] = 'Clergy Birthday Report';
         $this->loadViews("clergy_birthday_report", $this->global, NULL , NULL);
     }

     public function Human_Rights_Expiring_report(){
          $data = array();
          $this->global['pageTitle'] = 'Human Rights Report';
          $this->loadViews("human_rights_report", $this->global, NULL , NULL);
      }
     
    public function Human_Rights_Birthday_report(){
         $data = array();
         $this->global['pageTitle'] = 'Human Birthday Report';
         $this->loadViews("human_rights_birthday_report", $this->global, NULL , NULL);
     }
    
     public function add_human_rights()
    {
        $this->global['pageTitle'] = 'Add Human Rights';

        $this->loadViews("add_human_rights", $this->global, NULL , NULL);
    }

     public function Add_clergy_details()
    {
        $this->global['pageTitle'] = 'Add Clergy Details';

        $this->loadViews("Add_clergy_details", $this->global, NULL , NULL);
    }

     public function Add_clergy_application()
    {
        $this->global['pageTitle'] = 'Add Clergy Application form';

        $this->loadViews("Add_clergy_application", $this->global, NULL , NULL);
    }

     public function Add_bible_application()
    {
        $this->global['pageTitle'] = 'Add Bible Application form';

        $this->loadViews("Add_bible_application", $this->global, NULL , NULL);
    }

     public function Add_no_due_application()
    {
        $this->global['pageTitle'] = 'Add No Due Application form';

        $this->loadViews("Add_no_due_application", $this->global, NULL , NULL);
    }

     public function Add_bill_application()
    {
        $this->global['pageTitle'] = 'Add Bill Application form';

        $this->loadViews("Add_bill_application", $this->global, NULL , NULL);
    }

    public function Add_Manufactures(){
        $this->global['pageTitle'] = 'Add Manufactures';
        $this->loadviews("Add_Manufactures", $this->global, NULL , NULL);
    }
    public function Add_techupdate(){
        $this->global['pageTitle'] = 'Add_techupdate';
        $this->loadviews("Add_techupdate", $this->global, NULL , NULL);
    }

    public function add_banner_image(){
        $this->global['pageTitle'] = 'add_banner_image';
        $this->loadviews("add_banner_image", $this->global, NULL , NULL);
    }

	 public function add_rightbar_ad_image(){
        $this->global['pageTitle'] = 'add_rightbar_ad_image';
        $this->loadviews("add_rightbar_ad_image", $this->global, NULL , NULL);
    }

    /**
     * This function is used to load the user list
     */

 public function Iframe()
    {
      $this->load->view('Getmaterial');
    }

 function editproduct($cbse_id = NULL)
    {

            $data['cbseinfo'] = $this->user_model->getcbseInfo($cbse_id);

            $this->global['pageTitle'] = 'CodeInsect : Edit Product';

            $this->loadViews("editproduct", $this->global, $data, NULL);

    }

 function editblog($blog_id = NULL)
    {

            $data['blogdetailsinfo'] = $this->user_model->getblogInfo($blog_id);

            $this->global['pageTitle'] = 'CodeInsect : Edit Blog';

            $this->loadViews("editblog", $this->global, $data, NULL);

    }

    function editcontactus($contact_id = NULL)
    {

            $data['contactdetailsinfo'] = $this->user_model->getcontactInfo($contact_id);

            $this->global['pageTitle'] = 'CodeInsect : Edit Contact Us';

            $this->loadViews("editcontactus", $this->global, $data, NULL);

    }

	function edithomeslide($slide_id = NULL)
    {

            $data['homeslideinfo'] = $this->user_model->getslideInfo($slide_id);

            $this->global['pageTitle'] = 'CodeInsect : Edit Home Slide';

            $this->loadViews("edithomeslide", $this->global, $data, NULL);

    }

	function editmanufacturers($manufacturers_id = NULL)
    {

            $data['blogdetailsinfo'] = $this->user_model->getmanufacturersInfo($manufacturers_id);

            $this->global['pageTitle'] = 'CodeInsect : Edit Manufacturers';

            $this->loadViews("editmanufacturers", $this->global, $data, NULL);

    }

    function editclergy_details($clergy_id = NULL)
      {

              $data['blogdetailsinfo'] = $this->user_model->getclergydetailsInfo($clergy_id);

              $this->global['pageTitle'] = 'CodeInsect : Edit Clergy Details';

              $this->loadViews("editclergy_details", $this->global, $data, NULL);

      }

      // function editclergy_application($clergy_appli_id = NULL)
      //   {
      //
      //           $data['blogdetailsinfo'] = $this->user_model->getclergyapplicationInfo($clergy_appli_id);
      //
      //           $this->global['pageTitle'] = 'CodeInsect : Print Clergy Details';
      //
      //           $this->loadViews("editclergy_application", $this->global, $data, NULL);
      //
      //   }

        public function editclergy_application($clergy_appli_id = NULL){
          $html_content = $this->user_model->getclergyapplicationInfo($clergy_appli_id);
        		$html = $this->output->get_output();
                		// Load pdf library
        		$this->load->library('pdf');
        		$this->pdf->setPaper('A4', 'portrait');
            $this->pdf->set_option('isFontSubsettingEnabled', true);
            $this->pdf->loadHtml($html_content);
            $this->pdf->render();
            $this->pdf->stream("".$clergy_appli_id.".pdf", array("Attachment"=>0));
    		// Output the generated PDF (1 = download and 0 = preview)
    		// $this->pdf->stream("html_contents.pdf", array("Attachment"=> 0));
    	}

      public function editbible_application($bible_app_id = NULL){
        $html_content = $this->user_model->getbibleapplicationInfo($bible_app_id);
          $html = $this->output->get_output();
                  // Load pdf library
          $this->load->library('pdf');
          $this->pdf->setPaper('A4', 'portrait');
          $this->pdf->loadHtml($html_content);
          $this->pdf->render();
          $this->pdf->stream("".$bible_app_id.".pdf", array("Attachment"=>0));
      // Output the generated PDF (1 = download and 0 = preview)
      // $this->pdf->stream("html_contents.pdf", array("Attachment"=> 0));
    }
    
      public function editbaptism($baptism_id = NULL){
        $html_content = $this->user_model->getbaptismInfo($baptism_id);
          $html = $this->output->get_output();
                  // Load pdf library
          $this->load->library('pdf');
          $this->pdf->setPaper('A4', 'portrait');
          $this->pdf->loadHtml($html_content);
          $this->pdf->render();
          $this->pdf->stream("".$baptism_id.".pdf", array("Attachment"=>0));
      // Output the generated PDF (1 = download and 0 = preview)
      // $this->pdf->stream("html_contents.pdf", array("Attachment"=> 0));
    }

      public function editnodue_application($nodue_id = NULL){
        $html_content = $this->user_model->getnodueapplicationInfo($nodue_id);
          $html = $this->output->get_output();
                  // Load pdf library
          $this->load->library('pdf');
          $this->pdf->setPaper('A4', 'portrait');
          $this->pdf->loadHtml($html_content);
          $this->pdf->render();
          $this->pdf->stream("".$nodue_id.".pdf", array("Attachment"=>0));
      // Output the generated PDF (1 = download and 0 = preview)
      // $this->pdf->stream("html_contents.pdf", array("Attachment"=> 0));
    }
    
      public function editbill_application($bill_id = NULL){
        $html_content = $this->user_model->getbillapplicationInfo($bill_id);
          $html = $this->output->get_output();
                  // Load pdf library
          $this->load->library('pdf');
          $this->pdf->setPaper('A4', 'portrait');
          $this->pdf->loadHtml($html_content);
          $this->pdf->render();
          $this->pdf->stream("".$bill_id.".pdf", array("Attachment"=>0));
      // Output the generated PDF (1 = download and 0 = preview)
      // $this->pdf->stream("html_contents.pdf", array("Attachment"=> 0));
    }

    function edithuman_rights($human_right_id = NULL)
      {

              $data['blogdetailsinfo'] = $this->user_model->gethumanrightsInfo($human_right_id);

              $this->global['pageTitle'] = 'CodeInsect : Edit Human Rights Details';

              $this->loadViews("edithuman_rights", $this->global, $data, NULL);

      }

      function editclergy_appli($clergy_appli_id = NULL)
        {
  
                $data['clergyappliinfo'] = $this->user_model->getclergy_appliInfo($clergy_appli_id);
  
                $this->global['pageTitle'] = 'CodeInsect : Edit clergy Application Form';
  
                $this->loadViews("editclergy_appli", $this->global, $data, NULL);
  
        }
      function edituniversity_appli($bible_app_id = NULL)
        {
  
                $data['universityappliinfo'] = $this->user_model->getuniversity_appliInfo($bible_app_id);
  
                $this->global['pageTitle'] = 'CodeInsect : Edit university Application Form';
  
                $this->loadViews("edituniversity_appli", $this->global, $data, NULL);
  
        }

    public function deletedata($cbse_id = NULL)
	{
	$this->user_model->deleterecords($cbse_id);
	redirect($_SERVER['HTTP_REFERER']);
	}

	 public function deleteblog($blog_id = NULL)
	{
	$this->user_model->deleteblogs($blog_id);
	redirect($_SERVER['HTTP_REFERER']);
	}

	public function deletemanu($manufacturers_id = NULL)
	{
	$this->user_model->deletemanu($manufacturers_id);
	redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteslide($slide_id = NULL)
	{
	$this->user_model->deleteslide($slide_id);
	redirect($_SERVER['HTTP_REFERER']);
	}

    public function deletecontact($contact_id = NULL)
	{
	$this->user_model->deletecontact($contact_id);
	redirect($_SERVER['HTTP_REFERER']);
	}

    function viewclergy_details()
    {
        
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->viewclergy_detailsCount($searchText);

			$returns = $this->paginationCompress ( "viewclergy_details/", $count, 50 );

            $data['userRecords'] = $this->user_model->viewclergy_details($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Clergy Details : View Clergy Details';

            $this->loadViews("viewclergy_details", $this->global, $data, NULL);
    }
    function view_clergy_application()
    {

            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->view_clergy_applicationCount($searchText);

			      $returns = $this->paginationCompress ( "view_clergy_application/", $count, 50 );

            $data['userRecords'] = $this->user_model->view_clergy_application($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Clergy Application form : View Clergy application form';

            $this->loadViews("view_clergy_application", $this->global, $data, NULL);
    }
    function user_view_clergy_application()
    {
    
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->user_view_clergy_applicationCount($searchText);

			      $returns = $this->paginationCompress ( "user_view_clergy_application/", $count, 50 );

            $data['userRecords'] = $this->user_model->user_view_clergy_application($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'User Clergy Application form : User View Clergy application form';

            $this->loadViews("user_view_clergy_application", $this->global, $data, NULL);
    }
    function edit_university_application()
    {
    
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->edit_university_applicationCount($searchText);

			      $returns = $this->paginationCompress ( "edit_university_application/", $count, 50 );

            $data['userRecords'] = $this->user_model->edit_university_application($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'User Clergy Application form : User View Clergy application form';

            $this->loadViews("edit_university_application", $this->global, $data, NULL);
    }
    
    function view_entryform()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->view_baptismCount($searchText);

			      $returns = $this->paginationCompress ( "view_baptism/", $count, 50 );

            $data['userRecords'] = $this->user_model->view_baptism($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'View Baptism';

            $this->loadViews("view_baptism", $this->global, $data, NULL);
        }
    }

    function view_bible_application()
    {
        
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->view_bible_applicationCount($searchText);

			      $returns = $this->paginationCompress ( "view_bible_application/", $count, 50 );

            $data['userRecords'] = $this->user_model->view_bible_application($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'University Application form : View Bible application form';

            $this->loadViews("view_bible_application", $this->global, $data, NULL);
    }

public function user_status_changed()
{
    //get hidden values in variables
	$nodue_id = $this->input->post('nodue_id');
	$status = $this->input->post('status');

    //check condition
	if($status == '1'){
		$user_status = '0';
	}
	else{
		$user_status = '1';
	}

	$data = array('status' => $user_status );

	$this->db->where('nodue_id',$nodue_id);
	$this->db->update('nodue_application', $data); //Update status here

    //Create success measage
	$this->session->set_flashdata('msg',"User status has been changed successfully.");
    $this->session->set_flashdata('msg_class','alert-success');

    return redirect('view_nodue_application');
}

public function clergy_user_status_changed()
{
    //get hidden values in variables
	$clergy_appli_id = $this->input->post('clergy_appli_id');
	$status = $this->input->post('status');

    //check condition
	if($status == '2'){
		$user_status = '2';
	}
	else if($status == '3'){
		$user_status = '3';
	}

	$data = array('status' => $user_status );

	$this->db->where('clergy_appli_id',$clergy_appli_id);
	$this->db->update('clergy_application_form', $data); //Update status here

    //Create success measage
	$this->session->set_flashdata('msg',"User status has been changed successfully.");
    $this->session->set_flashdata('msg_class','alert-success');

    return redirect('view_clergy_application');
}

public function bible_user_status_changed()
{
    //get hidden values in variables
	$bible_app_id = $this->input->post('bible_app_id');
	$status = $this->input->post('status');

    //check condition
	if($status == '2'){
		$user_status = '2';
	}
	else if($status == '3'){
		$user_status = '3';
	}

	$data = array('status' => $user_status );

	$this->db->where('bible_app_id',$bible_app_id);
	$this->db->update('bible_univ_app', $data); //Update status here

    //Create success measage
	$this->session->set_flashdata('msg',"User status has been changed successfully.");
    $this->session->set_flashdata('msg_class','alert-success');

    return redirect('view_bible_application');
}

public function user_status_changed_bill()
{
    //get hidden values in variables
	$bill_id = $this->input->post('bill_id');
	$status = $this->input->post('status');

    //check condition
	if($status == '1'){
		$user_status = '0';
	}
	else{
		$user_status = '1';
	}

	$data = array('status' => $user_status );

	$this->db->where('bill_id',$bill_id);
	$this->db->update('bill_application', $data); //Update status here

    //Create success measage
	$this->session->set_flashdata('msg',"User status has been changed successfully.");
    $this->session->set_flashdata('msg_class','alert-success');

    return redirect('view_bill_application');
}

    function view_nodue_application()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->view_nodue_applicationCount($searchText);

			      $returns = $this->paginationCompress ( "view_nodue_application/", $count, 50 );

            $data['userRecords'] = $this->user_model->view_nodue_application($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Clergy Application form : View Bible application form';

            $this->loadViews("view_nodue_application", $this->global, $data, NULL);
        }
    }
    
    function view_bill_application()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->view_bill_applicationCount($searchText);

			      $returns = $this->paginationCompress ( "view_bill_application/", $count, 50 );

            $data['userRecords'] = $this->user_model->view_bill_application($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Bill Application form : View Bill application form';

            $this->loadViews("view_bill_application", $this->global, $data, NULL);
        }
    }

    function view_human_rights()
    {
      
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->view_human_rightsCount($searchText);

			$returns = $this->paginationCompress ( "view_human_rights/", $count, 50 );

            $data['userRecords'] = $this->user_model->view_human_rights($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'Human Rights : View Human Rights';

            $this->loadViews("view_human_rights", $this->global, $data, NULL);
    }


	 function viewblog()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->viewblogCount($searchText);

			$returns = $this->paginationCompress ( "viewblog/", $count, 50 );

            $data['userRecords'] = $this->user_model->viewblog($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CodeInsect : View blog';

            $this->loadViews("viewblog", $this->global, $data, NULL);
        }
    }

	function viewmanufacturesreg()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->viewmanufacturesregCount($searchText);

			$returns = $this->paginationCompress ( "viewmanufacturesreg/", $count, 50 );

            $data['userRecords'] = $this->user_model->viewmanufacturesreg($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CodeInsect : View blog';

            $this->loadViews("viewmanufacturesreg", $this->global, $data, NULL);
        }
    }

	function viewhomeslide()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->viewhomeslideCount($searchText);

			$returns = $this->paginationCompress ( "viewhomeslide/", $count, 50 );

            $data['slidedata'] = $this->user_model->viewhomeslide($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CodeInsect : View Home Slide';

            $this->loadViews("viewhomeslide", $this->global, $data, NULL);
        }
    }

	function viewmanufactures()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->viewmanufacturesCount($searchText);

			$returns = $this->paginationCompress ( "viewmanufactures/", $count, 50 );

            $data['userRecords'] = $this->user_model->viewmanufactures($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CodeInsect : View blog';

            $this->loadViews("viewmanufactures", $this->global, $data, NULL);
        }
    }

	function viewcontactus()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->viewcontactusCount($searchText);

			$returns = $this->paginationCompress ( "viewcontactus/", $count, 50 );

            $data['userRecords'] = $this->user_model->viewcontactus($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CodeInsect : View Contact us';

            $this->loadViews("viewcontactus", $this->global, $data, NULL);
        }
    }

    function userListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');

            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->user_model->userListingCount($searchText);

			$returns = $this->paginationCompress ( "userListing/", $count, 5 );

            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("users", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();

            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }

    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]|xss_clean');

            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');

                $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId, 'name'=> $name,
                                    'mobile'=>$mobile, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));

                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);

                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New User created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }

                redirect('addNew');
            }
        }
    }


    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if($this->isAdmin() == TRUE || $userId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('userListing');
            }

            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);

            $this->global['pageTitle'] = 'CodeInsect : Edit User';

            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }


    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');

            $userId = $this->input->post('userId');

            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]|xss_clean');

            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');

                $userInfo = array();

                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId,
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }

                $result = $this->user_model->editUser($userInfo, $userId);

                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }

                redirect('userListing');
            }
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));

            $result = $this->user_model->deleteUser($userId, $userInfo);

            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

    /**
     * This function is used to load the change password screen
     */
    function loadChangePass()
    {
        $this->global['pageTitle'] = 'CodeInsect : Change Password';

        $this->loadViews("changePassword", $this->global, NULL, NULL);
    }


    /**
     * This function is used to change the password of the user
     */
    function changePassword()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');

        if($this->form_validation->run() == FALSE)
        {
            $this->loadChangePass();
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');

            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);

            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('loadChangePass');
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));

                $result = $this->user_model->changePassword($this->vendorId, $usersData);

                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }

                redirect('loadChangePass');
            }
        }
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';

        $this->loadViews("404", $this->global, NULL, NULL);
    }


        function AddBlog()
	{
 $this->global['pageTitle'] = 'Upkeepe : Add Blog';
     $this->loadViews("AddBlog", $this->global, NULL);
    }

function InsertBlog()
    {
  $this->load->library('upload');
        $this->load->helper('form');
        $this->load->helper('url');

        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('blog_tittle','blog_tittle','required');
            $this->form_validation->set_rules('blog_content','blog_content','required');
            $this->form_validation->set_rules('signature_title','signature_title','required');
            $this->form_validation->set_rules('signaturecontent','signaturecontent','trim|required');
            $this->form_validation->set_rules('seo_tittle','seo_tittle','trim|required');

            $this->form_validation->set_rules('seo_description','seo_description','trim|required');
            $this->form_validation->set_rules('seo_keywords','seo_keywords','trim|required');
              $this->form_validation->set_rules('seo_focuskeywords','seo_focuskeywords','trim|required');

            if($this->form_validation->run() == FALSE)
            {
                $this->AddBlog();
            }
            else
            {

            $data['url']= url_title($this->input->post('blog_tittle'), 'dash', true);
            $data['blog_tittle'] = $this->input->post('blog_tittle', TRUE);
			$data['blog_content'] = $this->input->post('blog_content', TRUE);
			$data['blog_cat'] = $this->input->post('blog_cat', TRUE);
            $data['post_date'] = $this->input->post('post_date', TRUE);
			$data['signature_title'] = $this->input->post('signature_title', TRUE);
			$data['signaturecontent'] = $this->input->post('signaturecontent', TRUE);
			$data['seo_tittle'] = $this->input->post('seo_tittle', TRUE);
			$data['seo_description'] = $this->input->post('seo_description', TRUE);
			$data['seo_keywords'] = $this->input->post('seo_keywords', TRUE);
			$data['seo_focuskeywords'] = $this->input->post('seo_focuskeywords', TRUE);


    $config['upload_path'] = './assets/uploads/blog/';
    //$config['max_size'] = '102400';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['overwrite'] = FALSE;
    $config['remove_spaces'] = TRUE;
    $config['encrypt_name'] = TRUE;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('blog_photo'))
    {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        //redirect('controller/method');
    }
    else
    {
        $this->session->set_flashdata('success', 'Blog Has been Uploaded');
 $upload_data = $this->upload->data();
        //redirect('controller/method');
       //$img = $data['file_name'];
$data['blog_photo'] =$upload_data['file_name'];

    }
    if (!$this->upload->do_upload('signature_image'))
    {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        //redirect('controller/method');
    }
    else
    {
        $this->session->set_flashdata('success', 'Blog Has been Uploaded');
 $upload_data = $this->upload->data();
        //redirect('controller/method');
       //$img = $data['file_name'];
$data['signature_image'] =$upload_data['file_name'];

    }
      $this->user_model->store_pic_blog($data);

				redirect('AddBlog');


            }
        }
    }


}

?>
