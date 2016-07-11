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

                       $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
        /* ------------------ */

        $this->load->library('grocery_CRUD');



    }

    function index()
    {

        $this->grocery_crud->set_table('viajes');


        $this->grocery_crud->columns('nombre','lugar');

        $this->grocery_crud->set_rules('prueba', 'prueba', 'exact_length[8]');
 
$this->grocery_crud->required_fields('lugar');// campo requerido al crear un nuevo registro


$this->grocery_crud->set_subject('Nuevo elemento'); //cuando pones add aparece en el titulo

$this->grocery_crud->display_as('nombre','El_nombre')
                   ->display_as('lugar','the_lugar'); // cambia el nombre del campo de la tabla por el que quiero




        $output = $this->grocery_crud->render();

        $this->_example_output($output);

    //    echo "<pre>";
    //    print_r($output);
    //    echo "</pre>";
    //    die();

    }



    function _example_output($output = null)

    {
        $this->load->view('crud_view.php',$output);
    }


}