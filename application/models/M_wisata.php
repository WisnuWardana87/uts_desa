<?php
class M_wisata extends CI_Model
{
    public function data_wisata()
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=daftar_wisata.id_jenis');
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }
    public function data_jenis()
    {
        $data = $this->db->get('tb_jenis')->result_array();
        return $data;
    }

    public function delete_wisata($key)
    {
        $this->db->where('id_wisata', $key);
        $this->db->delete('daftar_wisata');
    }

    function save_registerwisata($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(

            'nama_wisata' => $post['nama_wisata'],
            'id_jenis' => $post['id_jenis'],
            'harga_tiket' => $post['harga_tiket'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'keterangan' => $post['keterangan'],
            'foto' => $_FILES['foto']['name']
        );
        $this->db->insert('daftar_wisata', $data);
    }


    function save_update_register_wisata($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(

            'nama_wisata' => $post['nama_wisata'],
            'id_jenis' => $post['id_jenis'],
            'harga_tiket' => $post['harga_tiket'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'keterangan' => $post['keterangan'],
            'foto' => $_FILES['foto']['name']
        );
        $this->db->where('md5(id_wisata)', $post['id_wisata']);
        $this->db->update('daftar_wisata', $data);
    }

    public function data_homestay()
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=homestay.id_jenis');

        $data = $this->db->get('homestay')->result_array();
        return $data;
    }
    public function delete_homestay($key)
    {
        $this->db->where('id_homestay', $key);
        $this->db->delete('homestay');
    }

    function save_registerhomestay($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(

            'nama_homestay' => $post['nama_homestay'],
            'id_jenis' => $post['id_jenis'],
            'foto' => $_FILES['foto']['name']
        );
        $this->db->insert('homestay', $data);
    }


    function save_update_register_homestay($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(

            'nama_homestay' => $post['nama_homestay'],
            'id_jenis' => $post['id_jenis'],
            'foto' => $_FILES['foto']['name']
        );
        $this->db->where('md5(id_homestay)', $post['id_homestay']);
        $this->db->update('homestay', $data);
    }


    public function data_rumahmakan()
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=rumah_makan.id_jenis');

        $data = $this->db->get('rumah_makan')->result_array();
        return $data;
    }
    public function delete_rumahmakan($key)
    {
        $this->db->where('id_rumahmakan', $key);
        $this->db->delete('rumah_makan');
    }

    function save_registerrumahmakan($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(

            'nama_rumahmakan' => $post['nama_rumahmakan'],
            'id_jenis' => $post['id_jenis'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'keterangan' => $post['keterangan'],
            'foto' => $_FILES['foto']['name']
        );
        $this->db->insert('rumah_makan', $data);
    }


    function save_update_register_rumahmakan($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(


            'nama_rumahmakan' => $post['nama_rumahmakan'],
            'id_jenis' => $post['id_jenis'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'keterangan' => $post['keterangan'],
            'foto' => $_FILES['foto']['name']
        );
        $this->db->where('md5(id_rumahmakan)', $post['id_rumahmakan']);
        $this->db->update('rumah_makan', $data);
    }
}
