<?php

class BookRepository {

    public function getBooks($pdo){
        $query = "SELECT * FROM book";
        $statement = $pdo->query($query);

        // 3. statement qui formate les données sous forme de tableau
        $books = $statement->fetchAll(PDO::FETCH_ASSOC); 
        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $books;

    }
}