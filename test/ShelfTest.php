<?php

require_once "src/Shelf.php";
require_once "src/BookCatalog.php";
require_once "src/Book.php";

class ShelfTest extends PHPUnit_Framework_TestCase {
    
    function testNewShelfShouldReturnEmpty () {
        $shelf = new Shelf();
        $this->assertEquals(0, $shelf->numberOfBooks());
    }
    
    function testAddBookShouldAddNewBookAndReturnNumberOfBooks() {
        $shelf = new Shelf();
        $bookCatalog = new BookCatalog();
        $book = $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        $this->assertEquals(1, $shelf->addBook($book));
        $book = $bookCatalog->add("9780321658883","DESIGNING WITH PROGRESSIVE ENHANCEMENT","Todd Parker",2010,"New Riders");
        $this->assertEquals(2, $shelf->addBook($book));
    }
    function testAddBookShouldAddNewBookToShelf() {
        $shelf = new Shelf();
        $bookCatalog = new BookCatalog();
        $book = $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        $shelf->addBook($book);
        $this->assertEquals(true, $shelf->isOnShelf("9780987332103"));
    }
    
    
    function testListAllBooksShouldReturnArray() {
        $shelf = new Shelf();
        $bookCatalog = new BookCatalog();
        $book = $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");       
        $shelf->addBook($book);
        $book = $bookCatalog->add("9780321658883","DESIGNING WITH PROGRESSIVE ENHANCEMENT","Todd Parker",2010,"New Riders");
        $shelf->addBook($book);
        $bookList = $shelf->listAllBooks();
        $this->assertEquals(true , is_array($bookList));
        
    }
    
    
    function testListAllBooksShouldReturnArrayOfBook() {
        $shelf = new Shelf();
        $bookCatalog = new BookCatalog();
        $book = $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");       
        $shelf->addBook($book);
        $book = $bookCatalog->add("9780321658883","DESIGNING WITH PROGRESSIVE ENHANCEMENT","Todd Parker",2010,"New Riders");
        $shelf->addBook($book);
        $bookList = $shelf->listAllBooks();
        $this->assertEquals(true , ($bookList["9780987332103"] instanceof Book));
        $this->assertEquals(true , ($bookList["9780321658883"] instanceof Book));
        
    }
    
    function testGetBookShouldReturnBook() {
        $shelf = new Shelf();
        $bookCatalog = new BookCatalog();
        $book = $bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");       
        $shelf->addBook($book);
        $book = $bookCatalog->add("9780321658883","DESIGNING WITH PROGRESSIVE ENHANCEMENT","Todd Parker",2010,"New Riders");
        $shelf->addBook($book);
        $getBookResult = $shelf->getBook("9780321658883");
        $this->assertEquals(true , ($getBookResult instanceof Book));
        $this->assertEquals("9780321658883", $getBookResult->getIsbn());
        $this->assertEquals("DESIGNING WITH PROGRESSIVE ENHANCEMENT", $getBookResult->getBookName());
        $this->assertEquals("Todd Parker" , $getBookResult->getAuthor());
        $this->assertEquals(2010, $getBookResult->getPublicYear());
        $this->assertEquals("New Riders", $getBookResult->getPublisher());
    }
    
    function testGetBookWithNonExistISBNShouldReturnNull() {
        $shelf = new Shelf();
        $getBookResult = $shelf->getBook("5555555555555");
        $this->assertNull($getBookResult);
    }
    
    
}
