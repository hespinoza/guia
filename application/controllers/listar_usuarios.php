<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */

class Listar_usuarios extends CI_Controller {
 
 public function __construct() {
    parent::__construct();
        $this->load->model('listar_usuarios_model');
        $this->load->library(array('encrypt','session'));
        $this->load->helper(array('form', 'url'));
 }
 
 public function index() {
     //cargamos el modelo
     if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'master')
		{
			redirect(base_url().'login');
		}
 
 $data['page_title'] = "Lista de Usuarios";
 
 //Obtener datos de la tabla 'users'
 $usuarios = $this->listar_usuarios_model->getData(); //llamamos a la función getData() del modelo creado anteriormente.
 
 $data['usuarios'] = $usuarios;
 
 //load de vistas
 $this->load->view('listar_usuarios_view', $data); //llamada a la vista, que crearemos posteriormente
 }
 
}
 
?>