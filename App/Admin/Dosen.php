<?php
require_once 'Pegawai.php';

class Dosen extends Pegawai {
    private $nidn;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar() {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
}
?>
