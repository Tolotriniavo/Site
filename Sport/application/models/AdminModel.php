<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminModel extends CI_model
{
        public function connexion($email, $password){
            $query = $this->db->query('SELECT pseudo , motPasse FROM admin');
            foreach($query->result_array() as $row){
                    if($row['pseudo'] == $email && $row['motPasse'] == $password)
                            return true;
            }
            return false;
	}
}
?>