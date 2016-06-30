<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('mapa.tpl.php');
    $this->load->view('page/_menu');
  }

  function comentario($nombre)
  {

    // echo "esto es un comentario ...no una prueba <br>";
    //
    // echo "tu eres:".$nombre." y tienes :" .$edad. "Años";
    $dato = array('nombre'  =>$nombre,
                  'apellido'=> "contreras",
                  'edad'    => '50');
    $this->load->view('view_prueba', $dato);
    $this->load->view('page/_menu');
  }

}
