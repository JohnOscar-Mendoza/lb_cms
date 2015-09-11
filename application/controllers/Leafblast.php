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
			$this->load->model('dashboard_model');
			$date = date('Y-m-d');
			$dashboard = array();
			
			$dashboard['operatorsCurrentTasks'] = $this->dashboard_model->operatorsCurrentTasks();
			$dashboard['operatorsAvailable'] = $this->dashboard_model->operatorsAvailable();
			$dashboard['bookingsForTheDay'] = $this->dashboard_model->bookingsForTheDay($date);
			//die('<pre>'.print_r($dashboard['operatorsCurrentTasks']));
			$dashboard['appointmentsTimeline'] = $this->dashboard_model->appointmentsTimeline();
			
			$this->load->view('index', $dashboard);	
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