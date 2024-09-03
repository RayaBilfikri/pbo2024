<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Selamat Datang</h2>
    <p align="center">Sistem Pembayaran Gaji Karyawan</p>
    <p>Silahkan masukkan jam kerja anda</p>
    <form action="kedua.php" method="post">
        <label>Jam kerja: </label>
        <input type="number" name="jam_kerja"><br>
        <label>apakah anda lembur? (ya/tidak)</label>
        <input type="text" name="lemburga">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
    $jam_kerja = $_POST["jam_kerja"];
    $lembur = $_POST["lemburga"];
    $bayaran = 65000;
    $kalo_lembur = 25000;
    
    $total = $_POST["jam_kerja"]*$bayaran;
    if ($_POST["lemburga"] == "ya") {
        $hitungan_lembur = $total+$kalo_lembur;
        echo "Bayaran anda sebesar Rp $hitungan_lembur";
    }
    elseif ($_POST["lemburga"] == "tidak") {
        echo "Bayaran anda sebesar Rp $total";
    }
?>


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
