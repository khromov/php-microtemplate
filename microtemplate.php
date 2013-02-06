<?php
	/* If true, doesn't throw an exception when short tags are disabled. Simply modify the default function value
	 * to $suppress_shorttag_error=TRUE if you don't want to use short tags. */
	$shorttag_suppress_errors=FALSE;
	
	/**
	 * Templating function. See example.php for usage.
	 * 
	 * @param $file Template file to load, omitting .php extension
	 * @param $v Array of variables for use in the template (Example: <?=$v['example_param']?>)
	 * @param $prefix Template directory prefix. (optional)
	 * @param $suppress_shorttag_error 
	 * 
	 * @throws Exception $e If the template file is not found.
	 */
	function t($file, $v = array(), $prefix='templates/')
	{		
		ob_start();
		
		if(file_exists($prefix.$file.'.php'))
			include($prefix.$file.'.php');
		else
			throw new Exception('Template file '. $prefix . $file .'.php does not exist.');
		
		return ob_get_clean();
	}
	
	/**
	 * Tests if short tags are enabled.
	 */
	if(!ini_get('short_open_tag') && !$shorttag_suppress_errors)
	{
		throw new Exception('PHP short tags are disabled, please set the short_open_tag directive to "On" in your php.ini');
	}
