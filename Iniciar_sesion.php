<!DOCTYPE html>
    <head>

        <title>Iniciar_sesion</title>
    
    </head>
    <body>
        <div>
            
        <?php


            function conectar($host,$usuario,$contasenia,$db){


                $db = @mysqli_connect($host,$usuario,$contasenia,$db);

                    if($db){


                        echo 'Coneción correcta.<br>';
                        echo 'Info del server.<br>',mysqli_get_host_info($db),'<br>';                       


                    }else{

                        printf('Error.<br>',mysqli_connect_errno(),mysqli_connect_error());
                    }

                
                    return $db;


            }

            function desconectar($conexion){

                if($conexion){

                    $ok = @mysqli_close($conexion);

                    if($ok){

                        echo 'Desconexión correcta.<br>';

                    }else{

                        echo 'Fallo en la desconexion.<br>';


                    }

                }else{

                    echo 'Conexion no abierta.<br>';

                }

            }


            $db=conectar('localhost','root','','abd_games');

            $busqueda =strtolower($_POST['nom']);

            $sql = "SELECT * FROM usuario WHERE id = '$busqueda'";

            $consulta = mysqli_query($db,$sql);
            $a=mysqli_num_rows($consulta);
            
            if($a>0 ){

                $fila = mysqli_fetch_assoc($consulta);

                if($fila['contrasenia'] != $_POST['con']){

                    echo "Contrasenia incorrecto.<br>";
                }else{

                    echo "Acceso correcto.<br>";

                }


            }else {

                echo "Usuario no encontrado.<br>";

            }
         
            

            $ok = mysqli_close($db);

        ?>

        </div>
    
    </body>
</html>