<?php 
namespace App\Shape;
class Kerucut extends Lingkaran
{
    public $tinggi;

    public function __construct(float $jari_jari, float $tinggi) {
        parent::__construct($jari_jari);
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * parent::luas() * $this->tinggi;
    }

    public function luasPermukaan() : float {
        $sisi_miring = sqrt(pow($this->tinggi, 2) + pow($this->jari_jari, 2));
        return parent::luas() + (self::PHI * $this->jari_jari * $sisi_miring);
    }
}
?>