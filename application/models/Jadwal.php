<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getJadwal()
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_bus','tb_bus.bus_id = tb_jadwal.jadwal_bus');
        $this->db->order_by('jadwal_tgl_berangkat','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getJadwalById($id)
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_bus','tb_bus.bus_id = tb_jadwal.jadwal_bus');
        $this->db->where('jadwal_id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getJalurByJadwal($id)
    {
        $this->db->select('*');
        $this->db->from('tb_jalur');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_jalur.jalur_jadwal');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_jalur.jalur_tujuan');
        $this->db->where('jadwal_id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getTujuan($id)
    {
       return $this->db->query("SELECT DISTINCT tb_tujuan.tujuan_lokasi FROM tb_jalur JOIN tb_jadwal ON tb_jadwal.jadwal_id=tb_jalur.jalur_jadwal JOIN tb_tujuan ON tb_tujuan.tujuan_id=tb_jalur.jalur_tujuan WHERE tb_jalur.jalur_jadwal ='$id'")->result_array();
    }
    public function getDari($id)
    {
       return $this->db->query("SELECT DISTINCT tb_tujuan.tujuan_dari FROM tb_jalur JOIN tb_jadwal ON tb_jadwal.jadwal_id=tb_jalur.jalur_jadwal JOIN tb_tujuan ON tb_tujuan.tujuan_id=tb_jalur.jalur_tujuan WHERE tb_jalur.jalur_jadwal ='$id'")->result_array();
    }

    public function getJadwalByTujuan($id)
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('tb_jalur','tb_jalur.jalur_jadwal = tb_jadwal.jadwal_id');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_jalur.jalur_tujuan');
        $this->db->where('tujuan_id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_surat_jalan($bus,$jadwal)
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_tiket.tiket_jadwal');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_tiket.tiket_tujuan');
        $this->db->join('tb_bus','tb_bus.bus_id = tb_jadwal.jadwal_bus');
        $this->db->where('tb_bus.bus_id',$bus);
        $this->db->where('tb_jadwal.jadwal_tgl_berangkat',$jadwal);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_jumlah_penumpang($id)
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->where('tiket_jadwal',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
        
    function post($data){
        return $this->db->insert('tb_jadwal',$data);
    }
    function delete($id){
        $this->db->where('jadwal_id',$id);
        return $this->db->delete('tb_jadwal');
    }
    function delete_jalur($id){
        $this->db->where('jalur_jadwal',$id);
        return $this->db->delete('tb_jalur');
    }
    
    function edit($id,$data){
        $this->db->where('jadwal_id', $id);
        return $this->db->update('tb_jadwal', $data);
    }

}


