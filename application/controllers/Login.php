<?php
defined('BASEPATH') OR exit('No direct script access allowed');

session_start();
class Login extends CI_Controller {

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

	public $currentUser;
	public function index()
	{
		date_default_timezone_set('America/Los_Angeles');
		if(empty($_SESSION['user']))
		{

			date_default_timezone_set('America/Los_Angeles');
			$this->load->view('login');
		}
		else
		{

			date_default_timezone_set('America/Los_Angeles');
			redirect(base_url().'index.php/leafblast', 'refresh');
		}
	}

	public function submit()
	{
		date_default_timezone_set('America/Los_Angeles');
		if(isset($_SESSION['user']))
		{
			// go to leafblast
			redirect(base_url().'index.php/leafblast', 'refresh');
		}
		else
		{
			// go to login
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$this->load->model('login_model');
				$user = $this->login_model->login($_POST);
				if($user == FALSE)
				{
					// login again

					date_default_timezone_set('America/Los_Angeles');
					redirect(base_url().'index.php/login', 'refresh');
				}
				else
				{
					$_SESSION['user'] = $user;
					date_default_timezone_set('America/Los_Angeles');
					redirect(base_url().'index.php/leafblast', 'refresh');
				}
			}

		}
	}
	public function logout()
	{
		date_default_timezone_set('America/Los_Angeles');

		session_destroy();
		session_unset();
		redirect(base_url().'index.php/login', 'refresh');

	}
}
?>