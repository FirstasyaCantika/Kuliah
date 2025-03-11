<?php
class Produk{
    public $judul = "Angkasa";
    public $penulis = "NoName";
    public $penerbit = "AnyWhere";
    public $harga = 50000;
}

$produk1 = new Produk();
$produk1->judul = "One Piece";
$produk1->harga = 1000000;
var_dump($produk1);

$produk2 = new Produk();
var_dump($produk2->judul);
var_dump($produk2->penerbit);
?>