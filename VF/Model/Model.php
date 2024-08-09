<?php

abstract class Model {
    protected PDO $pdo;
    protected $table;


    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');
    }
    
    public function findAll(){
        $query = "SELECT * FROM $this->table";
        $statement = $this->pdo->query($query);

        // 3. statement qui formate les données sous forme de tableau
        $books = $statement->fetchAll(PDO::FETCH_ASSOC); 
        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $books;

    }

    public function findBy($id){

        $query = "SELECT * FROM $this->table where id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        // 3. statement qui formate les données sous forme de tableau
        $book = $statement->fetch(PDO::FETCH_ASSOC); 
        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $book;

    }

    public function delete($id){


    }

    public function create($book){


    }

    public function update($book){


    }






}