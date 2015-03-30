<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chile extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('chile_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == 'master')
		{
			redirect(base_url().'login');
		}
		$usuarios = $this->chile_model->getData(); 
		 $data['usuarios'] = $usuarios;
		 $this->load->view('chile_view',$data);

	}
}
?>