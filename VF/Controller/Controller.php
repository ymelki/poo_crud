<?php

abstract class Controller {
    protected $model;
    protected $template;

    public function __construct()
    {
        $this->model=new $this->model();
    }


    public function findAll(){
        // un controlleur appelle optionnement un model
        $books=$this->model->findAll();
        // un controlleur appelle forcement une vue
        include __DIR__."/../Template/$this->template";
    }

    public function findBy($id){
        $book=$this->model->findBy($id);
        var_dump($book);
        include __DIR__."/../Template/$this->template";       
    }

}