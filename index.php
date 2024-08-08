<?php
require_once "Model.php";
require_once "BookRepository.php";
require_once "Database.php";
require_once "BookManager.php";

$BookRepository=new BookRepository("Book");
$books=$BookRepository->findAll();

$book = $BookRepository->findBy(2);

echo "<pre>";
print_r($books);
echo "</pre>";


echo "<pre>";
print_r($book);
echo "</pre>";