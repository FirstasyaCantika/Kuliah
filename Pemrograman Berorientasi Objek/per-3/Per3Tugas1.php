<?php
Class Laptop {

    private $merk;
    private $prosesor;
    private $ram;

    public function __construct($merk, $prosesor, $ram) {
        $this->merk = $merk;
        $this->prosesor = $prosesor;
        $this->ram = $ram;
    }

    public function tampilkanInfo() {
        return "Merk Laptop: $this->merk, \nProsesor: $this->prosesor, \nRAM: $this->ram GB";
    }
}

$laptop1 = new Laptop("Lenovo IdeaPad Slim 5i", "Intel Core i5-12450H", 16);
echo "\n";
echo $laptop1->tampilkanInfo();
?>
