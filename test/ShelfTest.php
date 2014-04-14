<?php

require_once "src/Shelf.php";
require_once "src/BookCatalog.php";
require_once "src/Book.php";

class ShelfTest extends PHPUnit_Framework_TestCase {
    
    protected  $shelf; 
    protected  $bookCatalog;
    protected  $book1;
    protected  $book2;
            
    
    function setUp() {
        $this->shelf = new Shelf();
        $this->bookCatalog = new BookCatalog();
        $this->book1 = $this->bookCatalog->add("9780987332103","JUMP START NodeJS","Don Nguyen",2012,"sitepoint");
        $this->book2 = $this->bookCatalog->add("9780321658883","DESIGNING WITH PROGRESSIVE ENHANCEMENT","Todd Parker",2010,"New Riders");
        $this->shelf->addBook($this->book1);
        $this->shelf->addBook($this->book2);
    }
    
    function tearDown() {
        unset($this->book1);
        unset($this->book2);
        unset($this->bookCatalog);
        unset($this->shelf);
    }
    
    function testNewShelfShouldReturnEmpty () {
        $shelf = new Shelf();
        $this->assertEquals(0, $shelf->numberOfBooks());
    }
    
    function testAddBookShouldAddNewBookAndReturnNumberOfBooks() {
        $book = $this->bookCatalog->add("9786163876263","The Heirs","Kim Eun-Sook",2014,"Amarin");
        $this->assertEquals(3, $this->shelf->addBook($book));
    }
    
    function testAddBookShouldAddNewBookToShelf() {        
        $this->shelf->addBook($this->book1);
        $this->assertEquals(true, $this->shelf->isOnShelf("9780987332103"));
    }
    
    
    function testListAllBooksShouldReturnArray() {
        $bookList = $this->shelf->listAllBooks();
        $this->assertEquals(true , is_array($bookList));
    }
    
    
    function testListAllBooksShouldReturnArrayOfBook() {
        $bookList = $this->shelf->listAllBooks();
        $this->assertEquals(true , ($bookList["9780987332103"] instanceof Book));
        $this->assertEquals(true , ($bookList["9780321658883"] instanceof Book));
        
    }
    
    function testGetBookShouldReturnBook() {
        $getBookResult = $this->shelf->getBook("9780321658883");
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
