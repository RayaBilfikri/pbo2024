<?php

class Product {
    // Atribut yang bersifat public
    public $name;
    public $price;
    public $category;

    // Constructor untuk menginisialisasi objek
    public function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    // Metode untuk menghitung harga setelah diskon
    public function getDiscountedPrice($discount) {
        return $this->price - ($this->price * $discount / 100);
    }

    // Metode untuk menampilkan informasi produk
    public function displayProductInfo() {
        echo "Name: " . $this->name . "\n";
        echo "Price: $" . $this->price . "\n";
        echo "Category: " . $this->category . "\n";
    }
}


class Electronics extends Product {
    public $warranty;

    public function __construct($name, $price, $category, $warranty) {
        parent::__construct($name, $price, $category);
        $this->warranty = $warranty;
    }

    // Menampilkan informasi produk elektronik
    public function displayProductInfo() {
        parent::displayProductInfo();
        echo "Warranty: " . $this->warranty . " years\n";
    }
}

class Clothing extends Product {
    public $size;
    public $material;

    public function __construct($name, $price, $category, $size, $material) {
        parent::__construct($name, $price, $category);
        $this->size = $size;
        $this->material = $material;
    }

    // Menampilkan informasi produk pakaian
    public function displayProductInfo() {
        parent::displayProductInfo();
        echo "Size: " . $this->size . "\n";
        echo "Material: " . $this->material . "\n";
    }
}

class Food extends Product {
    public $expirationDate;

    public function __construct($name, $price, $category, $expirationDate) {
        parent::__construct($name, $price, $category);
        $this->expirationDate = $expirationDate;
    }

    // Menampilkan informasi produk makanan
    public function displayProductInfo() {
        parent::displayProductInfo();
        echo "Expiration Date: " . $this->expirationDate . "\n";
    }
}



// Membuat objek untuk produk elektronik
$smartphone = new Electronics("Smartphone", 699, "Electronics", 2);
$smartphone->displayProductInfo();
echo "Price after 10% discount: $" . $smartphone->getDiscountedPrice(100) . "\n\n";

// Membuat objek untuk produk pakaian
$tshirt = new Clothing("T-Shirt", 29, "Clothing", "L", "Cotton");
$tshirt->displayProductInfo();
echo "Price after 15% discount: $" . $tshirt->getDiscountedPrice(15) . "\n\n";

// Membuat objek untuk produk makanan
$apple = new Food("Apple", 1.5, "Food", "2024-09-01");
$apple->displayProductInfo();
echo "Price after 5% discount: $" . $apple->getDiscountedPrice(5) . "\n";



?>
