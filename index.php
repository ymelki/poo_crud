<?php
require_once "BookRepository.php";
require_once "Database.php";
require_once "BookManager.php";
$bookManager=new BookRepository("Book");
$books=$bookManager->findAll();

echo "<pre>";
print_r($books);
echo "</pre>";