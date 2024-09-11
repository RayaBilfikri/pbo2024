<?php 
class Bola extends Lingkaran
{
    public function __construct(float $jari_jari) {
        parent::__construct($jari_jari);
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }

    public function luasPermukaan() : float {
        return 4 * parent::luas();
    }
}
?>