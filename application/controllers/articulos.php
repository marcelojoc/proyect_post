<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
   $this->load->model(array('Persona_model'));
    $this->output->enable_profiler(TRUE); 

    $this->load->library('calendar');

    $this->load->database();
     
   
  }

  function index()
  {
    //$this->load->model('Persona_model');
    $quien['name']=$this->Persona_model->get_nombre();
    $this->load->view('mapa.tpl.php', $quien);

    $this->load->view('page/_menu');
  }

  function comentario()
  {
    $nombre= $this->Persona_model->get_nombre();
    // echo "esto es un comentario ...no una prueba <br>";
    //
    // echo "tu eres:".$nombre." y tienes :" .$edad. "Años";
    $dato = array('nombre'  =>$nombre,
                  'apellido'=> "contreras",
                  'edad'    => '50');
    $this->load->view('view_prueba', $dato);
    $this->load->view('page/_menu');
  }

  function lista()
  {

    $resul['datos'] = $this->Persona_model->get_datos();
    $this->load->view('page/_lista_viaje', $resul);

    
  }


}
