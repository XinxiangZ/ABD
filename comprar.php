<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        ABD Games - Tienda
    </title>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <?php

    if (isset($busqueda)) {
        $variable1 = $busqueda;
        
    } else {
        $variable1 = ($_GET['nom']);
    }

    ?>
    <header>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="tienda.php?nom=<?php echo $variable1 ?>">Tienda</a></li>
                    <li><a href="biblioteca.php?nom=<?php echo $variable1 ?>">Biblioteca</a></li>
                    <li><a href="cuentaUsuario.php?nom=<?php echo $variable1 ?>">Cuenta</a></li>
                    <li><a href="entradaPagina.html">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </div>

    </header>

    <body>

        <center>




        </center>

    </body>

</html>