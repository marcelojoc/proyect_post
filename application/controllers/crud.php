<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Persona_model'));
        $this->output->enable_profiler(false);
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');



    }

    function index()
    {

        $this->grocery_crud->set_table('servidores');
        $output = $this->grocery_crud->render();

        $this->_example_output($output);

//        echo "<pre>";
//        print_r($output);
//        echo "</pre>";
//        die();

    }



    function _example_output($output = null)

    {
        $this->load->view('crud_view.php',$output);
    }


}