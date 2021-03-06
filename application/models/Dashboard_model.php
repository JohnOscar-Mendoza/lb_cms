<?php
require_once (APPPATH.'libraries/Curl/Curl.php');
require_once (APPPATH.'libraries/vendor/autoload.php');

use \Curl\Curl;
date_default_timezone_set('Asia/Manila');
class Dashboard_model extends CI_Model
{
	public function operatorsCurrentTasks()
	{
		$curl = new Curl();
		$curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
		$curl->setOpt(CURLOPT_RETURNTRANSFER, true);
		$curl->get('http://52.24.133.167/stripe/index.php/api/v1/orders/tasks');
		return $curl->response;
	}

	public function operatorsAvailable()
	{
		$curl = new Curl();
		$curl->setHeader("X-Parse-Application-Id","yPPe3Uv46pKNnrTc7I6xArFHi8EQ8cdz4Kw3JGkX");
		$curl->setHeader("X-Parse-REST-API-Key","7PJB1F4g8aFSv5f8e0gSMwi9Ghv2AeAkTW0O50pe");
		$curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
		$curl->setOpt(CURLOPT_RETURNTRANSFER, true);
		$curl->get('https://api.parse.com/1/classes/UserData', 
			array(
				'where'=>'{"isBusy":false}',
				'include'=>'userId',
				'count'=>1
				)
			);
		
		return $curl->response;
	}

	public function bookingsForTheDay($data)
	{
		$curl = new Curl();
		$curl->setHeader("X-Parse-Application-Id","yPPe3Uv46pKNnrTc7I6xArFHi8EQ8cdz4Kw3JGkX");
		$curl->setHeader("X-Parse-REST-API-Key","7PJB1F4g8aFSv5f8e0gSMwi9Ghv2AeAkTW0O50pe");
		$curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
		$curl->setOpt(CURLOPT_RETURNTRANSFER, true);
		$curl->get('http://52.24.133.167/stripe/index.php/api/v1/orders/unassigned?date='.$data);
		
		return $curl->response;	
	}

	public function appointmentsTimeline()
	{
		$curl = new Curl();
		$curl->setHeader("X-Parse-Application-Id","yPPe3Uv46pKNnrTc7I6xArFHi8EQ8cdz4Kw3JGkX");
		$curl->setHeader("X-Parse-REST-API-Key","7PJB1F4g8aFSv5f8e0gSMwi9Ghv2AeAkTW0O50pe");
		$curl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
		$curl->setOpt(CURLOPT_RETURNTRANSFER, true);
		$curl->get('http://52.24.133.167/stripe/index.php/api/v1/history/appointments');
		
		return $curl->response;	
	}

}
?>


















