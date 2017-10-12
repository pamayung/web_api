<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        if ($this->session->userdata('id') != '1') {
            redirect('login');
        }

        $this->load->model('model');
    }

    public function index($id) {
        $data['query'] = $this->model->detail('pariwisata', 'id_pariwisata', $id);
        $this->load->view('element/v_header');
        $this->load->view('element/v_leftMenu');
        $this->load->view('page/v_detail', $data);
        $this->load->view('element/v_footer');
    }
}
