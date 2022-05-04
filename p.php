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
$a = mysqli_num_rows($consulta);
$fila = mysqli_fetch_assoc($consulta);

echo "$fila[nombre]";
echo "$fila[precio]";
?>


    </div>

</body>

</html>