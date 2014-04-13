<?php

require "src/Shelf.php";
class ShelfTest extends PHPUnit_Framework_TestCase {
    
    function testNewShelfShouldReturnEmpty () {
        $shelf = new Shelf();
        $this->assertEquals(0, $shelf->numberOfBooks());
    }
    
    function testAddBookShouldAddNewBookToShelf() {
        $shelf = new Shelf();
        $shelf->AddBook("9780987332103");
        $this->assertEquals(true, $shelf->isOnShelf("9780987332103"));
    }
}
