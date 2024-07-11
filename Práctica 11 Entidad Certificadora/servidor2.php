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
    
        mysqli_select_db ($connection, "entidad_certificadora");
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);
    
        return $result;
    }

    if (isset($_POST["usuario"])) {
        $usuario = $_POST["usuario"];
    }

    $query = 'SELECT COUNT(*) AS existe, firma FROM firmas WHERE usuario = "'.$usuario.'"';
    $resultado = mysqli_fetch_assoc(queryDB($query));
    if ($resultado["existe"] == 1) {
        echo md5($resultado["firma"].$usuario);
    } else {
        echo 'null';
    }
?>