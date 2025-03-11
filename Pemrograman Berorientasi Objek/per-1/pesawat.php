<?php class pesawat {
    public $nama;
    public $maskapai;
    public $kapasitas;

    function set_nama($nama) {
        $this->nama = $nama;
    }

    function set_maskapai($maskapai) {
        $this->maskapai = $maskapai;
    }

    function set_kapasitas($kapasitas) {
        $this->kapasitas = $kapasitas;
    }

    function get_info() {
        return 
        "Pesawat: $this->nama,
Maskapai: $this->maskapai,
Kapasitas: $this->kapasitas penumpang ";
    }
}

$pesawat1 = new pesawat();
$pesawat1->set_nama("Boeing 737");
$pesawat1->set_maskapai("Garuda Indonesia");
$pesawat1->set_kapasitas(180);

echo $pesawat1->get_info();
?>