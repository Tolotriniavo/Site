<?php
class Auteur extends CI_model
{
	

	
	public function getAll(){
		$query = $this->db->get('auteur');
		return $query->result_array();
	}
	
        
        public function getById($id){
		$requete = "select * from auteur where idAuteur=$id";
		$query =$this->db->query($requete);
		$rep = $query->result_array();
		return $rep;
	}
        
	public function insert($pseudo,$nom,$age)
	{
		$this->pseudo = $pseudo;
		$this->nom = $nom;
		$this->age = $age;
		
		$this->db->insert('auteur',$this);
	}
	
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('auteur',$this);
	}
	
	public function update($id,$nom)
	{
		$this->pseudo = $pseudo;
		$this->nom = $nom;
		$this->age = $age;

		$this->db->where('id',$id);
		$this->db->update('auteur',$this);
	}
	
}
?>