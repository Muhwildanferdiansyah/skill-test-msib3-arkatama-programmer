<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model('data_model');
    }

    public function index()
    {
        $data['data'] = $this->data_model->data()->result();
        $this->load->view('data', $data);
    }

    public function create()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'usia' => $this->input->post('usia'),
            'kota' => $this->input->post('kota')
        );
        $this->db->insert('test', $data);

        redirect('data');
    }
}
