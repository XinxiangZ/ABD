<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        ABD Games - Mi cuenta
    </title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
        <?php
            $variable1=($_GET['nom']);
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
            <div style="display:inline-block;vertical-align:top;"> <img src="img/game.gif" width="250" height="280">
            </div>
            <div style="display:inline-block;">
                <br>
                <br>
                <br>
                <br>
                <br>
                <FONT SIZE=16 COLOR="#85C1E9"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mi cuenta</FONT>
                <FONT SIZE=7 COLOR="#FBFCFC">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mis datos personales</p>
                </FONT>
            </div>
        </center>
        
        <FONT SIZE=10 COLOR="#DAA520">  

        <?php

         echo $variable1;
        ?>
         </FONT>

        <FONT COLOR="white">
            <form action="datos.php" method="post">
                <fieldset>
                        <br>
                        <legend>
                            <FONT SIZE=6> <b>Mis datos personales </b></FONT>
                        </legend>
                        <br>
                        <FONT SIZE=4 >&nbsp;&nbsp;&nbsp;Tlf <p><br><input type="text" name="tlf"></p>
                        <br>
                        <FONT SIZE=4>&nbsp;&nbsp;&nbsp;Direccion <p><br><input type="password" name="dir"></p>
                        <br>
                </fieldset>
                <br>
                <div style="text-align: center;"><button type="submit" class="button button2">Guardar</button></div>
            </form>
        </FONT>
    </body>

</html>