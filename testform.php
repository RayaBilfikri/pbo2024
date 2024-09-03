<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
if ($waktu >= 19) 
{
    echo "Selamat Malam, {$nama}, sekarang pukul {$waktu}\n";
}
elseif ($waktu >= 15) 
{
    echo "Selamat Sore, {$nama}, sekarang pukul {$waktu}\n";
}
elseif ($waktu >= 11)
{
    echo "Selamat Siang, {$nama}, sekarang pukul {$waktu}\n";
}
elseif ($waktu >= 5)
{
    echo "Selamat pagi, {$nama}, sekarang pukul {$waktu}\n";
}
?>