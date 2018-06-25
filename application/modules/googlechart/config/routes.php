<?php
$route['googlechart/rmn'] 	= "googlechart/chart_pop";
/*$route['users/account']	= "users/account";
$route['users/signin'] 	= "users/signin";
$route['users/signup'] 	= "users/signup";
$route['users/(:any)'] 	= "users/user/$1";*/





// exaple from projectbbl
/*
// assets
$route['images/(:any)/(:any)/(:any)'] = 'pages/files/images/$3';
$route['images/(:any)/(:any)'] = 'pages/files/images/$2';
$route['images/(:any)'] = 'pages/files/images/$1';
$route['gfx/(:any)/(:any)/(:any)'] = 'pages/files/gfx/$3';
$route['gfx/(:any)/(:any)'] = 'pages/files/gfx/$2';
$route['gfx/(:any)'] = 'pages/files/gfx/$1';
$route['css/(:any)/(:any)/(:any)'] = 'pages/files/css/$3';
$route['css/(:any)/(:any)'] = 'pages/files/css/$2';
$route['css/(:any)'] = 'pages/files/css/$1';
$route['js/(:any)/(:any)/(:any)'] = 'pages/files/js/$3';
$route['js/(:any)/(:any)'] = 'pages/files/js/$2';
$route['js/(:any)'] = 'pages/files/js/$1';

// admin and modules application/modules
$handle = opendir(APPPATH.'modules');
if ($handle)
{
	while ( false !== ($module = readdir($handle)) )
	{
		// make sure we don't map silly dirs like .svn, or . or ..
		if (substr($module, 0, 1) != ".")
		{
			if ( file_exists(APPPATH.'modules/'.$module.'/'.$module.'_routes.php') )
			{
			include(APPPATH.'modules/'.$module.'/'.$module.'_routes.php');
			}

			if ( file_exists(APPPATH.'modules/'.$module.'/controllers/admin.php') )
			{
			$route['admin/'.$module] = $module.'/admin';
			$route['admin/'.$module.'/(.*)'] = $module.'/admin/$1';
			}

			if ( file_exists(APPPATH.'modules/'.$module.'/controllers/'.$module.'.php') )
			{
			$route[$module] = $module;
			$route[$module.'/(.*)'] = $module.'/$1';
			
			$route[myxss/mycsrffdsafasd/]
			
			}
		}
	}
}
// defaults
$route['default_controller'] = 'content/view';
$route['scaffolding_trigger'] = 'scaf';
$route['404_override'] = '';

// cms
$route['(.*)'] = 'content/view';
*/


/* End of file routes.php */
/* Location: ./application/config/routes.php */
?>