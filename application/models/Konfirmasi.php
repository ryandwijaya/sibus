<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getKonfirmasi()
    {
        $this->db->select('*');
        $this->db->from('tb_konfirmasi');
        $this->db->join('tb_tiket','tb_tiket.tiket_id = tb_konfirmasi.konfirmasi_no_pemesanan');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_tiket.tiket_tujuan');
        $this->db->order_by('konfirmasi_tgl','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getKonfirmasiTgl($tgl_dari,$tgl_sampai)
    {
        $this->db->select('*');
        $this->db->from('tb_konfirmasi');
        $this->db->join('tb_tiket','tb_tiket.tiket_id = tb_konfirmasi.konfirmasi_no_pemesanan');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_tiket.tiket_tujuan');
        $this->db->where("konfirmasi_tgl_bayar BETWEEN '$tgl_dari' AND '$tgl_sampai'");
        $this->db->order_by('konfirmasi_tgl_bayar','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getKonfirmasiByTiket($id)
    {
        $this->db->select('*');
        $this->db->from('tb_konfirmasi');
        $this->db->join('tb_tiket','tb_tiket.tiket_id = tb_konfirmasi.konfirmasi_no_pemesanan');
        $this->db->join('tb_tujuan','tb_tujuan.tujuan_id = tb_tiket.tiket_tujuan');
        $this->db->where('konfirmasi_no_pemesanan',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
    
        
    function post($data){
        return $this->db->insert('tb_konfirmasi',$data);
    }
    function delete($id){
        $this->db->where('konfirmasi_id',$id);
        return $this->db->delete('tb_konfirmasi');
    }
    
    function edit($id,$data){
        $this->db->where('konfirmasi_id', $id);
        return $this->db->update('tb_konfirmasi', $data);
    }

}


