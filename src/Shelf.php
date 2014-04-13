<?php

class Shelf {
    private $bookList = array();
    
    public function numberOfBooks() {
        return count($this->bookList);
    }
    
}
