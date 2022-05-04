<!DOCTYPE html>
<html>

<head>

    <title>ABD Games - Registrar Usuario</title>

</head>

<body>
    <div>
             <?php

                    $db = new mysqli('localhost', 'root', '', 'abd_games');
                    $consulta = mysqli_query($db, "SELECT * FROM juegos WHERE nombre = 'naraka'");
                    $fila = mysqli_fetch_assoc($consulta);
                    $nombre=$fila["nombre"];
                    $precio=$fila["precio"];
                    echo "Tus puntos :";
                    echo "&nbsp $nombre";

                 ?>


    </div>

</body>

</html>