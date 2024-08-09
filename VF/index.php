<?php

/**
 * Routeur : rediriger la page (un parametre présent dans l'url
 *  vers laquelle on veut aller vers un cheminement
 * de code
 * Avant page = ficher
 * 
 * 
 * Un routeur appelle un controlleur
 * Un controlleur appelle une vue et optionnelement un model
 */

 // parametre page

 if (!(isset($_GET['page']))){
    $page="erreur";
 }
 else {
    $page=$_GET['page'];
 }
 echo $page;

 if ($page==="books"){
    // je veux me connecter à la B.D.
    // recuperer les données
    // je veux les afficher
    echo "je suis dans la page books!";
    // le routeur n'appelle la vue il appelle le controlleur
    include __DIR__."/Controller/BookController.php";
    $controlleur=new BookController();
    $controlleur->findAll();
    //include __DIR__."/Template/books.php";
 }

/**
 * Méthode
 * 1. Router : on test l'url /index.php?page=categories
 * 2. Controller : on inclut le controlleur et on verifie avec un echo
 *                 on a mis un echo dans une méthode de la classe et on a teste
 * 3. model : les données
 * 4. Tempalate : la vue
 */

 if ($page==="categories"){
    echo "je suis dans la page catégories!";
    include __DIR__."/Controller/CategoryController.php";
    $categorieController=new CategoryController();
    $categorieController->findAll();

 }

 if ($page==="authors"){
    echo "je suis dans la page auteurs!";
 }

 if ($page==="erreur"){
    include __DIR__."/Controller/ErrorController.php";
    $errorController=new ErrorController();
    $errorController->displayError();
 }
// index.php?page=book.php&id=2
if ($page==="book"){
    echo "testbook";
    include __DIR__."/Controller/BookController.php";
    $controlleur=new BookController();
    $id=$_GET["id"];
    echo $id;
    $controlleur->findBy($id);


}

// index.php?page=supprimer.php&id=2
if ($page==="supprimer"){
    echo "testsupprimer";
}
