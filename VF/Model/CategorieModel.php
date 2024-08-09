<?php

class CategoryModel {
    
    public function findAll(){
        $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');
        $query = "SELECT * FROM category";
        $statement = $pdo->query($query);

        // 3. statement qui formate les données sous forme de tableau
        $categories = $statement->fetchAll(PDO::FETCH_ASSOC); 
        // PDO::FETCH_ASSOC correspond au formatage de donnée approprié
        return $categories;

    }

    public function findBy(){
        
    }
}