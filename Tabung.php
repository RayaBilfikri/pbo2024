<?php 
class Tabung extends Lingkaran
{
    public $tinggi;

    public function __construct(float $jari_jari, float $tinggi) {
        parent::__construct($jari_jari);
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return parent::luas() * $this->tinggi;
    }

    public function luasPermukaan() : float {
        return 2 * parent::luas() + parent::keliling() * $this->tinggi;
    }
}
?>