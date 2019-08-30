<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getTujuan()
    {
        $this->db->select('*');
        $this->db->from('tb_tujuan');
        $this->db->order_by('tujuan_date_created','ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getDari()
    {
       return $this->db->query('SELECT DISTINCT tujuan_dari FROM tb_tujuan')->result_array();
    }
    public function getTujuanKe()
    {
       return $this->db->query('SELECT DISTINCT tujuan_lokasi FROM tb_tujuan')->result_array();
    }
    public function getTujuanById($id)
    {
        $this->db->where('tujuan_id',$id);
        $this->db->select('*');
        $this->db->from('tb_tujuan');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getMarkByTujuan($tujuan,$dari)
    {
        $this->db->select('*');
        $this->db->from('tb_tujuan');
        $this->db->join('tb_jalur','tb_jalur.jalur_tujuan = tb_tujuan.tujuan_id');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_jalur.jalur_jadwal');
        $this->db->where('tujuan_lokasi',$tujuan);
        $this->db->where('tujuan_dari',$dari);
        $query = $this->db->get();
        return $query->row_array();
    }
        
    function post($data){
        return $this->db->insert('tb_tujuan',$data);
    }
    function delete($id){
        $this->db->where('tujuan_id',$id);
        return $this->db->delete('tb_tujuan');
    }
    function deleteJalur($id){
        $this->db->where('jalur_tujuan',$id);
        return $this->db->delete('tb_jalur');
    }
    
    function edit($id,$data){
        $this->db->where('tujuan_id', $id);
        return $this->db->update('tb_tujuan', $data);
    }
    
    public function get_peminat_harian($hari,$bulan,$tahun,$tujuan)
    {
        $this->db->select('*');
        $this->db->from('tb_tiket');
        $this->db->join('tb_jadwal','tb_jadwal.jadwal_id = tb_tiket.tiket_jadwal');
        $this->db->where('DAY(tb_jadwal.jadwal_tgl_berangkat)',$hari);
        $this->db->where('MONTH(tb_jadwal.jadwal_tgl_berangkat)',$bulan);
        $this->db->where('YEAR(tb_jadwal.jadwal_tgl_berangkat)',$tahun);
        $this->db->where('tb_tiket.tiket_tujuan',$tujuan);
        $query = $this->db->get();
        return $query->result_array();
    }

}


