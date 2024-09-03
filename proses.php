<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $angka = $_POST['angka'];

    // Validasi input (harus angka positif)
    if ($angka <= 0) {
        echo "Harap masukkan angka positif.";
    } else {
        echo "<h2>Hasil Perulangan:</h2>";
        echo "<ul>";
        // Perulangan dari 1 sampai angka yang dimasukkan
        for ($i = 1; $i <= $angka; $i++) {
            // Pemilihan untuk menentukan ganjil atau genap
            if ($i % 2 == 0) {
                echo "<li>Angka $i adalah Genap</li>";
            } else {
                echo "<li>Angka $i adalah Ganjil</li>";
            }
        }
        echo "</ul>";
    }
}
?>
