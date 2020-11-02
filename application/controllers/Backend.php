<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_wisata');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }

    function daftar_wisata()
    {
        $data['title'] = "Data Wisata";
        $config['base_url'] = site_url('Backend/daftar_wisata');
        $data['wisata'] = $this->M_wisata->data_wisata();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/daftar_wisata', $data);
        $this->load->view('template/footer');
    }
    public function delete_wisata()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_wisata', $key);
        $query = $this->db->get('daftar_wisata');
        if ($query->num_rows() > 0) {
            $this->M_wisata->delete_wisata($key);
        }
        redirect('Backend/daftar_wisata');
    }
    public function register_wisata()
    {
        $data['title'] = "Register Data Wisata";
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_wisata', $data);
        $this->load->view('template/footer');
    }
    public function update_register_wisata($id_wisata)
    {
        $data['title'] = "Registrasi Data Wisata";
        $this->db->where('md5(id_wisata)', $id_wisata);
        $data['id_wisata'] = $this->db->get('daftar_wisata')->row_array();
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_wisata', $data);
        $this->load->view('template/footer');
    }
    function save_register_wisata()
    {
        if ($_POST['id_wisata'] != '') {
            $this->M_wisata->save_update_register_wisata($_POST);
        } else {
            $this->M_wisata->save_registerwisata($_POST);
        }
        redirect('Backend/daftar_wisata');
    }



    function daftar_homestay()
    {
        $data['title'] = "Data Home Stay";
        $config['base_url'] = site_url('Backend/daftar_homestay');
        $data['homestay'] = $this->M_wisata->data_homestay();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/daftar_homestay', $data);
        $this->load->view('template/footer');
    }
    public function delete_homestay()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_homestay', $key);
        $query = $this->db->get('homestay');
        if ($query->num_rows() > 0) {
            $this->M_wisata->delete_homestay($key);
        }
        redirect('Backend/daftar_homestay');
    }
    public function register_homestay()
    {
        $data['title'] = "Register Data Home Stay";
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_homestay', $data);
        $this->load->view('template/footer');
    }
    public function update_register_homestay($id_homestay)
    {
        $data['title'] = "Registrasi Data Home Stay";
        $this->db->where('md5(id_homestay)', $id_homestay);
        $data['id_homestay'] = $this->db->get('homestay')->row_array();
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_homestay', $data);
        $this->load->view('template/footer');
    }
    function save_register_homestay()
    {
        if ($_POST['id_homestay'] != '') {
            $this->M_wisata->save_update_register_homestay($_POST);
        } else {
            $this->M_wisata->save_registerhomestay($_POST);
        }
        redirect('Backend/daftar_homestay');
    }



    function daftar_rumahmakan()
    {
        $data['title'] = "Data Rumah Makan";
        $config['base_url'] = site_url('Backend/daftar_rumahmakan');
        $data['rumahmakan'] = $this->M_wisata->data_rumahmakan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/daftar_rumahmakan', $data);
        $this->load->view('template/footer');
    }
    public function delete_rumahmakan()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_rumahmakan', $key);
        $query = $this->db->get('rumah_makan');
        if ($query->num_rows() > 0) {
            $this->M_wisata->delete_rumahmakan($key);
        }
        redirect('Backend/daftar_rumahmakan');
    }
    public function register_rumahmakan()
    {
        $data['title'] = "Register Data Rumah Makan";
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_rumahmakan', $data);
        $this->load->view('template/footer');
    }
    public function update_register_rumahmakan($id_rumahmakan)
    {
        $data['title'] = "Registrasi Data Rumah Makan";
        $this->db->where('md5(id_rumahmakan)', $id_rumahmakan);
        $data['id_rumahmakan'] = $this->db->get('rumah_makan')->row_array();
        $data['jenis'] = $this->M_wisata->data_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('wisata/register_rumahmakan', $data);
        $this->load->view('template/footer');
    }
    function save_register_rumahmakan()
    {
        if ($_POST['id_rumahmakan'] != '') {
            $this->M_wisata->save_update_register_rumahmakan($_POST);
        } else {
            $this->M_wisata->save_registerrumahmakan($_POST);
        }
        redirect('Backend/daftar_rumahmakan');
    }
}
