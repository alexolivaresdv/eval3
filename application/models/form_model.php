<?php 
defined('BASEPATH') OR exit('No se permite un acceso directo');

/**
* 
*/
class form_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();//esta linea siempre debe ir 
	}
	//Esta funcion es la que guarda en la base de datos 
	function guardar($data)
	{
		$query = $this->db->insert('usuarios', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido1'], 'correo'=>$data['correo']));

		if ($this->db->affected_rows() > 0) 
		{
			echo "Guardados con éxito";
		}
		else
		{
			echo "Algo salio mal";
		}
	}
}

 ?>