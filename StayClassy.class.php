<?php
/**
 * Wrapper for the brand new StayClassy API!
 * 
 * Requires curl
 * 
 * @author Loren Posen <loren.posen@gmail.com>
 * @version 0.5
 */
class StayClassy
{
	/**
	 * Sets up the private variables to be referenced in this class
	 * @var $token, $api_endpoint
	 */
	private $token;
	private $api_endpoint = 'http://www.stayclassy.org/api1';

	/**
	 * Create a new instance, passing in your StayClassy token.
	 * @param string $token : Your token - unique for your organization.
	 */
	function __construct($token)
	{
		$this->token = $token;
	}

	/**
	 * Call an API method. Every request needs the token, so that is added automatically.  The arguments are returned as an associative array.
	 * @param  string $method : The API method to call, e.g. 'account-info'
	 * @param  array  $args   : An array of arguments to pass to the method. Will be url-encoded for you.
	 * @return array          : Associative array of json decoded API responses.
	 */
	public function call($method, $args=array())
	{
		return $this->_raw_request($method, $args);
	}

	/**
	 * Performs the underlying HTTP request. 
	 * @param  string $method : The API method to be called
	 * @param  array  $args   : Assoc array of parameters to be passed
	 * @return array          : Assoc array of decoded result
	 */
	private function _raw_request($method, $args=array())
	{
		$args['token'] = $this->token;
		$url = $this->api_endpoint.'/'.$method;
		array_walk($args , create_function('&$v,$k', '$v = $k."=".$v ;'));
		$url = $url.'?'.htmlentities(urlencode(implode("&",$args)), ENT_QUOTES);
		$url = str_replace("%3D", "=", $url);
		$url = str_replace("%26", "&", $url);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt(CURLINFO_HEADER_OUT, TRUE);
		curl_setopt(CURLOPT_HEADER, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		// curl_setopt(CURLOPT_VERBOSE, $on);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result ? json_decode($result, true) : false;
	}

}
