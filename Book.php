<?php 
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
?>