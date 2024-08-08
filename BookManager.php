<?php

class BookManager{


    public function getBooks(){
        // Connexion à la B.D.
        $database=new Database();
        $pdo = $database->getConnexion();

        // Requete
        $bookRepository=new BookRepository();
        $books = $bookRepository->getBooks($pdo, "book");

        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $books;
    }
}