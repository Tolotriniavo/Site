<?php
class Categorie extends CI_model
{
	
	public function getAll(){
		$query = $this->db->get('categorie');
		return $query->result_array();
	}
	
        public function getById($id){
		$requete = "select * from categorie where idCateg=$id";
		$query =$this->db->query($requete);
		$rep = $query->result_array();
		return $rep;
	}
        
	public function insert($nom)
	{
		$this->nom = $nom;
		$this->db->insert('categorie',$this);
	}
	
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('categorie',$this);
	}
	
	public function update($id,$nom)
	{
		$this->nom = $nom;

		$this->db->where('id',$id);
		$this->db->update('categorie',$this);
	}
	
}
?>