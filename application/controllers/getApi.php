<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class getApi extends CI_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model('model');
    }

    public function pariwisataAPI($page, $size) {
        $response = array(
            'content' => $this->model->getJSON('pariwisata', ($page - 1) * $size, $size)->result(),
            'totalPages' => ceil($this->model->getCount('pariwisata') / $size)
        );
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT))
                ->_display();
        exit;
    }
    public function resepAPI($page, $size) {
        $response = array(
            'content' => $this->model->getJSON('resep', ($page - 1) * $size, $size)->result(),
            'totalPages' => ceil($this->model->getCount('resep') / $size)
        );
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT))
                ->_display();
        exit;
    }
    public function tipsAPI($page, $size) {
        $response = array(
            'content' => $this->model->getJSON('tips', ($page - 1) * $size, $size)->result(),
            'totalPages' => ceil($this->model->getCount('tips') / $size)
        );
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT))
                ->_display();
        exit;
    }
    public function komenAPI($page, $size) {
        $response = array(
            'content' => $this->model->getJSON('komentar', ($page - 1) * $size, $size)->result(),
            'totalPages' => ceil($this->model->getCount('komentar') / $size)
        );
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT))
                ->_display();
        exit;
    }

}
