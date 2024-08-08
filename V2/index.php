<?php
require_once "Database.php";
require_once "BookManager.php";
$bookManager=new BookManager();
$books=$bookManager->getBooks();

echo "<pre>";
print_r($books);
echo "</pre>";