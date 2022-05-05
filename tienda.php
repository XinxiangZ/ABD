<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        ABD Games - Tienda
    </title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contenedor-imagenes {
            display: flex;
        }

        .contenedor-imagenes img:first-child {
            margin-right: 10px;
        }
    </style>

</head>

<body>
    <header>
        <div class="menu">
            <nav>
                <ul>
                        <li><a href="tienda.php">Tienda</a></li>
                        <li><a href="biblioteca.php">Biblioteca</a></li>
                        <li><a href="cuentaUsuario.php">Cuenta</a></li>
                        <li><a href="entradaPagina.html">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </div>

    </header>

    <body>

        <center>
            <div style="display:inline-block;vertical-align:top;"> <img src="img/game.gif" width="250" height="280">
            </div>
            <div style="display:inline-block;">
                <br>
                <br>
                <br>
                <br>
                <br>
                <FONT SIZE=15 COLOR="#85C1E9">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Compra juegos en ABD Games
                </FONT>
                <FONT SIZE=6 COLOR="#FBFCFC">
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La mejor tienda de juegos online</p>
                </FONT>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="contenedor-imagenes1">
                <img src="img/naraka.PNG" width="450px">
                <img src="img/dbd.jpg" width="450px">
                <img src="img/dota.jpg" width="450px">
            </div> 
            <br>

                <FONT SIZE=6 COLOR="#DAA520">
                   
                <?php

                    $db = new mysqli('localhost', 'root', '', 'abd_games');
                    $consulta = mysqli_query($db, "SELECT * FROM juegos WHERE nombre = 'naraka'");
                    $fila = mysqli_fetch_assoc($consulta);
                    $nombre=strtoupper($fila["nombre"]);
                    $precio=$fila["precio"];
                    echo "&nbsp $nombre";
                    echo "&nbsp $precio&nbsp€";

                 ?>
                 </FONT>


            <br>
            <div class="contenedor-imagenes2">
                <img src="img/eldenRing.png" width="450px">
                <img src="img/lol.jpg" width="450px">
                <img src="img/pubg.jpg" width="450px">
            </div>
            <br>
            <br>
            <div class="contenedor-imagenes3">
                <img src="img/gtaV.jpg" width="450px">
                <img src="img/rainbow6.jpg" width="450px">
                <img src="img/picoPark.png" width="450px">
            </div> 

        </center>

    </body>

</html>