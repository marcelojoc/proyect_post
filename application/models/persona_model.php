<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

function get_nombre(){
  $valor= "mi nombre es marcelo, trabajando en CodeIgniter";
  return $valor;
}


public function get_datos()
{
      # code...
      $consulta = $this->db->query('SELECT * FROM viajes');
      $consulta2 = $this->db->get('viajes');

		if($consulta2->num_rows() > 0){
			foreach ($consulta2->result() as $fila){
				$data[] = $fila;
			}
			return $data;
		}else{
			return FALSE;
		}
}


}
