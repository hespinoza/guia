<?php
 class Eliminar_registro_model extends CI_Model {
 
 function Eliminar_registro_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
public function index($variable) {
	$query = $this->db->query("delete from empleados WHERE id = '$variable'"); 

 }








 }
 ?>