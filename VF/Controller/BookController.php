<?php

class BookController {


    public function findAll(){

        // un controlleur appelle optionnement un model
        include __DIR__."/../Model/BookModel.php";
        $bookModel=new BookModel();
        $books=$bookModel->findAll();
    
        // un controlleur appelle forcement une vue
        include __DIR__."/../Template/books.php";
    }
}