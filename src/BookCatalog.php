<?php

require_once "Book.php";

class BookCatalog {

    private $bookInCatalog = array();
    
    public function Add($isbn, $bookName, $author, $publicYear, $publisher) {
        $book = new Book();
        $book->setIsbn($isbn);
        $book->setBookName($bookName);
        $book->setAuthor($author);
        $book->setPublicYear($publicYear);
        $book->setpublisher($publisher);
        
        $this->bookInCatalog[$isbn] = $book;
        return $book;
    }
    
    public function isExist($isbn) {
        return array_key_exists($isbn, $this->bookInCatalog);
    }
    
    public function getBookByISBN($isbn) {
       
        $returnValue = "";
        if (array_key_exists($isbn, $this->bookInCatalog) == true) {
           $returnValue = $isbn;
        };
        return $returnValue;
        
    } 
    
}
