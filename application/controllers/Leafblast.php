<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . '/libraries/REST_Controller.php';
date_default_timezone_set("Asia/Manila");
session_start();
class Leafblast extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		if(isset($_SESSION['user']))
		{
			date_default_timezone_set('America/Los_Angeles');
			$this->load->view('index');	
		}
		else
		{
			date_default_timezone_set('America/Los_Angeles');
			session_destroy();
			session_unset();

			redirect(base_url().'index.php/login', 'refresh');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */