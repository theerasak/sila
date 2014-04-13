<?php

require "src/Shelf.php";
class ShelfTest extends PHPUnit_Framework_TestCase {
    
    function testNewShelfShouldReturnEmpty () {
        $shelf = new Shelf();
        $this->assertEquals(0, $shelf->numberOfBooks());
    }
}
