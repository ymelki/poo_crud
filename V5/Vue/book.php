<?php
require_once "..\Model\Model.php";
require_once "..\Model\BookRepository.php";
require_once "..\Model\Database.php";

$BookRepository=new BookRepository("Book");
$id=$_GET['id'];
$book=$BookRepository->findBy($id);

// $book = $BookRepository->findBy(2);

?>

 
        <?=$book['name']?>
 
        

