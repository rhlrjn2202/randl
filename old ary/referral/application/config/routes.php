<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login";
$route['404_override'] = 'errors';


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['GeneratePdf'] = 'user/GeneratePdf';
$route['viewclergy_details'] = 'user/viewclergy_details';
$route['view_clergy_application'] = 'user/view_clergy_application';
$route['user_view_clergy_application'] = 'user/user_view_clergy_application';
$route['edit_university_application'] = 'user/edit_university_application';
$route['view_bible_application'] = 'user/view_bible_application';
$route['view_entryform'] = 'user/view_entryform';
$route['view_nodue_application'] = 'user/view_nodue_application';
$route['view_bill_application'] = 'user/view_bill_application';
$route['view_human_rights'] = 'user/view_human_rights';
$route['viewproduct/(:num)'] = "user/viewproduct/$1";
$route['viewblog'] = 'user/viewblog';
$route['viewblog/(:num)'] = "user/viewblog/$1";
$route['viewmanufactures'] = 'user/viewmanufactures';
$route['viewmanufactures/(:num)'] = "user/viewmanufactures/$1";
$route['viewcontactus'] = 'user/viewcontactus';
$route['viewcontactus/(:num)'] = "user/viewcontactus/$1";
$route['viewmanufacturesreg'] = 'user/viewmanufacturesreg';
$route['viewmanufacturesreg/(:num)'] = "user/viewmanufacturesreg/$1";
$route['viewhomeslide'] = 'user/viewhomeslide';
$route['viewhomeslide/(:num)'] = "user/viewhomeslide/$1";
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['Add_categories'] = "user/Add_categories";
$route['Add_aboutus'] = "user/Add_aboutus";
$route['add_income'] = "user/add_income";
$route['View_Income'] = "user/View_Income";
$route['Clergy_Expiring_report'] = "user/Clergy_Expiring_report";
$route['Clergy_Birthday_report'] = "user/Clergy_Birthday_report";
$route['Human_Rights_Expiring_report'] = "user/Human_Rights_Expiring_report";
$route['Human_Rights_Birthday_report'] = "user/Human_Rights_Birthday_report";
$route['manage_contactus'] = "user/manage_contactus";
$route['add_short_about'] = "user/add_short_about";
$route['add_privacy_policy'] = "user/add_privacy_policy";
$route['add_disclaimer'] = "user/add_disclaimer";
$route['add_terms_conditions'] = "user/add_terms_conditions";
$route['Add_gallery'] = "user/Add_gallery";
$route['add_banner_image'] = "user/add_banner_image";
$route['add_rightbar_ad_image'] = "user/add_rightbar_ad_image";
$route['Add_clergy_details'] = "user/Add_clergy_details";
$route['Add_clergy_application'] = "user/Add_clergy_application";
$route['Add_bible_application'] = "user/Add_bible_application";
$route['Add_no_due_application'] = "user/Add_no_due_application";
$route['Add_bill_application'] = "user/Add_bill_application";
$route['add_human_rights'] = "user/add_human_rights";
$route['Add_Manufactures'] = "user/Add_Manufactures";
$route['Add_techupdate'] = "user/Add_techupdate";
$route['add_baptism'] = "user/add_baptism";
$route['user_status_changed'] = "user/user_status_changed";
$route['clergy_user_status_changed'] = "user/clergy_user_status_changed";
$route['bible_user_status_changed'] = "user/bible_user_status_changed";
$route['user_status_changed_bill'] = "user/user_status_changed_bill";
$route['editproduct/(:num)'] = "user/editproduct/$1";
$route['editclergy_details/(:num)'] = "user/editclergy_details/$1";
$route['editclergy_appli/(:num)'] = "user/editclergy_appli/$1";
$route['edituniversity_appli/(:num)'] = "user/edituniversity_appli/$1";
$route['editclergy_application/(:num)'] = "user/editclergy_application/$1";
$route['editbible_application/(:num)'] = "user/editbible_application/$1";
$route['editbaptism/(:num)'] = "user/editbaptism/$1";
$route['editnodue_application/(:num)'] = "user/editnodue_application/$1";
$route['editbill_application/(:num)'] = "user/editbill_application/$1";
$route['edithuman_rights/(:num)'] = "user/edithuman_rights/$1";
$route['editblog/(:num)'] = "user/editblog/$1";
$route['editcontactus/(:num)'] = "user/editcontactus/$1";
$route['edithomeslide/(:num)'] = "user/edithomeslide/$1";
$route['editmanufacturers/(:num)'] = "user/editmanufacturers/$1";

$route['Iframe'] = 'user/Iframe';

$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['deletedata/(:num)'] = "user/deletedata/$1";
$route['deleteblog/(:num)'] = "user/deleteblog/$1";
$route['deletemanu/(:num)'] = "user/deletemanu/$1";
$route['deletecontact/(:num)'] = "user/deletecontact/$1";
$route['deleteslide/(:num)'] = "user/deleteslide/$1";
$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";


$route['AddBlog'] = "user/AddBlog";
$route['add_countries'] = "user/add_countries";
$route['InsertBlog'] = "user/InsertBlog";

$route['Electrician'] = "person/Electrician";
$route['plumber'] = "plumber/plumber";
$route['Carpenter'] = "carpender/Carpenter";
$route['ACrepairs'] = "acrepairs/ACrepairs";
$route['CCTV'] = "cctv/CCTV";
$route['ComputerServices'] = "computerservices/ComputerServices";
$route['MailManagement'] = "mailmanagement/MailManagement";
$route['Pgmanagement'] = "pgmanagement/Pgmanagement";
$route['Painting'] = "painting/Painting";
$route['Cleaning'] = "cleaning/Cleaning";
$route['Pestcontrol'] = "pestcontrol/Pestcontrol";
/* End of file routes.php */
/* Location: ./application/config/routes.php */