<?php

class Cars_model extends CI_Model
{

	public function add($data)
	{

	}//END ADD

	public function view($ownerId)
	{
		$query = urlencode('where={"ownerId":{"__type":"Pointer","className":"_User","objectId":"'.$ownerId.'"}, "isRemoved":false}');
		//$array = array("include" => "ownerId");
		//$query = http_build_query($array);
		$url = 'https://api.parse.com/1/classes/Car?'.$query;

		$app_id = 'yPPe3Uv46pKNnrTc7I6xArFHi8EQ8cdz4Kw3JGkX';
		$rest_key = '7PJB1F4g8aFSv5f8e0gSMwi9Ghv2AeAkTW0O50pe';
		$master_key = 'y95bItd5BI6Btqos1De4m8HZUllSM3HMcOs04WWB';

		$headers = array(
		    "Content-Type: application/json",
		    "X-Parse-Application-Id: $app_id",
		    "X-Parse-REST-API-Key: $rest_key"
		);

	    $handle = curl_init(); 

		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

	    $data = curl_exec($handle);
		curl_close($handle);
		$array = json_decode($data);
		return $array;
	}//END VIEW ALL
	public function getOwnerDetails($ownerId)
	{
		$query = urlencode('where={"objectId":"'.$ownerId.'", "isRemoved":false}');
		$url = 'https://api.parse.com/1/classes/_User?'.$query;

		$app_id = 'yPPe3Uv46pKNnrTc7I6xArFHi8EQ8cdz4Kw3JGkX';
		$rest_key = '7PJB1F4g8aFSv5f8e0gSMwi9Ghv2AeAkTW0O50pe';
		$master_key = 'y95bItd5BI6Btqos1De4m8HZUllSM3HMcOs04WWB';

		$headers = array(
		    "Content-Type: application/json",
		    "X-Parse-Application-Id: $app_id",
		    "X-Parse-REST-API-Key: $rest_key"
		);

	    $handle = curl_init(); 

		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

	    $data = curl_exec($handle);
		curl_close($handle);
		$array = json_decode($data);
		return $array;
	}
	public function edit($id, $data)
	{	
		$query =
			'{"username":"'.$data['username'].'", "password":"'.$data['password'].'", 
			"firstName":"'.$data['firstName'].'","lastName":"'.$data['lastName'].'", 
			"email":"'.$data['email'].'", "homeAddress":"'.$data['homeAddress'].'",
			"phoneNumber":"'.$data['phoneNumber'].'","isOperator":false}';

		$url = 'https://api.parse.com/1/classes/_User/'.$id;


		$app_id = 'mVOnxcUCEBLer0c0z7yiXOtyRXcMFrgabGyKEYvY';
		$rest_key = 'JTPoJWY6cVUjlTaLT8oTDJsIMPo3Pcs6b0c3TCl5';
		$master_key = 'huaX4chDLe2E3ajH1lT8LGuFd6iCTDc6covbyyPu';

		$headers = array(
		    "Content-Type: application/json",
		    "X-Parse-Application-Id: $app_id",
		    "X-Parse-Master-Key: $master_key"
		);

	    $handle = curl_init(); 
	    
		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($handle, CURLOPT_POSTFIELDS, $query);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

	    $data = curl_exec($handle);
		curl_close($handle);
		$array = json_decode($data);
		return $array;
	}
	public function get_id($id)
	{
		$query = urlencode('where={"objectId":"'.$id.'"}');
		$url = 'https://api.parse.com/1/classes/_User?'.$query;


		$app_id = 'mVOnxcUCEBLer0c0z7yiXOtyRXcMFrgabGyKEYvY';
		$rest_key = 'JTPoJWY6cVUjlTaLT8oTDJsIMPo3Pcs6b0c3TCl5';
		$master_key = 'huaX4chDLe2E3ajH1lT8LGuFd6iCTDc6covbyyPu';

		$headers = array(
		    "Content-Type: application/json",
		    "X-Parse-Application-Id: $app_id",
		    "X-Parse-REST-API-Key: $rest_key"
		);

	    $handle = curl_init(); 
	    $data= array(
	    	'isOperator' => true
	    	);
		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

	    $data = curl_exec($handle);
		curl_close($handle);
		$array = json_decode($data);
		return $array;
	}
	public function delete($id)
	{
		$query =
			'{"isOperator":false}';

		$url = 'https://api.parse.com/1/classes/_User/'.$id;


		$app_id = 'mVOnxcUCEBLer0c0z7yiXOtyRXcMFrgabGyKEYvY';
		$rest_key = 'JTPoJWY6cVUjlTaLT8oTDJsIMPo3Pcs6b0c3TCl5';
		$master_key = 'huaX4chDLe2E3ajH1lT8LGuFd6iCTDc6covbyyPu';

		$headers = array(
		    "Content-Type: application/json",
		    "X-Parse-Application-Id: $app_id",
		    "X-Parse-Master-Key: $master_key"
		);

	    $handle = curl_init(); 
	    
		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($handle, CURLOPT_POSTFIELDS, $query);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

	    $data = curl_exec($handle);
		curl_close($handle);
		$array = json_decode($data);
		return $array;
	}

}
?>