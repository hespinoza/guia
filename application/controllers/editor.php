<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Editor extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') == 'suscriptor')
		{
			redirect(base_url().'login');
		}
		$data['titulo'] = 'Bienvenido de nuevo ' .$this->session->userdata('perfil');
		$this->load->view('editor_view',$data);
	}
}
