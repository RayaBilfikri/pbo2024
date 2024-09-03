<?php

class Lingkaran
{
    const PHI = 3.14;

    public $jari_jari;

    public function __construct(float $jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola extends Lingkaran
{
    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }

    public function luasPermukaan() : float {
        return 4 * parent::luas();
    }
}

class Tabung extends Lingkaran
{
    public $tinggi;

    public function __construct(float $jari_jari, float $tinggi)
    {
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

class Kerucut extends Lingkaran
{
    public $tinggi;

    public function __construct(float $jari_jari, float $tinggi)
    {
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


$lingkaran = new Lingkaran(7);
echo "Lingkaran:\n";
echo "Jari-jari: " . $lingkaran->jari_jari . "\n";
echo "Luas: " . $lingkaran->luas() . "\n";
echo "Keliling: " . $lingkaran->keliling() . "\n\n";

$bola = new Bola(7);
echo "Bola:\n";
echo "Jari-jari: " . $bola->jari_jari . "\n";
echo "Volume: " . $bola->volume() . "\n";
echo "Luas Permukaan: " . $bola->luasPermukaan() . "\n\n";

$tabung = new Tabung(7, 10);
echo "Tabung:\n";
echo "Jari-jari: " . $tabung->jari_jari . "\n";
echo "Tinggi: " . $tabung->tinggi . "\n";
echo "Volume: " . $tabung->volume() . "\n";
echo "Luas Permukaan: " . $tabung->luasPermukaan() . "\n\n";

$kerucut = new Kerucut(7, 10);
echo "Kerucut:\n";
echo "Jari-jari: " . $kerucut->jari_jari . "\n";
echo "Tinggi: " . $kerucut->tinggi . "\n";
echo "Volume: " . $kerucut->volume() . "\n";
echo "Luas Permukaan: " . $kerucut->luasPermukaan() . "\n";

?>
