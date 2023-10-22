<?php
class Book {
    private $title;
    private $author;

    public function __construct() {
        $args = func_get_args();
        $numArgs = func_num_args();
        if ($numArgs == 2) {
            $this->title = $args[0];
            $this->author = $args[1];
        } elseif ($numArgs == 1) {
            $this->title = $args[0];
            $this->author = "Unknown";
        } else {
            $this->title = "Unknown";
            $this->author = "Unknown";
        }
    }

    public function displayDetails() {
        echo "Title: " . $this->title . ", Author: " . $this->author;
    }
}

$book1 = new Book("Harry Potter", "J.K. Rowling");
$book2 = new Book("Lord of the Rings");
$book3 = new Book();

$book1->displayDetails();
echo "<br>";
$book2->displayDetails();
echo "<br>";
$book3->displayDetails();
?>
