<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('model');
    }

    public function index() {
        $this->load->view('page/v_login');
    }

    public function masuk() {
        $username = $this->input->post('userid');
        $password = $this->input->post('password');

        $cek = $this->model->cekLogin($username, $password);
//        print_r($cek);exit;

        if ($cek) {
            foreach ($cek as $data) {
                $sess_data = array(
                    'id' => $data->id,
                    'username' => $data->username
                );
                $this->session->set_userdata($sess_data);
            }
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username / Password salah');
            redirect('login');
        }
    }

    public function keluar() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
