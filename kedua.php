<?php

function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * pow($jari, 3);
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}


$jari = 45;
$tinggiTabung = 100;
$tinggiKerucut = 75;

$luas_tanah = luasLingkaran($jari);
$keliling = kelilingLingkaran($jari);
$volumeBola = volumeBola($jari);
$volumeTabung = volumeTabung($jari, $tinggiTabung);
$volumeKerucut = volumeKerucut($jari, $tinggiKerucut);

echo "Luas tanah budi adalah {$luas_tanah}\n";
echo "Keliling lingkaran: {$keliling}\n";
echo "Volume bola: {$volumeBola}\n";
echo "Volume tabung: {$volumeTabung}\n";
echo "Volume kerucut: {$volumeKerucut}\n";

?>

