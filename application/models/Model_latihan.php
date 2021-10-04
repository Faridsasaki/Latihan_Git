<?php
class Model_latihan extends CI_Model
{
 //membuat variable untuk menampung nilai
    public $nilai1, $nilai2, $hasil;
   //method penjumlahan
    public function jumlah($ni1 = null, $ni2 = null)
    {
        $this->nilai1 = $ni1;
        $this->nilai2 = $ni2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}