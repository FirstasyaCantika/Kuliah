<?php
//membuat class Mobil
class mobil {

	private $pemilik = "Budi";
	private $merk = "BMW";

	public function __construct(){
		echo "Ini berasal dari Constructor Mobil";
	}
	public function hidupkan_mobil(){
		return "Hidupkan mobil $this->merk punya $this->pemilik";
	}

public function __destruct(){
	echo "Ini berasl dari Destructor Mobil";
}
}

# Membuat objek dari class laptop (instansiasi)
$mobil_budi = new mobil();
echo "\n";
echo $mobil_budi->hidupkan_mobil();
echo "\n";
?>
