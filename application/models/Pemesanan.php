<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getPemesanan()
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_tiket.tiket_tujuan');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_tiket.tiket_jadwal');
        $this->db->join('tb_bus','tb_bus.bus_id = tb_jadwal.jadwal_bus');
        $this->db->order_by('tiket_date_created','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_peminat_tujuan($id)
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->where('tiket_tujuan',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getPemesananByNo($id)
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_tiket.tiket_tujuan');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_tiket.tiket_jadwal');
        $this->db->join('tb_bus','tb_bus.bus_id = tb_jadwal.jadwal_bus');
        $this->db->where('tiket_kode',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getPemesananById($id)
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_tiket.tiket_tujuan');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_tiket.tiket_jadwal');
        $this->db->join('tb_bus','tb_bus.bus_id = tb_jadwal.jadwal_bus');
        $this->db->where('tiket_id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function getPemesananByKode($id)
    {
        $this->db->where('pemesanan_no',$id);
        $this->db->select('*');
        $this->db->from('tb_pemesanan');
        $query = $this->db->get();
        return $query->row_array();
    }  
    public function getTiketByKode($id)
    {
        $this->db->where('tiket_kode',$id);
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function get_tiket($tgl)
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_tiket.tiket_tujuan');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_tiket.tiket_jadwal');
        $this->db->where('tb_jadwal.jadwal_tgl_berangkat',$tgl);
        $query = $this->db->get();
        return $query->result_array();
    }   
    function post($data){
        return $this->db->insert('tb_pemesanan',$data);
    }
    function post_konfirmasi($data){
        return $this->db->insert('tb_konfirmasi',$data);
    }
    function postTiket($data){
        return $this->db->insert('tb_tiket',$data);
    }
    function post_detail($data){
        return $this->db->insert('tb_pemesanan_detail',$data);
    }
    function delete($id){
        $this->db->where('tiket_id',$id);
        return $this->db->delete('tb_tiket');
    }
    function batal($id){
        $this->db->where('tiket_id',$id);
        return $this->db->delete('tb_tiket');
    }
    
    function edit($id,$data){
        $this->db->where('pemesanan_id', $id);
        return $this->db->update('tb_pemesanan', $data);
    }
    

}


