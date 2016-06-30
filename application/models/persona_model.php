<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

function get_nombre(){
  $valor= "mi nombre es marcelo, trabajando en CodeIgniter";
  return $valor;
}
}
