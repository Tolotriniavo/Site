<?php
class ArticleVue extends CI_model
{
	
	public function getAll(){
		$query = $this->db->get('ArticleVue');
		return $query->result_array();
	}
	
	public function getById($id){
		$requete = "select * from ArticleVue where id=$id";
		$query =$this->db->query($requete);
		$rep = $query->result_array();
		return $rep;
	}
	
	public function getByCategorie($id){
		$requete = "select * from ArticleVue where idCategorie=$id";
		$query =$this->db->query($requete);
		$rep = $query->result_array();
		return $rep;
	}
	
	public function getByAuteur($id){
		$requete = "select * from ArticleVue where idAuteur=$id";
		$query =$this->db->query($requete);
		$rep = $query->result_array();
		return $rep;
	}
	
	public function getByDate($date){
		$requete = "select * from ArticleVue where dateParution='$date'";
		$query =$this->db->query($requete);
		$rep = $query->result_array();
		return $rep;
	}
}
?>