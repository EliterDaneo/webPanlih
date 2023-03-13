<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
    {
        $data = array(
            'daftarCalonPanlih' => $this->Home_model->daftarCalonPanlih(),
            'title' => 'Website Panlih 2023',
            'isi'   => 'view_home',
        );
        $this->load->view('layoutHome/v_wrapper', $data, FALSE);
    }

    public function detailAll()
    {
        $data = array(
            'daftarCalonPanlih' => $this->Home_model->allDaftarCalonPanlih(),
            'title' => 'Website Panlih 2023',
            'isi'   => 'Home/v_allCalon',
        );
        $this->load->view('layoutHome/v_wrapper', $data, FALSE);
    }

    public function detailCalon($id)
    {
        $data = array(
            'daftarCalonPanlih' => $this->Home_model->allDaftarCalonPanlih(),
            'detailCalon' => $this->Home_model->detailCalonPanlih(),
            'title' => 'Website Panlih 2023',
            'isi'   => 'Home/v_detailCalon',
        );
        $this->load->view('layoutHome/v_wrapper', $data, FALSE);
    }
}
