<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();

//        if ($this->session->userdata('id') != '1') {
//            redirect('login');
//        }

        $this->load->model('model');
    }

    public function index() {
        $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width'] = '5000'; //lebar maksimum 5000 px
        $config['max_height'] = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

//        $random = random_word(20);
        
        $nama = $this->input->post('nama_komentar');
        $gambar = $this->input->post('gambar_komentar');
        $komentar = $this->input->post('komentar');
        $id = $this->input->post('id');
        $path = "assets/hasil_resize/".$nmfile.".jpg";

        // sesuiakan ip address laptop/pc atau URL server
        $actualpath = base_url($path);

//        $gambar = base_url('assets/hasil_resize/' . $fto['file_name']);

        if (empty($nama)) {
            $response = new emp();
            $response->success = 0;
            $response->message = 'Please dont empety nama.';
            die(json_encode($response));
        } else {
           $data = array(
                'gambar_komentar' => $actualpath,
                'nama_komentar' => $nama,
                'komentar' => $komentar,
                'id' => $this->input->post('id'),
            );
//                print_r($data);exit();

//            $query = mysqli_query("INSERT INTO komentar (nama_komentar,gambar_komentar,komentar,id) VALUES ('$nama','$actualpath','$komentar','$id')");
            $query = $this->model->simpan('komentar', $data);

            $config2['image_library'] = 'gd2';
            $config2['source_image'] = $this->upload->upload_path . $this->upload->file_name;
            $config2['new_image'] = './assets/hasil_resize/'; // folder tempat menyimpan hasil resize
            $config2['maintain_ratio'] = TRUE;
            $config2['width'] = 400; //lebar setelah resize menjadi 100 px
            $config2['height'] = 200; //lebar setelah resize menjadi 100 px
            $this->load->library('image_lib', $config2);

            if ($query) {
                file_put_contents($path, base64_decode($gambar));

                $response = new emp();
                $response->success = 1;
                $response->message = "Successfully Uploaded";
                die(json_encode($response));
            } else {
                $response = new emp();
                $response->success = 0;
                $response->message = "Error Upload image";
                die(json_encode($response));
            }

        }
    }

    public function random_word($id = 20) {
        $pool = '1234567890abcdefghijkmnpqrstuvwxyz';

        $word = '';
        for ($i = 0; $i < $id; $i++) {
            $word .= substr($pool, mt_rand(0, strlen($pool) - 1), 1);
        }
        return $word;
    }

}

class emp {
    
}
