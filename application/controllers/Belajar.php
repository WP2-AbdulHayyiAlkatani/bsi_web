<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Belajar extends CI_Controller
{
    public function index()
    {
        $nim = "19220882";
        $nama = "Abdul Hayyi";
        $kelas = "19.3A.04";
        $prodi = "Sistem Informasi";
        
        echo"BIODATA <br><br>";
        echo"Nama saya adalah $nama<br>";
        echo"Nim saya adalah $nim<br>";
        echo"Kelas saya adalah $kelas<br>";
        echo"Prodi saya adalah $prodi<br>";
    }

    public function biodata()
    {
        $data=array(
            'no_barang'=>"1",
            'nama_barang'=>"Asus Zenfone 10",
            'qty'=>20
        );

        $this->load->view('viewbelajar', $data);
    }
}