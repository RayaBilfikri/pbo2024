
<?php 
    class Produk {
        //property
        public $merk,
        $tipe,
        $tahun_produksi;

        public function __construct($merk,$tipe,$tahun_produksi)
        {
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->tahun_produksi = $tahun_produksi;
        }

        public function getlabel()
        {
            return "$this->merk,$this->tipe,$this->tahun_produksi"; //tes nanti
        }
    }

    $produk1 = new Produk ("bmw","m5 comp",1995);
    echo $produk1->getlabel();
?>