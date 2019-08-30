<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getJalur()
    {
        $this->db->select('*');
        $this->db->from('tb_jalur');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_jalur.jalur_jadwal');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_jalur.jalur_tujuan');
        $this->db->join('tb_bus','tb_bus.bus_id = tb_jadwal.jadwal_bus');
        $this->db->order_by('jalur_date_created','ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getJalurById($id)
    {
        $this->db->where('jalur_id',$id);
        $this->db->select('*');
        $this->db->from('tb_jalur');
        $query = $this->db->get();
        return $query->row_array();
    }
    
        
    function post($data){
        return $this->db->insert('tb_jalur',$data);
    }
    function delete($id){
        $this->db->where('jalur_id',$id);
        return $this->db->delete('tb_jalur');
    }
    
    function edit($id,$data){
        $this->db->where('jalur_id', $id);
        return $this->db->update('tb_jalur', $data);
    }

}


