<?php
 class Colombia_model extends CI_Model {
 
 function Colombia_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $usuarios = $this->db->query(" select * from empleados where pais like 'colombia' "); 

 return $usuarios->result(); 
 }
}
?>