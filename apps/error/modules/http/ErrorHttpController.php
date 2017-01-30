<?php
/**
 * ErrorHttpController
 *
 * @package    Dinkly
 * @subpackage AppsErrorErrorController
 * @author     Christopher Lewis <lewsid@lewsid.com>
 */
class ErrorHttpController extends ErrorController 
{
	/**
	 * Handle any URL errors when page is not found
	 * 
	 * @return bool: always returns true on page not found error
	 * 
	 */
	public function load404($parameters = array())
	{
		$this->requested_plugin = null;
		$this->requested_app = null;
		$this->requested_module = null;
		$this->requested_view = null;

		if(isset($parameters['requested_app'])) $this->requested_app = $parameters['requested_app'];

		if(isset($parameters['requested_module'])) $this->requested_module = $parameters['requested_module'];

		if(isset($parameters['requested_view'])) $this->requested_view = $parameters['requested_view'];

		if(isset($parameters['requested_plugin'])) $this->requested_plugin = $parameters['requested_plugin'];

		header("HTTP/1.0 404 Not Found");
		
		return true;
	}
}
