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
    
    public function listAllBooks() {
        return $this->bookList;
    }
    
    public function getBook($isbn) {
        $book = new Book();
        if ($this->isOnShelf($isbn)) {
            $book = $this->bookList[$isbn];
            return $book;
        }
        else {
            return null;
        }
    }
           
}
