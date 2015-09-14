<?php

require_once APPPATH.'libraries/vendor/autoload.php';

class Earnings_model extends CI_Model
{
	public function all()
	{
		$this->db->join('Orders','OrderDetails.orderId','inner');
		$query = $this->db->get('OrderDetails');
		return $query->result_array();
	}
	
}

?>