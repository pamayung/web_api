<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pariwisata extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('id') != '1') {
            redirect('login');
        }

        $this->load->model('model');
    }

    public function index() {
        $data['query'] = $this->model->tampil('pariwisata');
        $this->load->view('element/v_header');
        $this->load->view('element/v_leftMenu');
        $this->load->view('page/v_pariwisata', $data);
    }

    public function delete() {
        $img_path = $this->uri->segment(9);
//        print_r($img_path);exit;
        $path1 = './assets/uploads/' . $img_path;
        $path2 = './assets/hasil_resize/' . $img_path;
        unlink($path1);
        unlink($path2);

        $this->model->hapus('pariwisata', 'id_pariwisata', $this->uri->segment(3));
        redirect('pariwisata');
    }

    public function detail($id) {
        $data['query'] = $this->model->detail('pariwisata', 'id_pariwisata', $id);
        $this->load->view('element/v_header');
        $this->load->view('element/v_leftMenu');
        $this->load->view('page/v_detail', $data);
        $this->load->view('element/v_footer');
    }

    public function edit() {
        $data['query'] = $this->model->tampil('pariwisata');
        foreach ($query as $a) {
            $latlng = explode(",", $a->latlng);
            print_r($latlng);
            exit();
        }
        $this->load->view('element/v_header');
        $this->load->view('element/v_leftMenu');
        $this->load->view('page/v_editPariwisata', $data);
    }

}
