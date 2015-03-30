<?php
 class Corp_model extends CI_Model {
 
 function Corp_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $usuarios = $this->db->query(" select * from empleados where pais like 'corp' "); 

 return $usuarios->result(); 
 }
}
?>