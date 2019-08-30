<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getBus()
    {
        $this->db->select('*');
        $this->db->from('tb_bus');
        $this->db->order_by('bus_date_created','ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getBusById($id)
    {
        $this->db->where('bus_id',$id);
        $this->db->select('*');
        $this->db->from('tb_bus');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function cekKursiById($id,$no)
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->where('tiket_jadwal',$id);
        $this->db->where('tiket_no_kursi',$no);
        $query = $this->db->get();
        return $query->num_rows();
    }


    function post($data){
        return $this->db->insert('tb_bus',$data);
    }
    function delete($id){
        $this->db->where('bus_id',$id);
        return $this->db->delete('tb_bus');
    }
    
    function edit($id,$data){
        $this->db->where('bus_id', $id);
        return $this->db->update('tb_bus', $data);
    }

}


