<?php
    function queryDB($query){
        //Coneccion
        $connection = mysqli_connect("localhost" , "root" , "");
        if (!$connection->set_charset("utf8")) {
          printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
          exit();
        }
    
        if($connection == false)
          printf("Ha habido un error".mysqli_connect_error());
    
        mysqli_select_db ($connection, "servidor_tsw");
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);
    
        return $result;
    }

    if (isset($_POST["usuario"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $certificado = $_POST["certificado"];

        $query = 'SELECT COUNT(*) AS existe FROM usuarios WHERE usuario = "'.$usuario.'" AND password = "'.$password.'"';
        $resultado = queryDB($query);
        if (mysqli_fetch_assoc($resultado)["existe"] == 1) {
            
            /* Peticion a la entidad certificadora */
            $url = 'servidor2.php';
            $opciones = array(
                'http' => array(
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    "method" => "POST",
                    "content" => http_build_query(['usuario' => $usuario])
                )
            );
            $certificadoEC = file_get_contents($url, false, stream_context_create($opciones));
            /* ------------------------------------------------------------------------------- */

            if ($certificado == $certificadoEC) {
                ?>
                <h1>Datos correctos</h1>
                <p><strong>Usuario: </strong> <?php echo $usuario?></p>
                <p><strong>Password: </strong> <?php echo $password?></p>
                <p><strong>Certificado: </strong> <?php echo $certificado?></p>
                <?php
            } else {
                ?>
                <h1>Datos del usuario incorrectos</h1>
                <p>Vuelva al login e ingrese los datos correctos</p>
                <?php
            }
        } else {
            ?>
            <h1>Datos del usuario incorrectos</h1>
            <p>Vuelva al login e ingrese los datos correctos</p>
            <?php
        }
    }
?>