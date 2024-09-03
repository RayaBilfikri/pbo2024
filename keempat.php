<?php

class Author {
    private string $name;
    private string $description;

    // Constructor
    public function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }

    // Method to show information based on type
    public function show(string $type): array {
        if (strcasecmp($type, "name") == 0) {
            return [$this->name];
        } elseif (strcasecmp($type, "description") == 0) {
            return [$this->description];
        } else {
            return [$this->name, $this->description];
        }
    }
}

class Book {
    private int $ISBN;
    private string $title;
    private string $description;
    private string $category;
    private string $language;
    private int $numberOfPages;
    private string $author;
    private string $publisher;

    // Constructor
    public function __construct(int $ISBN, string $title, string $description, string $category, string $language, int $numberOfPages, string $author, string $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPages = $numberOfPages;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    // Method to show all book details
    public function showAll(): array {
        return [
            "ISBN: " . $this->ISBN,
            "Title: " . $this->title,
            "Description: " . $this->description,
            "Category: " . $this->category,
            "Language: " . $this->language,
            "Number of Pages: " . $this->numberOfPages,
            "Author: " . $this->author,
            "Publisher: " . $this->publisher
        ];
    }

    // Method to show book details based on ISBN
    public function detail(int $ISBN): array {
        if ($this->ISBN === $ISBN) {
            return $this->showAll();
        } else {
            return ["Book with ISBN " . $ISBN . " not found"];
        }
    }
}

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

// Main
$author = new Author("Jane Austen", "English novelist known for her novels set among the British landed gentry.");
$book = new Book(123456789, "Pride and Prejudice", "A classic novel about manners and matrimonial machinations.", "Fiction", "English", 279, $author->show("name")[0], "Penguin Books");
$publisher = new Publisher("Penguin Books", "80 Strand, London, WC2R 0RL, England", "123456789");

// Display author information
echo "Author Info: " . $author->show("name")[0] . " - " . $author->show("description")[0] . "\n";

// Display book details based on ISBN
foreach ($book->detail(123456789) as $info) {
    echo $info . "\n";
}

// Change and display publisher phone number
$publisher->setPhone("987654321");
echo "Publisher Phone: " . $publisher->getPhone() . "\n";

?>