<?php
Class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan = "Teknik Informatika";

    public function __construct($nama="Firstasya Cantika", $nim="V3924020") {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function tampilkaninfo() {
        return "Nama : $this->nama, \nNIM : $this->nim, \nJurusan : $this->jurusan";
    }
}

$dataMahasiswa = new Mahasiswa;

echo $dataMahasiswa->tampilkaninfo();
?>