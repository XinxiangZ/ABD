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
                    <li><a href="tienda.php?nom=<?php echo $busqueda ?>">Tienda</a></li>
                    <li><a href="biblioteca.php">Biblioteca</a></li>
                    <li><a href="cuentaUsuario.php?nom=<?php echo $busqueda ?>">Cuenta</a></li>
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
            <table>
            <tr><th colspan="6"><h1>Lista de juegos</h1></th></tr>
            <tr>
                <th>Imagen</th>
                <th>precio</th>
                <th>imagen</th>
            </tr>
            <?php
              include("conexion.php");
              $consulta = mysqli_query($db, "SELECT * FROM juegos");
              while($mostrar=mysqli_fetch_array($consulta)){
            
            ?>
            <tr>
                <td><?php echo "<img src='img/".$mostrar['imagen'].".png' width='450' height='280'>"?> </td>
                <td><?php echo $mostrar['nombre']?> </td>
                <td><?php echo $mostrar['precio']?> </td>
            </tr>
            <?php echo $busqueda?>
            <?php
              }
              ?>
              </table>
              

              
              
        </center>

    </body>

</html>