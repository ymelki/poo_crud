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

 if ($page==="categories"){
    echo "je suis dans la page catégories!";
 }

 if ($page==="authors"){
    echo "je suis dans la page auteurs!";
 }

 if ($page==="erreur"){
    include __DIR__."/Controller/ErrorController.php";
    $errorController=new ErrorController();
    $errorController->displayError();
 }



