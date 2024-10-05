<?php
use App\Model\Akademik\Dosen;
require_once "vendor/autoland.php";
$dian = new Dosen (198411132015041001, "Dian Prawira", 62111111, "Jln Purnama", "0013118405",);
$dian->mengajar();
echo $dian->getNoHp();
?>