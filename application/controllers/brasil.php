<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Brasil extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('brasil_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == 'master')
		{
			redirect(base_url().'login');
		}
		$usuarios = $this->brasil_model->getData(); 
		 $data['usuarios'] = $usuarios;
		 $this->load->view('brasil_view',$data);

	}
}
?>