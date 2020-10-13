<?php

    require_once("model/Productos_modelo.php");

    $producto = new Productos_model();

    $matrizProductos = $producto->get_productos();

    require_once("view/Productos_view.php");

    

?>