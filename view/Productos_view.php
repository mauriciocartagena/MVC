
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVP</title>
<style>
    td{
        border:1px dotted #FF0000 ;
    }
</style>
</head>
<body>

    <table>

        <tr>
            <td>Nombre De la Persona</td>
        </tr>

<?php

    foreach ( $matrizProductos as $registro ) {
        
        echo "<tr>
                <td>".$registro["Nombre"]."</td>
            </tr>";
        
    }

?>
    </table>

</body>
</html>