<?php
Class Suhu{

    public $celcius;

    function __construct($celcius)
    {
        $this->celcius = $celcius;
        echo "Konverensi Suhu dari Celcius";
        echo "Suhu Dalam Celcius = $celcius derajat \n";
    }

    public function kelvin(){
        $kelvin = $this->celcius + 273.15;
        echo "Suhu Dalam Kelvin = $kelvin derajat \n";
    }

    public function fahrenheit(){
        $fahrenheit = $this->celcius * 1.8 + 32;
        echo "Suhu Dalam Fahrenheit = $fahrenheit derajat \n";
    }

    function __destruct(){
        echo "Sekian Konferensi Suhu Yang Bisa Dilakukan \n";
    }
}

$suhu=New Suhu(36);
$suhu->kelvin();
$suhu->fahrenheit();
?>
