<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']   = 'MainController/index';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

$route['init'] = 'InitController/index';

$route['login'] = 'LoginController/index';


$route['admin/dashboard'] = 'DashboardController/index';

$route['admin/component/index']  = 'ComponentController/index';
$route['admin/component/create'] = 'ComponentController/create';

$route['admin/carousel/index']         = 'CarouselController/index';
$route['admin/carousel/store']         = 'CarouselController/store';
$route['admin/carousel/list_sequence'] = 'CarouselController/list_sequence';
$route['admin/carousel/up']            = 'CarouselController/up';
$route['admin/carousel/down']          = 'CarouselController/down';
$route['admin/carousel/destroy']       = 'CarouselController/destroy';

$route['admin/about_us/index']  = 'AboutUsController/index';
$route['admin/about_us/update'] = 'AboutUsController/update';

$route['admin/why_us/index']  = 'WhyUsController/index';
$route['admin/why_us/update'] = 'WhyUsController/update';

$route['admin/our_services/index']  = 'OurServicesController/index';
$route['admin/our_services/store']  = 'OurServicesController/store';
$route['admin/our_services/update'] = 'OurServicesController/update';
$route['admin/our_services/delete'] = 'OurServicesController/delete';
$route['admin/our_services/show']   = 'OurServicesController/show';

$route['admin/contact/index']  = 'ContactController/index';
$route['admin/contact/update'] = 'ContactController/update';

# UTILITY

########## UTILITY/ACCOUNT MANAGEMENT
$route['admin/account/index']   = 'AccountController/index';
$route['admin/account/create']  = 'AccountController/create';
$route['admin/account/destroy'] = 'AccountController/destroy';
$route['admin/account/reset']   = 'AccountController/reset';

# DATATABLES
$route['datatables/datatables_account']  = 'AccountController/datatables';
$route['datatables/datatables_carousel'] = 'CarouselController/datatables';