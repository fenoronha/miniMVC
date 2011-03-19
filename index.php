<?php
//defined('SYSPATH') or die('No direct script access.');
ini_set('display_errors', 1);

define('EXT', '.php');

$application = 'application';
$view		 = 'views';
$controller	 = 'controller';

$lib		 = 'lib';

define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

if( !is_dir($application) && is_dir(DOCROOT.$application) )
{
	$application = DOCROOT.$application;
}

if( !is_dir( $view ) && is_dir( $application.DIRECTORY_SEPARATOR.$view ))
{
	$view = $application.DIRECTORY_SEPARATOR.$view;
}

if( !is_dir( $controller ) && is_dir( $application.DIRECTORY_SEPARATOR.$controller ))
{
	$controller = $application.DIRECTORY_SEPARATOR.$controller;
}

if( !is_dir( $lib ) && is_dir( $application.DIRECTORY_SEPARATOR.$lib ))
{
	$lib = DOCROOT.$lib;
}

define('APPPATH', realpath($application).DIRECTORY_SEPARATOR);
define('VIEWPATH', realpath($view).DIRECTORY_SEPARATOR);
define('CONTROLLERPATH', realpath($controller).DIRECTORY_SEPARATOR);
define('LIBPATH', realpath($lib).DIRECTORY_SEPARATOR);
// Display errors in production mode

// let's get started
require APPPATH . '/bootstrap' . EXT;
