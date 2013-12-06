<?php
Class User extends CI_Model
{
	public function get(){
		$sql="select * from Categorias";
		return $this->db->query($sql)->result();
	}
}