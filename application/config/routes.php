<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'auth';
$route['404_override'] = '';

$route['Admin'] = 'C_Admin/Admin/dashboard_vadmin';
$route['Login'] = 'Auth/login';


//user
$route['Data_Ruangan'] = 'C_User/Ruangan';
$route['Data_Penyewaan'] = 'C_User/Penyewaan';
$route['index'] = 'C_User/Penyewaan';
$route['Profiluser'] = 'C_User/Profil/index';
$route['Panduan'] = 'C_User/Panduan/index';

//admin
$route['Ruangan'] = 'C_Admin/Ruangan';
$route['Permohonan'] = 'C_Admin/Permohonan';
$route['Penyewaan'] = 'C_Admin/Penyewaan';
$route['Profil'] = 'C_Admin/Admin/profil';
$route['Laporan'] = 'C_Admin/Penyewaan/laporan';

//input
$route['Tambah_Ruangan'] = 'C_Admin/Ruangan/tambah_ruangan';
$route['Tambah_Penyewaan'] = 'C_User/Penyewaan/tambah_penyewaan';
$route['Tambah_Permohonan'] = 'C_User/Permohonan/tambah_permohonan';

//edit
$route['Edit_Ruangan/(:any)'] = 'C_Admin/Ruangan/ubah_ruangan/';
$route['Edit_Permohonan/(:any)'] = 'C_Admin/Permohonan/ubah_permohonan/';
$route['Edit_Penyewaan/(:any)'] = 'C_Admin/Penyewaan/ubah_penyewaan/';

$route['translate_uri_dashes'] = FALSE;
