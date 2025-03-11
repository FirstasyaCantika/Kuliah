<?php class film {
    public $judul;
    public $sutradara;
    public $tahun;

    function set_judul($judul) {
        $this->judul = $judul;
    }

    function set_sutradara($sutradara) {
        $this->sutradara = $sutradara;
    }

    function set_tahun($tahun) {
        $this->tahun = $tahun;
    }

    function get_info_film() {
        return "Judul: $this->judul, Sutradara: $this->sutradara, Tahun: $this->tahun";
    }
}

$film1 = new film();
$film1->set_judul("KKN di Desa Penari");
$film1->set_sutradara("Awi Sunardi");
$film1->set_tahun(2022);

echo $film1->get_info_film();
?>