<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'welcome/login';

//ajax route.
$route['login-user'] = 'api/login_user';

$route['save-department'] = 'api/save_departments';
$route['delete-department'] = 'api/delete_department';

$route['save-hod-details'] = 'api/save_hod_details';
$route['save-faculty'] = 'api/save_faculty';
$route['save-acr'] = 'api/save_acr';
$route['save-timetable'] = 'api/save_timetable';

$route["update-university-profile"] = "api/update_university_profile";
$route['update-faculty-profile']='api/update_faculty_profile';
$route['update-hod-profile']='api/update_hod_profile';
$route['save-university-img'] = 'api/save_university_image';
$route['save-faculty-img'] = 'api/save_faculty_image';
$route['save-activities'] = 'api/save_activities';
$route['delete-activity'] = 'api/delete_activity';
$route['delete-timetable'] = 'api/delete_timetable';
$route['update-qualifications'] = 'api/update_qualifications';
$route['get-faculty-data']  = 'api/get_faculty_data';
$route['verify-activity'] = 'api/verify_activity';
$route['teaching-process-delete'] = 'api/teaching_process_delete';
$route['teaching-process-add'] = 'api/teaching_process_add';
//$route['upload-time-table'] = 'api/save_timetable';

//static routes
$route['add-institute'] = 'welcome/add_institute';
$route['add-institution'] = 'welcome/add_institution';
$route['add-department'] = 'welcome/add_department';
$route['add_hod'] = 'welcome/add_hod';
$route['faculty_promotion'] = 'welcome/faculty_promotion';
$route['add_institution'] = 'welcome/add_institution';
$route['user/dashboard'] = 'welcome/dashboard';
$route['add-university'] = 'welcome/add_university';
$route['add-hod'] = 'welcome/add_hod';
$route['add-faculty'] = 'welcome/HOD_add_faculty';
$route['add_department'] = 'welcome/add_department';
$route['hod_details'] = 'welcome/hod_details';
$route['faculty-details'] = 'welcome/faculty';
$route['university-details'] = 'welcome/university_admin';
$route['institute-details'] = 'welcome/institute_admin';
$route['faculty-list'] = 'welcome/HOD_show_faculty';
$route['faculty-qualifications'] = 'welcome/faculty_qualifications';
$route['faculty-activity'] = 'welcome/faculty_activity';
$route['upload-file'] = 'welcome/import';
$route['feedback'] = 'welcome/feedback';
$route['add-faculty-technical'] = 'welcome/add_faculty_technical';
$route['faculty-qualifications-technical'] = 'welcome/faculty_qualifications_technical';
$route['feedback-dashboard'] = 'welcome/feedback_dashboard';
