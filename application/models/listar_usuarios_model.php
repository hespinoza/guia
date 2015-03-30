<?php
 class Listar_usuarios_model extends CI_Model {
 
 function Listar_usuarios_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
  $query = $this->db->get('empleados');
        if($query->num_rows() > 0)
        {
 
            return $query->result();
 }
}
?>