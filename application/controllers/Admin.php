<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){

		parent::__construct();
		/*-- Check Session  --*/
		is_login();
		/*-- untuk mengatasi error confirm form resubmission  --*/
		header('Cache-Control: no-cache, must-revalidate, max-age=0');
		header('Cache-Control: post-check=0, pre-check=0',false);
		header('Pragma: no-cache');
	}

	public function index()
	{
		$data = array(
			'user' 	=> $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row(),
			'title' => 'Website Panlih Wonosobo',
			'isi' 	=> 'Admin/v_index',
		);
		$this->load->view('Admin/layoutAdmin/v_wrapper', $data, FALSE);
	}

	public function dataPanlih()
	{
		$data = array(
			'user' 				=> $this->db->get_where('tbl_user',['email' => $this->session->userdata('email')])->row(),
			'calonPanlih' => $this->Admin_model->daftarcalonPanlih(),
			'title' 			=> 'Website Panlih Wonosobo',
			'isi' 				=> 'Admin/dataPanlih/v_index',
		);
		$this->load->view('Admin/layoutAdmin/v_wrapper', $data, FALSE);
	}

	public function addBakalcalonPanlih()
    {
        $this->form_validation->set_rules('namaCalon', 'Nama Calon', 'required', array('required' => '%s Harus diisi!!'));
        $this->form_validation->set_rules('alamatCalon', 'Alamat Calon', 'required');
				$this->form_validation->set_rules('visiCalon', 'Visi', 'required');
				$this->form_validation->set_rules('misiCalon', 'Misi', 'required');
				$this->form_validation->set_rules('diskripsiCalon', 'Desk', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './assets/data/foto/calonPanlih/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('calonPanlih')) {
                $data = array(
                    'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row(),
                    'title' => 'Tambah Data Calon Panlih',
                    'isi' => 'Admin/dataPanlih/tambahBakalCalonPanlih',
                    'error' => $this->upload->display_errors(),
                );
                $this->load->view('Admin/layoutAdmin/v_wrapper', $data, FALSE);
            } else {
                $upload_data                         = array('uploads' => $this->upload->data());
                $config['image_library']             = '.gd2';
                $config['source_image']              = './assets/data/foto/calonPanlih/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'namaCalon'                 => $this->input->post('namaCalon'),
                    'alamatCalon'               => $this->input->post('alamatCalon'),
                    'visiCalon'                 => $this->input->post('visiCalon'),
                    'misiCalon'            			=> $this->input->post('misiCalon'),
                    'diskripsiCalon'            => $this->input->post('diskripsiCalon'),
                    'fotoCalon'             => $upload_data['uploads']['file_name'],
                );
                $this->Admin_model->addCalonPanlih($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diposting!!!</div>');
                redirect('Admin/dataPanlih');
            }
        }

        $data = array(
            'user' 		=> $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row(),
            'title' => 'Tambah Data Calon Panlih',
            'isi' => 'Admin/dataPanlih/tambahBakalCalonPanlih',
        );
        $this->load->view('Admin/layoutAdmin/v_wrapper', $data, FALSE);
    }
}