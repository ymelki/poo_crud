<?php
include __DIR__."/../Model/BookModel.php";

class BookController {
    private $model;

    public function __construct()
    {
        $this->model=new BookModel();
    }


    public function findAll(){
        // un controlleur appelle optionnement un model
        $books=$this->model->findAll();
        // un controlleur appelle forcement une vue
        include __DIR__."/../Template/books.php";
    }

    public function findBy($id){
        $book=$this->model->findBy($id);
        var_dump($book);
        include __DIR__."/../Template/book.php";       
    }
}