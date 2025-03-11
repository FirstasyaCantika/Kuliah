<?php
class Buku{
    public $judul;
    public $pengarang;

    public function __construct($judul = "One Piece", $pengarang = "Eiichiro Oda") {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }
}

# Membuat objek tanpa memberikan argumen
$bukuBaru = new Buku();

echo $bukuBaru->judul; # Output : One Piece
echo "\n";
echo $bukuBaru->pengarang; # Output : Eiichiro Oda
?>