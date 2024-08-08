<?php
require_once "..\Model\Model.php";
require_once "..\Model\BookRepository.php";
require_once "..\Model\Database.php";

$BookRepository=new BookRepository("Book");
$books=$BookRepository->findAll();

// $book = $BookRepository->findBy(2);


foreach ($books as $book){
    ?>
    <hr>
    Livre : <a href="book.php?id=<?=$book['id']?>">
        <?=$book['name']?>
    </a> -
    <a href="supprimer.php?id=<?=$book['id']?>">
        supprimer
    </a>
    <?php
}

echo "<pre>";
print_r($books);
echo "</pre>";

