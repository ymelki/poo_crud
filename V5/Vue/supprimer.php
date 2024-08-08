<?php
require_once "..\Model\Model.php";
require_once "..\Model\BookRepository.php";
require_once "..\Model\Database.php";

$BookRepository=new BookRepository("Book");
$id=$_GET['id'];
$book=$BookRepository->delete($id);

header("location:vue/books.php");