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
$route['language/(:any)'] = 'language/index/$1';
$route['dashboard'] = 'dashboard/home';

$route['dashboard/code/list'] = 'dashboard/code/code_list';
$route['dashboard/code/upload']['get'] = 'dashboard/code/code_upload';
$route['dashboard/code/upload']['post'] = 'dashboard/code/do_code_upload';
$route['dashboard/code/input'] = 'dashboard/code/code_input';
$route['dashboard/code/edit/(:any)'] = 'dashboard/code/code_edit/$1';
$route['dashboard/code/edit']['post']  = 'dashboard/code/do_edit';
$route['dashboard/code/delete']['post'] = 'dashboard/code/do_delete';
$route['dashboard/code/insertImage/(:any)']['get'] = 'dashboard/code/code_upload_image/$1';
$route['dashboard/code/insertImage']['post'] = 'dashboard/code/do_upload_image';
$route['dashboard/code/viewImage/(:any)']['get'] = 'dashboard/code/code_view_image/$1';
$route['dashboard/code/deleteImage']['post'] = 'dashboard/code/code_delete_image';

$route['dashboard/gallery/view/(:any)']['get'] = 'dashboard/gallery/view/$1';
$route['dashboard/gallery/input']['get'] = 'dashboard/gallery/gallery_input';
$route['dashboard/gallery/input']['post'] = 'dashboard/gallery/do_input';
$route['dashboard/gallery/edit/(:any)'] = 'dashboard/gallery/gallery_edit/$1';
$route['dashboard/gallery/edit']['post'] = 'dashboard/gallery/do_edit';
$route['dashboard/gallery/delete']['post'] = 'dashboard/gallery/do_delete';
$route['dashboard/gallery/category'] = 'dashboard/gallery/gallery_category';
$route['dashboard/gallery/category/insert']['post'] = 'dashboard/gallery/do_input_category';
$route['dashboard/gallery/category/edit']['post'] = 'dashboard/gallery/do_edit_category';
$route['dashboard/gallery/category/delete']['post'] = 'dashboard/gallery/do_delete_category';


$route['dashboard/blog/new']['get'] = 'dashboard/blog/new';
$route['dashboard/blog/save']['post'] = 'dashboard/blog/blog_save';
$route['dashboard/blog/edit/(:any)'] = 'dashboard/blog/edit/$1';
$route['dashboard/blog/delete']['post'] = 'dashboard/blog/blog_delete';
$route['dashboard/blog/publish']['post'] = 'dashboard/blog/blog_publish';
$route['dashboard/blog/uploadImage']['post'] = 'dashboard/blog/image_upload';

$route['blog/single/(:any)']['get'] = 'blog/single/$1';
$route['blog/(:any)']['get'] = 'blog/index/$1';