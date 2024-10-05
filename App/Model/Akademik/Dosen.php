<?php
namespace App\Model\Akademik;
require_once 'App/Admin/Pegawai.php';
class Dosen extends Pegawai {
    public $nidn;
    public function mengajar() : void {
        echo "{$this->nama} sedang mengajar perkuliahan";
}
}
?>