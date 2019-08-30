<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function getUser(){
        $this->db->order_by('user_date_created','DESC');
        $query = $this->db->get('tb_user');
        return $query->result_array();
    }
    function getUsers($user){
        return $this->db->get_where('tb_user',$user);
    }
    

    
    function getUserAccount($user){
        $query = $this->db->get_where('tb_user',$user);
        return $query->row_array();
    }
    
    function getUserByUsername($username)
    {
        $this->db->from('tb_user');
        $this->db->where('user_username',$username);
        $query = $this->db->get();
        return $query->row_array();
    }
    function createUser($dataUser)
    {
        return $this->db->insert('tb_user',$dataUser);
    }
    function deleteUser($id)
    {
        $this->db->where('user_id',$id);
        return $this->db->delete('tb_user');
    }
    function UbahPassword($data,$id)
    {

        $this->db->where('username',$id);
        $this->db->update('tb_user',$data);
    }
}


