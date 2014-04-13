<?php

class BookCatalog {

    private $bookInCatalog = array();
    
    public function Add($isbn, $bookName, $author, $publicYear, $publisher) {
        $item = array("isbn" => $isbn, "bookName" => $bookName, "author" => $author, "publicYear" => $publicYear, "publisher" => $publisher);
        $this->bookInCatalog[$isbn] = $item;
        return $isbn;
    }
    
    public function isExist($isbn) {
        return array_key_exists($isbn, $this->bookInCatalog);
                
    }
    
}
