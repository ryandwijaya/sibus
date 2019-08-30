<?php
	
	class GLOBAL_Model extends CI_Model {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		/*
		 * helper untuk mempermudah proses yang berulang
		 * metode insert,update,delete dibuat disini
		 * get data yang berbeda juga disini
		 * **/
		// get data
		public function get_array_of_table($table)
		{
			$query =  $this->db->get($table);
			return $query->result_array($query);
		}
		public function get_object_of_table($table)
		{
			$query = $this->db->get($table);
			return $query;
		}
		public function get_array_of_row($table,$query)
		{
			$sql = $this->db->get_where($table,$query);
			return $sql->row_array();
		}
		
		public function get_object_of_row($table,$query)
		{
			$sql = $this->db->get_where($table,$query);
			return $sql;
		}
		
		//insert
		public function insert_data($table,$data)
		{
			$this->db->insert($table,$data);
		}
		public function insert_with_status($table,$data)
		{
			$this->db->insert($table,$data);
			return $this->db->affected_rows();
		}
		
		// update
		public function update_table($table,$key,$value,$data)
		{
			$this->db->where($key,$value);
			$this->db->update($table,$data);
		}
		public function update_table_with_status($table,$key,$value,$data)
		{
			$this->db->where($key,$value);
			$this->db->update($table,$data);
			return $this->db->affected_rows();
		}
		
		// delete
		public function delete_row($table,$query)
		{
			return $this->db->delete($table,$query);
		}
		public function delete_row_with_status($table,$query)
		{
			$this->db->delete($table,$query);
			return $this->db->affected_rows();
		}
		
	}