<?php
Class Basisdata{
    private $parameter;
    public function __construct(){
        $this->konfigurasi();
    }
    public function konfigurasi(){
        echo "Konfigurasi Selesai";
    }
    public function tambah(){
        echo "Proses Tambah Selesai";
    }
    public function edit(){
        echo "Proses Edit Selesai";
    }
    public function hapus(){
        echo "Proses Hapus Selesai";
    }
    public function baca(){
        echo "Proses Baca Selesai";
    }
}

$basisdata = new Basisdata;
echo "\n";
$basisdata->tambah();
echo "\n";
$basisdata->edit();
echo "\n";
$basisdata->hapus();
echo "\n";
$basisdata->baca();
?>