<?php

class Web extends CI_Controller 
{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function about(){
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }

    public function user(){
        $data['judul'] = "Halaman User";
        $data['user'] = $this->ModelUser->getUser()->result_array();
        $this->load->view('v_header', $data);
        $this->load->view('v_user', $data);
        $this->load->view('v_footer', $data);
    }

    public function outuser()
    {
        $data['judul'] = "Halaman User";
        $datain=[
            'username' => $this->input->post('nama'),
            'password' => $this->input->post('password')
        ];
        $this->load->view("v_header", $data);
        $this->load->view('v_out_user', $datain);
    }

}
