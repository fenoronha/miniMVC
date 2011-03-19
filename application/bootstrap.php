<?php 

/*
 * carrega todas as classes que n‹o for view
 * */
foreach (new RecursiveIteratorIterator( new RecursiveDirectoryIterator( APPPATH ), RecursiveIteratorIterator::SELF_FIRST) as $key => $value ) 
{
	if( !$value->isDir() ) 
	{ 
		if( strstr($value->getPathname(), VIEWPATH) == false )
		{
			require_once $value->getPathname();
		}
	}
}

/*
 * faz a magiquinha
 * */
function callControllerURL( $path_info )
{
	if( $path_info != null)
	{
		$_path_info = explode('/',$path_info);
		
		$controller = (isset( $_path_info[1] ) ? $_path_info[1] : null );
		$method		= (isset( $_path_info[2] ) ? $_path_info[2] : null );
		$parameter 	= (isset( $_path_info[3] ) ? $_path_info[3] : null );
		
		if( $method == null )
		{
			$method = 'index';
		}
		
		$controller_class = 'Controller_'.ucfirst($controller); 
		
		$instance = new $controller_class();
		($parameter == null) ? $instance->$method() : $instance->$method( $parameter );
	} else {
		
		$request_uri = explode( '/',$_SERVER['REQUEST_URI']);

		$controller_class = 'Controller_'.ucfirst($request_uri[2]);

		$instance = new $controller_class();
		$instance->index();
	}
	
	
}

callControllerURL( (isset($_SERVER['PATH_INFO'])) ?  $_SERVER['PATH_INFO'] : null );
?>