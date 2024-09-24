<?php
class Pegawai {
    protected $nip;
    protected $nama;
    protected $no_hp;
    protected $alamat;

    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn() {
        // Implementasi cek in
    }

    public function cekOut() {
        // Implementasi cek out
    }

    public function getNoHp() {
        return $this->no_hp;
    }

    public function setNoHp($no_hp) {
        $this->no_hp = $no_hp;
    }
}
?>
