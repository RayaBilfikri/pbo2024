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
?>