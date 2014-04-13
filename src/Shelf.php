<?php

class Shelf {
    private $bookList = array();
    
    public function numberOfBooks() {
        return count($this->bookList);
    }
    
    public function addBook($isdn) {
        
        array_push($this->bookList, $isdn);
        return $this->numberOfBooks();
    }
    
    public function isOnShelf($isdn) {
        $isInArray = in_array($isdn, $this->bookList);
        return $isInArray;
    }
    
}
