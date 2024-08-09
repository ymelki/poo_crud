<?php

class BookModel {
    
    public function findAll(){
        $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');
        $query = "SELECT * FROM book";
        $statement = $pdo->query($query);

        // 3. statement qui formate les données sous forme de tableau
        $books = $statement->fetchAll(PDO::FETCH_ASSOC); 
        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $books;

    }

    public function findBy($id){
        $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');

        $query = "SELECT * FROM book where id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        // 3. statement qui formate les données sous forme de tableau
        $book = $statement->fetch(PDO::FETCH_ASSOC); 
        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $book;

    }
}