<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

  
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Categorie');
		$this->load->model('ArticleVue');
		$data['article'] = $this->ArticleVue->getAll();
		$data['categorie'] = $this->Categorie->getAll();
		$this->load->view('acceuil',$data);
	}
	
	public function single($id)
	{
		$this->load->model('Categorie');
		$data['categorie'] = $this->Categorie->getAll();
		
		
		$this->load->model('ArticleVue');
		$data['article'] = $this->ArticleVue->getById($id);
		$this->load->view('single',$data);
	}
	
	public function categorie($id){
		$this->load->model('Categorie');
		$data['categorie'] = $this->Categorie->getAll();
		
		
		$this->load->model('ArticleVue');
		$data['article'] = $this->ArticleVue->getByCategorie($id);
                
                
                $categ = $this->Categorie->getById($id);
                $data['titre'] = $categ[0]['nomCateg'];
                
                
		$this->load->view('acceuil',$data);
	}
	
	public function auteur($id){
		$this->load->model('Categorie');
		$data['categorie'] = $this->Categorie->getAll();
		
		$this->load->model('ArticleVue');
		$data['article'] = $this->ArticleVue->getByAuteur($id);
                
                $this->load->model('Auteur');
                $auteur = $this->Auteur->getById($id);
                $data['titre'] = $auteur[0]['nomAuteur'];
                
		$this->load->view('acceuil',$data);
	}
	
	public function date($date){
		$this->load->model('Categorie');
		$data['categorie'] = $this->Categorie->getAll();
		
		
		$this->load->model('ArticleVue');
		$data['article'] = $this->ArticleVue->getByDate($date);
                
                $data['titre'] = "Article sortie le ".$date; 
                
		$this->load->view('acceuil',$data);
	}
}
