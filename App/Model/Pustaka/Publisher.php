<?php 
namespace App\Model\Pustaka;
class Publisher {
    private string $name;
    private string $address;
    private string $phone;

    // Constructor
    public function __construct(string $name, string $address, string $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    // Method to set phone
    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    // Method to get phone
    public function getPhone(): string {
        return $this->phone;
    }
}

?>