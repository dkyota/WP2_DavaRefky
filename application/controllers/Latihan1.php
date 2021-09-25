<?php
class Latihan1 extends CI_Controller
{   
    public function index()
    {
        echo "Selamat Datang Dava, selamat belajar web programming" ;
        //$this->view('view-latihan1')
    }


public function penjumlahan($nil1, $nil2)
{ 
    $this->load->model('Model_latihan1');
    
    $data['nilai1'] = $nil1;
    $data['nilai2'] = $nil2;
    $data['hasil'] = $this->Model_latihan1->jumlah($nil1,$nil2);
    
    $this->load->view('view_latihan1', $data);
    }
}