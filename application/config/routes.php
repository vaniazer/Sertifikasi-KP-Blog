<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//ADMIN
$route['login_admin'] = 'Admin/login'; 
$route['ke_login/login'] = 'Admin/proseslogin'; //Data user dibawa ke Controller di function proseslogin_admin
$route['admin/(:any)'] = 'Admin/Ke_HalamanAdmin/$1'; //Data semua folder dalam admin dibawa menuju fungsi ke_halamanAdmin sesaui page
$route['back/regis'] = 'Admin/Ke_Halamanregis'; //menuju ke halaman regis
$route['ke_regis/regis'] = 'Admin/regis'; //pembawaan data ke function regis di controller admin


//TAMBAH
$route['tambah/kategori'] = 'Kategori/tambah'; // ke Controller penambahan kategori
$route['ke_tambah/tambah'] = 'Tambah/tambah'; // ke Controller penambahan tambah



//HAPUS
$route['hapus/kategori/(:num)'] = 'Kategori/hapus/$1'; // ke Controller hapus kategori
$route['hapus/tambah/(:num)'] = 'Tambah/hapus/$1'; // ke Controller hapus resep


//EDIT
$route['edit/kategori/(:num)'] = 'Kategori/edit/$1'; // ke Controller edit kategori sesuai id
$route['edit/tambah/(:num)'] = 'Tambah/edit/$1'; // ke Controller edit resep sesuai id untuk melihat editan
$route['ke_edit/tambah/(:num)'] = 'Tambah/ke_edit/$1'; // ke Controller ke_edit resep yaitu proses setelah di simpan

//LIHAT
$route['lihat/tambah/(:num)'] = 'Tambah/lihat/$1'; // ke Controller lihat resep sesuai id 
$route['lihat_front/tambah/(:num)'] = 'Tambah/lihat_kefront/$1'; // ke Controller lihat resep sesuai id yang berada di front index
$route['lihat/front'] = 'Welcome/index'; // // ke Controller lihat data semua di welcome/index





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
$route['logout'] = 'Welcome/index'; // logout langsung menuju ke front
$route['default_controller'] = 'Welcome/index'; // laman pertama adalah front
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
