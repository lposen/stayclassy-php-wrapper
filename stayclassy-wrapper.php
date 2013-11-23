<?php
/**
 * StayClassy code plus PHP.. YAY!
 * 
 * Requires curl 
 * 
 * @author Loren Posen <loren.posen@gmail.com>
 * @version 0.5
 */

class StayClassy
{

	/**
	 * main private variables
	 */
	public $token;
	public $api_endpoint = 'http://www.stayclassy.org/api1/';



	/**
	 * Create a new instance
	 * @param string $api_key your StayClassy token
	 */
	public function __construct($token)
	{
		$this->token = $token;
		$this->api_endpoint = $api_endpoint;
	}




	/**
	 * Call an API method. Every request needs the API key, so that is added automatically -- you don't need to pass it in.
	 * @param  string $method The API method to call, e.g. 'campaigns'
	 * @param  array  $args   An array of arguments to pass to the method. Will be json-encoded for you.
	 * @return array          Associative array of json decoded API response.
	 */
	public function call($method, $args=array())
	{
		return $this->_raw_request($method, $args);
	}




	/**
	 * Performs the underlying HTTP request. Not very exciting
	 * @param  string $method The API method to be called
	 * @param  array  $args   Assoc array of parameters to be passed
	 * @return array          Assoc array of decoded result
	 */
	private function _raw_request($method, $args=array())
	{
		$args['token'] = $this->token;
		$url = $this->api_endpoint.'/'.$method.'?token='.$token;
		return $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		// curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($args));
		$result = curl_exec($ch);
		curl_close($ch);

		return $result ? json_decode($result, true) : false;
	}

}
