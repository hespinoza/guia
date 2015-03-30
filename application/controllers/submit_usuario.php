<?php
class Submit_usuario extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('submit_usuario_model');
        $this->load->library(array('encrypt', 'form_validation'));
        $this->load->helper(array('form', 'url'));
    }
    
    function index()
    {
        $this->load->view('crear_usuario_view');
    }
    
    //funcion para procesar el formulario
    function insertar_comentarios()
    {
        //si se ha pulsado el botón submit validamos el formulario con codeIgniter
        if($this->input->post('submit'))
        {
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            //hacemos las comprobaciones que deseemos en nuestro formulario
            $this->form_validation->set_rules('nombre','Nombre','required');
            $this->form_validation->set_rules('apellido','Apellido','required');
            $this->form_validation->set_rules('correo','Correo','required');
            $this->form_validation->set_rules('pais','Pais','required');
                       
            //validamos que se introduzcan los campos requeridos con la función de ci required
            $this->form_validation->set_message('required', 'El campo <b>%s</b> es obligatorio');
                  
            
            if ($this->form_validation->run() == FALSE)
            {
                //si no pasamos la validación volvemos al formulario mostrando los errores
                $this->index();
            }
            //si pasamos la validación correctamente pasamos a hacer la inserción en la base de datos
            else 
            {
                $nombre = $this->input->post('nombre');    
                $apellido = $this->input->post('apellido');   
                $cargo = $this->input->post('cargo'); 
                $pais = $this->input->post('pais');     
                $correo = $this->input->post('correo');
                $skype = $this->input->post('skype');
                $anexo = $this->input->post('anexo');
                $directo = $this->input->post('directo');
                
              
                //ahora procesamos los datos hacía el modelo que debemos crear
                $nueva_insercion = $this->submit_usuario_model->nuevo_comentario($nombre,$apellido,$cargo,$pais,$correo,$skype,$anexo,$directo);
            redirect(base_url().master);
            }
        }
    }

      function editar_comentarios()
    {
        //si se ha pulsado el botón submit validamos el formulario con codeIgniter
        if($this->input->post('submit'))
        {
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            //hacemos las comprobaciones que deseemos en nuestro formulario
            $this->form_validation->set_rules('nombre','Nombre','required');
            $this->form_validation->set_rules('apellido','Apellido','required');
            $this->form_validation->set_rules('correo','Correo','required');
            $this->form_validation->set_rules('pais','Pais','required');
                       
            //validamos que se introduzcan los campos requeridos con la función de ci required
            $this->form_validation->set_message('required', 'El campo <b>%s</b> es obligatorio');
                  
            
            if ($this->form_validation->run() == FALSE)
            {
                //si no pasamos la validación volvemos al formulario mostrando los errores
                $this->index();
            }
            //si pasamos la validación correctamente pasamos a hacer la inserción en la base de datos
            else 
            {
                $hidden = $this->input->post('hidden');
                $nombre = $this->input->post('nombre');    
                $apellido = $this->input->post('apellido');   
                $cargo = $this->input->post('cargo'); 
                $pais = $this->input->post('pais');     
                $correo = $this->input->post('correo');
                $skype = $this->input->post('skype');
                $anexo = $this->input->post('anexo');
                $directo = $this->input->post('directo');
                
              
                //ahora procesamos los datos hacía el modelo que debemos crear
                $nueva_edicion = $this->submit_usuario_model->editar_comentario($hidden,$nombre,$apellido,$cargo,$pais,$correo,$skype,$anexo,$directo);
            redirect(base_url().master);
            }
        }
    }
}
 
/*fin del archivo comentarios*/