<?php

require_once "src/BookCatalog.php";
require_once "src/Book.php";
class BookCatalogTest extends PHPUnit_Framework_TestCase {
    
    public function testAddNewBookShouldAddNewBookToBookCatalog() {
        $bookCatalog = new BookCatalog();
        $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        $this->assertEquals(true , $bookCatalog->isExist("9780987332103"));
    }
    
    public function testGetBookByISBNShouldReturnISBN() {
        $bookCatalog = new BookCatalog();
        $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        $this->assertEquals("9780987332103", $bookCatalog->getBookByISBN("9780987332103"));
    }
    
    public function testAddNewBookShouldReturnBook() {
        $bookCatalog = new BookCatalog();
        $book = $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        
        $this->assertEquals("9780987332103", $book->getIsbn());
        $this->assertEquals("JUMP START NodeJS", $book->getBookName());
        $this->assertEquals("Don Nguyen", $book->getAuthor());
        $this->assertEquals(2012, $book->getPublicYear());
        $this->assertEquals("sitepoint", $book->getPublisher());
        
    }

}

?>
