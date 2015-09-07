<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class ModelApi extends REST_Controller {


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
	public function index_get()
	{	
		$query = $this->db->get('models');
		$this->response($query->result_array(), 200);
	}
	public function model_get()
	{
		error_reporting(E_ERROR);
		//die(print_r($this->get(),true));
		if($this->get('id'))
		{
			$this->load->model('api/modelapi_model');
			$this->response($this->modelapi_model->getModelWithId($this->get('id'), 200));
		}
		if($this->get('name'))
		{
			$this->load->model('api/modelapi_model');
			$this->response($this->modelapi_model->getModelWithName($this->get('name'), 200));
		}
		$this->load->model('api/modelapi_model');
		$this->response($this->modelapi_model->view(), 200);
	}
	public function add_post()
	{	
		$this->load->model('api/modelapi_model');
		$this->modelapi_model->add($this->post());
		
		$this->response($this->post(), 201);
	}
	public function edit_put($id)
	{
		$this->load->model('api/modelapi_model');
		$this->modelapi_model->update($this->put(), $id);
		$this->response([
			'returned from update:' => $id,
		]);

	}
	public function remove_delete($id)
	{	
		$this->load->model('api/modelapi_model');
		$this->modelapi_model->remove($id);
		$this->response([
			'returned from remove:' => $id,
		]);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */