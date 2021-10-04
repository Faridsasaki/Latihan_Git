<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. Selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }
    public function penjumlahan($ni1, $ni2)
    {
        $this->load->model('Model_latihan');

        $data['nilai1'] = $ni1;
        $data['nilai2'] = $ni2;
        $data['hasil'] = $this->Model_latihan->jumlah($ni1, $ni2);

        $this->load->view('view-latihan', $data);
    }
}