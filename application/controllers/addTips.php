<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AddTips extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('id') != '1') {
            redirect('login');
        }

        $this->load->model('model');
    }

    public function index() {
        $this->load->view('element/v_header');
        $this->load->view('element/v_leftMenu');
        $this->load->view('page/v_addTips');
    }

    public function insert() {

        if ($this->input->post()) {
            $data = array(
                'nama_tips' => $this->input->post('nama_tips'),
                'link_tips' => $this->input->post('link_tips'),
            );
//                print_r($data);exit();

            $this->model->simpan('tips', $data);
            //pesan yang muncul jika berhasil diupload pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil di simpan !!</div></div>");
            redirect('tips'); //jika berhasil maka akan ditampilkan view upload
        } else {
            //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal menyimpan data !!</div></div>");
            redirect('addTips'); //jika gagal maka akan ditampilkan form upload
        }
    }

}
