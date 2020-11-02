<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_wisata');
    }

    function index()
    {
        $data['title'] = "Data Wisata";
        $config['base_url'] = site_url('Backend/daftar_wisata');
        $data['wisata'] = $this->M_wisata->data_wisata();
        $this->load->view('user/index', $data);
    }
}
