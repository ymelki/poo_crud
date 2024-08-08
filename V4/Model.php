<?php

abstract class Model {
    protected string $table;

    public function findAll(){
        $database=new Database();
        $pdo=$database->getConnexion();

        $query = "SELECT * FROM $this->table";
        $statement = $pdo->query($query);

        // 3. statement qui formate les données sous forme de tableau
        $books = $statement->fetchAll(PDO::FETCH_ASSOC); 
        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $books;

    }

    public function findBy($id){
        $database=new Database();
        $pdo=$database->getConnexion();

        // a modifier en tant que requete prepare

        $query = "SELECT * FROM $this->table where id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        // 3. statement qui formate les données sous forme de tableau
        $books = $statement->fetch(PDO::FETCH_ASSOC); 
        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $books;
    }

    // faire la partie delete 

} 