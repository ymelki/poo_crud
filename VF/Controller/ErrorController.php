<?php

class ErrorController {
    public function displayError(){

        // BD? pas besoin donc pas d'appel de model

        // besoin de la vue
        include __DIR__."/../Template/error.php";

    }
}