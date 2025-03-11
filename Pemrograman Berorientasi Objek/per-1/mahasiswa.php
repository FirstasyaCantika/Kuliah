<?php class mahasiswa {
    public $nama;
    public $nim;
    public $prodi;

    function set_nama($nama) {
        $this->nama = $nama;
    }

    function set_nim($nim) {
        $this->nim = $nim;
    }

    function set_prodi($prodi) {
        $this->prodi = $prodi;
    }

    function get_details() {
        return"Nama: $this->nama, NIM: $this->nim, Prodi: $this->prodi";
    }
}

$mahasiswa1 = new mahasiswa();
$mahasiswa1->set_nama("Firstasya");
$mahasiswa1->set_nim("V3924020");
$mahasiswa1->set_prodi("Teknik Informatika");

echo $mahasiswa1->get_details();
?>