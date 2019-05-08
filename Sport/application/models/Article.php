<?php
class Article extends CI_model
{
	
	public function getAll(){
		$query = $this->db->get('article');
		return $query->result_array();
	}
	
	public function insert($idCategorie,$titre,$dateParution,$description,$auteur,$photo)
	{
		$this->idCategorie = $idCategorie;
		$this->titre = $titre;
		$this->dateParution = $dateParution;
		$this->description = $description;
		$this->idAuteur = $auteur;
		$this->photo = $photo;
		
		$this->db->insert('article',$this);
	}
	
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('article',$this);
	}
	
	public function update($id,$idCategorie,$titre,$dateParution,$description,$auteur,$photo)
	{
		$this->idCategorie = $idCategorie;
		$this->titre = $titre;
		$this->dateParution = $dateParution;
		$this->description = $description;
		$this->idAuteur = $auteur;
		$this->photo = $photo;

		$this->db->where('id',$id);
		$this->db->update('article',$this);
	}
	
}
?>