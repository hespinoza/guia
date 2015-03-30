<?php
 class Brasil_model extends CI_Model {
 
 function Brasil_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $usuarios = $this->db->query(" select * from empleados where pais like 'brasil' "); 

 return $usuarios->result(); 
 }
}
?>