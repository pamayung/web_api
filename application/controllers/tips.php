<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tips extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('id') != '1') {
            redirect('login');
        }

        $this->load->model('model');
    }

    public function index() {
        $data['query'] = $this->model->tampil('tips');
        $this->load->view('element/v_header');
        $this->load->view('element/v_leftMenu');
        $this->load->view('page/v_tips', $data);
    }

    public function delete($id) {
        $this->model->hapus('tips', 'id_tips', $id);
        redirect('tips');
    }

    public function edit($id) {
        $data['query'] = $this->model->find('tips', 'id_tips', $id);
        $this->load->view('element/v_header');
        $this->load->view('element/v_leftMenu');
        $this->load->view('page/v_edtTips', $data);
    }

    public function update($id_tips) {
        if ($this->input->post()) {
            $data = array(
                'nama_tips' => $this->input->post('nama_tips'),
                'link_tips' => $this->input->post('link_tips'),
            );
//                print_r($data);exit();
            $this->model->edit('id_tips', 'tips', $id_tips, $data);

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
