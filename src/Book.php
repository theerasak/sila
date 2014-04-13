<?php

class Book {

    private $isbn;
    private $bookName;
    private $author;
    private $publicYear;
    private $publisher;
    
    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    public function getBookName() {
        return $this->bookName;
    }

    public function setBookName($bookName) {
        $this->bookName = $bookName;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPublicYear() {
        return $this->publicYear;
    }

    public function setPublicYear($publicYear) {
        $this->publicYear = $publicYear;
    }

    public function getPublisher() {
        return $this->publisher;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
    }


    
}
