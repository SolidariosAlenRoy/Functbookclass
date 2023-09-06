<?php

    class book{ //CLASS
        private string $title;
        private string $author;
        private int $pages;

        //Properties/Attributes
        public function __construct($title, $author, $pages){
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }

        //Method
        public function setTitle(string $title){
            $this->title = $title; 
        }

        public function getTitle(){
            return $this->title;
        }
        
        public function setAuthor(string $author){
            $this->author = $author; 
        }
        
        public function getAuthor(){
            return $this->author;
        }

        public function setPages(int $pages){
            $this->pages = $pages; 
        }

        public function getPages(){
            return $this->pages;
        }

        public function describe() :string {
            return $this->title . ' by ' . $this->author . ' has ' . $this->pages . ' pages. '; 
        }
       
    }

    $book = new book("Harry Potter", "J.K. Rowling", 400);
    echo $book->describe() . "\n";

    $book->setTitle("The Cursed Child");
    $book->setpages("600");
    echo $book->describe();






?>