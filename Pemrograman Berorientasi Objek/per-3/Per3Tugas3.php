<?php
Class PersegiPanjang{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas(){
        return $this->panjang * $this->lebar;
    }

    public function hitungKeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }

    public function tampilkanInfo(){
        return "Panjang : $this->panjang \nLebar : $this->lebar \nLuas : "
        . $this->hitungLuas() . "\nKeliling : " . $this->hitungKeliling();
    }
}

$persegiPanjang = new PersegiPanjang(15, 10);
echo $persegiPanjang->tampilkanInfo();
?>