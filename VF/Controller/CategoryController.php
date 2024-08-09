<?php

class CategoryController {


    public function findAll(){

        // un controlleur appelle optionnement un model
        include __DIR__."/../Model/CategorieModel.php";
        $categoryModel=new CategoryModel();
        $categories=$categoryModel->findAll();
        var_dump($categories);
    
        // un controlleur appelle forcement une vue
        include __DIR__."/../Template/categories.php";
        echo "test2";
    }

}