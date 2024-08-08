<?php

class Database {
    public function getConnexion(){
        $pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');
        return $pdo;
    }
}