<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('id') != '1') {
            redirect('login');
        }

        $this->load->model('model');
    }

    public function index() {
        $data['query'] = $this->model->tampil('komentar');
        $this->load->view('element/v_header');
        $this->load->view('element/v_leftMenu');
//        print_r($data);exit;
        $this->load->view('page/v_komentar', $data);
    }

    public function delete($id, $gambar_komentar) {
        $path1 = './assets/uploads/' . $gambar_komentar;
        $path2 = './assets/hasil_resize/' . $gambar_komentar;
        unlink($path1);
        unlink($path2);

        $this->model->hapus('komentar', 'id_komentar', $id);
        redirect('komentar');
    }

}
