<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model extends CI_Model {

    function _construct() {
        parent:: _construct();
    }

    public function tampil($name_tabel = '') {
        $this->db->select('*');
        $this->db->from($name_tabel);
        $query = $this->db->get();
//        echo '--'.$this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }public function tampilJoin() {
        $this->db->select('*');
        $this->db->from('resep');
        $this->db->join('komentar', 'resep.id_resep = komentar.id', 'LEFT');
        $query = $this->db->get();
//        echo $this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    
    public function find($nama_tabel = '',$where = '', $id) {
        $this->db->where($where, $id)
                ->limit(1)
                ->from($nama_tabel);
        $query = $this->db->get();
//        echo '--'.$this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function simpan($nama_tabel = '', $data) {
        $this->db->insert($nama_tabel, $data);
        return TRUE;
    }

    public function hapus($nama_tabel = '', $where = '', $id) {
        $this->db->where($where, $id)
                ->delete($nama_tabel);
//        echo $this->db->last_query();exit;
    }

    public function getCount($nama_tabel = '') {
        return $this->db->count_all_results($nama_tabel, FALSE);
    }

    public function getJSON($nama_tabel = '', $page, $size) {
        $this->db->select('*')
                ->from($nama_tabel, $page, $size);
        return $this->db->get();
    }

    public function getList($page, $size) {
        $this->db->select('id_katagori, nama, judul, tanggal, gambar, deskripsi')
                ->from('list_berita')
                ->join('katagori', 'katagori.id = list_berita.id_katagori', 'LEFT', $page, $size);
        $query = $this->db->get();
//        echo $this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function detail($nama_tabel = '', $where = '', $id) {
        $this->db->select('*')
                ->limit(1)
                ->from($nama_tabel)
                ->where($where, $id);
        $query = $this->db->get();
//        echo $this->db->last_query();exit;
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function cekLogin($username, $password) {
        $this->db->select('*')
                ->from('user')
                ->where('username', $username)
                ->where('password', md5($password))
                ->limit(1);
        $query = $this->db->get();
//        echo $this->db->last_query();exit;
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    
    public function edit($nama_id='', $nama_tabel='', $id, $data){
        $this->db->where($nama_id, $id)
                ->update($nama_tabel, $data);
//        echo $this->db->last_query();exit;
    }

}
