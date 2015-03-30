<?php
 class Suscriptor_model extends CI_Model {
 
 function Suscriptor_model() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function getData() {
 $usuarios = $this->db->get('empleados'); //obtenemos la tabla 'users'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.

 return $usuarios->result(); //devolvemos el resultado de lanzar la query.
 }
}
?>