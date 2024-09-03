<?php

// Fungsi untuk menghitung keliling lingkaran
function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

// Fungsi untuk menghitung volume bola
function volumeBola($jari) : float {
    $volume = (4 / 3) * 3.14 * pow($jari, 3);
    return $volume;
}

// Fungsi untuk menghitung volume tabung
function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

// Fungsi untuk menghitung volume kerucut
function volumeKerucut($jari, $tinggi) : float {
    $volume = (1 / 3) * 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

$jari = 45;
$tinggi_tabung = 100;
$tinggi_kerucut = 50;

$keliling = kelilingLingkaran($jari);
$volume_bola = volumeBola($jari);
$volume_tabung = volumeTabung($jari, $tinggi_tabung);
$volume_kerucut = volumeKerucut($jari, $tinggi_kerucut);

echo "Keliling lingkaran dengan jari-jari {$jari} adalah {$keliling}\n";
echo "Volume bola dengan jari-jari {$jari} adalah {$volume_bola}\n";
echo "Volume tabung dengan jari-jari {$jari} dan tinggi {$tinggi_tabung} adalah {$volume_tabung}\n";
echo "Volume kerucut dengan jari-jari {$jari} dan tinggi {$tinggi_kerucut} adalah {$volume_kerucut}\n";
