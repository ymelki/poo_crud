<h1>Liste des livres</h1>

<?php
// ma variable $books qui contient les livres elle est issue du model
// qui va recuperer les données de la B.D
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
