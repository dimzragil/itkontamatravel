<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
    }

    public function pendaftaran()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/formdaftar', $data);
    }

    public function proses()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $formulir = array(
            "program" => $this->input->post('program'),
            "nama" => $this->input->post('nama'),
            "no_id" => $this->input->post('no_id'),
            "nama_ayah" => $this->input->post('nama_ayah'),
            "tempat_lahir" => $this->input->post('tempat_lahir'),
            "tanggal_lahir" => $this->input->post('tanggal_lahir'),
            "no_paspor" => $this->input->post('no_paspor'),
            "keluar_paspor" => $this->input->post('keluar_paspor'),
            "tg_keluar_paspor" => $this->input->post('tg_keluar_paspor'),
            "masa_berlaku_paspor" => $this->input->post('masa_berlaku_paspor'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "goldar" => $this->input->post('goldar'),
            "status_perkawinan" => $this->input->post('status_perkawinan'),
            "alamat" => $this->input->post('alamat'),
            "email" => $this->input->post('email'),
            "telp_rumah" => $this->input->post('telp_rumah'),
            "telp_hp" => $this->input->post('telp_hp'),
            "pendidikan" => $this->input->post('pendidikan'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "keluarga_ikut_umroh" => $this->input->post('keluarga_ikut_umroh'),
            "nomor_keluarga_ikut_umroh" => $this->input->post('nomor_keluarga_ikut_umroh'),
            "informasi_pendaftaran" => $this->input->post('informasi_pendaftaran'),
            "penyakit" => $this->input->post('penyakit'),
            "keluarga_darurat" => $this->input->post('keluarga_darurat'),
            "nomor_keluarga_darurat" => $this->input->post('nomor_keluarga_darurat'),
            "alamat_keluarga_darurat" => $this->input->post('alamat_keluarga_darurat'),
        );

        $this->db->insert('formulir', $formulir);

        redirect('user/index');
    }
}
