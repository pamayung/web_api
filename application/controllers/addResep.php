<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AddResep extends CI_Controller {

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
        $this->load->view('page/v_addResep');
    }

    public function insert() {
        $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width'] = '5000'; //lebar maksimum 5000 px
        $config['max_height'] = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if ($_FILES['gambar']['name']) {
            if ($this->upload->do_upload('gambar')) {
                $fto = $this->upload->data();
                $data = array(
                    'gambar' => base_url('assets/hasil_resize/' . $fto['file_name']),
                    'nama_resep' => $this->input->post('nama_resep'),
                    'link' => $this->input->post('video'),
                    'keterangan' => $this->input->post('keterangan'),
                    'bahan' => $this->input->post('bahan'),
                    'langkah' => $this->input->post('langkah'),
                );
//                print_r($data);exit();

                $this->model->simpan('resep', $data);

                $config2['image_library'] = 'gd2';
                $config2['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                $config2['new_image'] = './assets/hasil_resize/'; // folder tempat menyimpan hasil resize
                $config2['maintain_ratio'] = TRUE;
                $config2['width'] = 400; //lebar setelah resize menjadi 100 px
                $config2['height'] = 200; //lebar setelah resize menjadi 100 px
                $this->load->library('image_lib', $config2);

                //pesan yang muncul jika resize error dimasukkan pada session flashdata
                if (!$this->image_lib->resize()) {
                    $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));
                }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil di simpan !!</div></div>");
                redirect('resep'); //jika berhasil maka akan ditampilkan view upload
            } else {
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal menyimpan data !!</div></div>");
                redirect('addResep'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

}
