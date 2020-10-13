<?php

    require_once("model/Personas_modelo.php");

    $persona = new Personas_model();

    $matrizPersonas = $persona->get_personas();

    require_once("view/Personas_view.php");

    

?>