<?php 
class Submit_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //creamos la funcion nuevo comentario que será la que haga la inserción a la base
    //de datos pasándole los datos a introducir en forma de array, siempre al estilo ci
    function nuevo_comentario($nombre,$apellido,$cargo,$pais,$correo,$skype,$anexo,$directo)
    {
        $data = array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'cargo' => $cargo,
                'pais' => $pais,
                'correo' => $correo,
                'skype' => $skype,
                'anexo' => $anexo,
                'directo' => $directo,
                );
        //aqui se realiza la inserción, si queremos devolver algo deberíamos usar delantre return
        //y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
        //envíar un email, en fin, lo que deseemos hacer
        return $this->db->insert('empleados',$data);
    }

    function editar_comentario($hidden,$nombre,$apellido,$cargo,$pais,$correo,$skype,$anexo,$directo)
    {
        $data = array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'cargo' => $cargo,
                'pais' => $pais,
                'correo' => $correo,
                'skype' => $skype,
                'anexo' => $anexo,
                'directo' => $directo,
                );
        $this->db->where('id', $hidden);
        return $this->db->update('empleados',$data);
    }
}
 
/*fin del archivo comentarios model*/