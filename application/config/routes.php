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
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for auth
$route['login'] = 'AuthController';
$route['auth/login'] = 'AuthController/login';
$route['home'] = 'HomeController';
$route['home/knowledge/(:any)'] = 'HomeController/knowledge/$1';
$route['logout'] = 'HomeController/logout';

// routes for user
$route['user'] = 'UserController';
$route['user/create'] = 'UserController/create';
$route['user/store'] = 'UserController/store';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/show/(:any)'] = 'UserController/show/$1';
$route['user/update/(:any)'] = 'UserController/update/$1';
$route['user/destroy/(:any)'] = 'UserController/destroy/$1';

// routes for tacit knowledge
$route['tacit_knowledge'] = 'TacitKnowledgeController';
$route['tacit_knowledge/create'] = 'TacitKnowledgeController/create';
$route['tacit_knowledge/store'] = 'TacitKnowledgeController/store';
$route['tacit_knowledge/edit/(:any)'] = 'TacitKnowledgeController/edit/$1';
$route['tacit_knowledge/show/(:any)'] = 'TacitKnowledgeController/show/$1';
$route['tacit_knowledge/show/(:any)/(:any)'] = 'TacitKnowledgeController/show_from_notif/$1/$1';
$route['tacit_knowledge/update/(:any)'] = 'TacitKnowledgeController/update/$1';
$route['tacit_knowledge/destroy/(:any)'] = 'TacitKnowledgeController/destroy/$1';

// routes for explicit knowledge
$route['explicit_knowledge'] = 'ExplicitKnowledgeController';
$route['explicit_knowledge/create'] = 'ExplicitKnowledgeController/create';
$route['explicit_knowledge/store'] = 'ExplicitKnowledgeController/store';
$route['explicit_knowledge/edit/(:any)'] = 'ExplicitKnowledgeController/edit/$1';
$route['explicit_knowledge/show/(:any)'] = 'ExplicitKnowledgeController/show/$1';
$route['explicit_knowledge/show/(:any)/(:any)'] = 'ExplicitKnowledgeController/show_from_notif/$1/$1';
$route['explicit_knowledge/update/(:any)'] = 'ExplicitKnowledgeController/update/$1';
$route['explicit_knowledge/destroy/(:any)'] = 'ExplicitKnowledgeController/destroy/$1';

// routes for tacit knowledge validate
$route['knowledge_validate'] = 'KnowledgeValidateController';
$route['knowledge_validate/create'] = 'KnowledgeValidateController/create';
$route['knowledge_validate/store'] = 'KnowledgeValidateController/store';
$route['knowledge_validate/edit/(:any)'] = 'KnowledgeValidateController/edit/$1';
$route['knowledge_validate/show/(:any)'] = 'KnowledgeValidateController/show/$1';
$route['knowledge_validate/show/tacit/(:any)'] = 'KnowledgeValidateController/show_tacit/$1';
$route['knowledge_validate/show/explicit/(:any)'] = 'KnowledgeValidateController/show_explicit/$1';
$route['knowledge_validate/update/(:any)'] = 'KnowledgeValidateController/update/$1';
$route['knowledge_validate/destroy/(:any)'] = 'KnowledgeValidateController/destroy/$1';
$route['knowledge_validate/accept_by_admin/(:any)'] = 'KnowledgeValidateController/accept_by_admin/$1';
$route['knowledge_validate/reject_by_admin/(:any)'] = 'KnowledgeValidateController/reject_by_admin/$1';

// routes for tacit knowledge Category
$route['knowledge_category'] = 'KnowledgeCategoryController';
$route['knowledge_category/create'] = 'KnowledgeCategoryController/create';
$route['knowledge_category/store'] = 'KnowledgeCategoryController/store';
$route['knowledge_category/edit/(:any)'] = 'KnowledgeCategoryController/edit/$1';
$route['knowledge_category/show/(:any)'] = 'KnowledgeCategoryController/show/$1';
$route['knowledge_category/update/(:any)'] = 'KnowledgeCategoryController/update/$1';
$route['knowledge_category/destroy/(:any)'] = 'KnowledgeCategoryController/destroy/$1';

// routes for about
$route['about'] = 'AboutController';
$route['about/create'] = 'AboutController/create';
$route['about/store'] = 'AboutController/store';
$route['about/edit/(:any)'] = 'AboutController/edit/$1';
$route['about/show/(:any)'] = 'AboutController/show/$1';
$route['about/update/(:any)'] = 'AboutController/update/$1';
$route['about/destroy/(:any)'] = 'AboutController/destroy/$1';

// routes for knowledge
$route['knowledge'] = 'KnowledgeController';
$route['knowledge/create'] = 'KnowledgeController/create';
$route['knowledge/store'] = 'KnowledgeController/store';
$route['knowledge/edit/(:any)'] = 'KnowledgeController/edit/$1';
$route['knowledge/show/(:any)'] = 'KnowledgeController/show/$1';
$route['knowledge/update/(:any)'] = 'KnowledgeController/update/$1';
$route['knowledge/destroy/(:any)'] = 'KnowledgeController/destroy/$1';

// routes for profile
$route['profile'] = 'ProfileController';
$route['profile/create'] = 'ProfileController/create';
$route['profile/store'] = 'ProfileController/store';
$route['profile/edit/(:any)'] = 'ProfileController/edit/$1';
$route['profile/show/(:any)'] = 'ProfileController/show/$1';
$route['profile/update/(:any)'] = 'ProfileController/update/$1';
$route['profile/destroy/(:any)'] = 'ProfileController/destroy/$1';
$route['profile/change_password'] = 'ProfileController/change_password';
$route['profile/update_password'] = 'ProfileController/update_password';