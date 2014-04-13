<?php

require_once "src/BookCatalog.php";
require_once "src/Book.php";
class BookCatalogTest extends PHPUnit_Framework_TestCase {
    
    public function testAddNewBookShouldAddNewBookToBookCatalog() {
        $book = new BookCatalog();
        $book->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        $this->assertEquals(true ,$book->isExist("9780987332103"));
    }
    
    public function testGetBookByISBNShouldReturnISBN() {
        $book = new BookCatalog();
        $book->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        $this->assertEquals("9780987332103", $book->getBookByISBN("9780987332103"));
    }

}

?>
