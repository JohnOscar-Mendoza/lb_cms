<?php

require_once APPPATH.'libraries/vendor/autoload.php';

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;

class Login_model extends CI_Model
{
	public function login($data)
	{
		$app_id = 'yPPe3Uv46pKNnrTc7I6xArFHi8EQ8cdz4Kw3JGkX';
		$rest_key = '7PJB1F4g8aFSv5f8e0gSMwi9Ghv2AeAkTW0O50pe';
		$master_key = 'y95bItd5BI6Btqos1De4m8HZUllSM3HMcOs04WWB';
		try
		{
			ParseClient::initialize( $app_id, $rest_key, $master_key );
			$user = ParseUser::logIn($data["username"],$data["password"]);
			$currentUser = ParseUser::getCurrentUser();
			//die('<pre>'.print_r($currentUser, true));
			return $currentUser;
		}
		catch(ParseException $e)
		{
			return false;
		}

	}
	public function getCurrentUser()
	{

	}
	public function logout()
	{
		ParseUser::logOut();
	}
}

?>