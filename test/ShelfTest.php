<?php

require_once "src/Shelf.php";
require_once "src/BookCatalog.php";

class ShelfTest extends PHPUnit_Framework_TestCase {
    
    function testNewShelfShouldReturnEmpty () {
        $shelf = new Shelf();
        $this->assertEquals(0, $shelf->numberOfBooks());
    }
    
    function testAddBookShouldAddNewBookToShelf() {
        $shelf = new Shelf();
        $bookCatalog = new BookCatalog();
        $book = $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        $shelf->AddBook($book);
        $this->assertEquals(true, $shelf->isOnShelf("9780987332103"));
    }
    
    
}
