<?php
 class Chile_model extends CI_Model {
 
 function Chile_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $usuarios = $this->db->query(" select * from empleados where pais like 'chile' "); 

 return $usuarios->result(); 
 }
}
?>