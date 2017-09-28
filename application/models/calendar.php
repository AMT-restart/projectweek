<?php


class calendar extends CI_Model{

	public function __construct()
    {
        parent::__construct();
    }

	public function add_event($data){
		$query="INSERT INTO calendar (title,start,end,description,created_at,updated_at) VALUES (?,?,?,?,NOW(),NOW())";
		$values=[$data['title'],$data['start'],$data['end'],$data['description']];
		$this->db->query($query,$values);
	}
	public function get_all(){
		$query="SELECT * FROM calendar";
		return $this->db->query($query)->result_array();
	}
	public function get_one($id){
		$query="SELECT * FROM calendar
		WHERE calendar.id= ?";
		$values= [$id];
		return $this->db->query($query,$values)->row_array();
	}
	public function update($data)
	{
      $query="UPDATE  calendar
       SET title = ? , start = ? , end = ? , description = ? , updated_at =NOW()
       WHERE id= ?";
       $values=[$data['title'],$data['start'],$data['end'],$data['description'],$data['id']];
       return $this->db->query($query,$values);
	}
}


?>