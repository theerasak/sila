<?php

require_once "Book.php";

class Shelf {
    private $bookList = array();
    
    public function numberOfBooks() {
        return count($this->bookList);
    }
    
    public function addBook(Book $book) {
        
        $this->bookList[$book->getIsbn()] = $book;
        return $this->numberOfBooks();
    }
    
    public function isOnShelf($isbn) {
        return array_key_exists($isbn , $this->bookList);
    }
    
}
