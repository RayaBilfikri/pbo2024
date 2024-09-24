<?php
require_once 'Pegawai.php';

class TenagaKependidikan extends Pegawai {
    private $gaji_pokok;

    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function hitungGaji() {
        // Implementasi perhitungan gaji
    }

    public function getGajiPokok() {
        return $this->gaji_pokok;
    }

    public function setGajiPokok($gaji_pokok) {
        $this->gaji_pokok = $gaji_pokok;
    }
}
?>
