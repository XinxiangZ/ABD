<!DOCTYPE html>
<html>
<head>

    <title>ABD Games - Registrar Usuario</title>

</head>

<body>
    <div>

        <?php


        function conectar($host, $usuario, $contasenia, $db)
        {

            $db = @mysqli_connect($host, $usuario, $contasenia, $db);
            return $db;
        }

        function desconectar($conexion)
        {

            if ($conexion) {

                $ok = @mysqli_close($conexion);
            }

        }

        $busqueda = strtolower($_POST["nom"]);
        $contra = strtolower($_POST["con"]);

        if ($busqueda == "" ||  $contra == "") {
            include("registrarUsuario.html");
            echo " <center><FONT SIZE=5 COLOR=  '#ff3300' > <p>No se puede dejar los campos vacíos</p></FONT> </center>";
        } else {

            $db = conectar('localhost', 'root', '', 'abd_games');

            $sql = "SELECT * FROM usuario WHERE id = '$busqueda'";
            $consulta = mysqli_query($db, $sql);
            $a = mysqli_num_rows($consulta);

            if ($a > 0) {
                include ("registrarUsuario.html");
                echo " <center><FONT SIZE=5 COLOR=  '#ff3300' > <p> Error Usuario ya registrado</p></FONT> </center>";
            } else {
                mysqli_query($db, "INSERT INTO usuario(id, contrasenia) VALUES ('$busqueda','$contra')");
<<<<<<< Updated upstream
               
=======
                include ("tienda.html");
>>>>>>> Stashed changes
                echo " <center><FONT SIZE=5 COLOR=  '#ff3300' > <p> Usuario registrado con exito</p></FONT> </center>";
			  
               
            }


            
            $ok = mysqli_close($db);
        }



        ?>

    </div>

</body>
</html>