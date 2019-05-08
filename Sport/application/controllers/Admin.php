<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Africa/Lagos');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database();

    }

    public function index()
    {
        $this->load->view('login');
    }
    
    public function connexion(){
        $form_log = $this->input->post('login');
        $form_mdp = $this->input->post('password');
        $this->load->model('AdminModel');
        $isValid = $this->AdminModel->connexion($form_log,$form_mdp);
        if($isValid){
            
            $this->session->set_userdata('admin',1);  
            $this->load->view('admin');
            
        }
        else{
            $data = array();
            $data['error'] = "Login ou Mot de passe non valide";
            $this->load->view('login', $data);
        }
    }
    
    public function deconnexion(){
        $this->session->sess_destroy();
        $this->index();
    }

    public function article()
    {
	if($this->session->userdata('admin')){
              $crud = new grocery_CRUD();


            $crud->set_table('article');
            $crud->set_field_upload('photo','assets/img');

            

            $output = $crud->render();

            
            $this->_example_output($output);
        }	
        else{
            $this->index();
        }
    }
    
    
    

    public function categorie()
    {
	if($this->session->userdata('admin')){
        $crud = new grocery_CRUD();


        $crud->set_table('categorie');
        $output = $crud->render();
		

        $this->_example_output($output);
        }	
        else{
            $this->index();
        }
    }
    
    public function auteur()
    {
	if($this->session->userdata('admin')){
        $crud = new grocery_CRUD();


        $crud->set_table('auteur');
        $output = $crud->render();
		

        $this->_example_output($output);
        }	
        else{
            $this->index();
        }
    }

    function _example_output($output = null)
    {    
        $this->load->helper('url');
        $this->load->view('admin',$output);
    }
}