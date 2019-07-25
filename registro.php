<?php
  $conexion = new mysqli("localhost", "root", "", "dbtest");
  if($conexion->connect_errno)
  {
   echo'error en la conexion';
  }
  else
  {
   echo'conectado';
  }

function disconnect() {
  mysqli_close();
}


  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];

//echo "$nombres , $apellidos, $email, $sucursal, $monto, $ticket";

  $insertar = "INSERT INTO clientes(nombres,apellidos) VALUES ('$nombres','$apellidos')";
    $resultado = mysqli_query($conexion, $insertar);
        if(!$resultado){
            echo 'Error al registrase' . $mysqli->error;
        } else {
          echo '<script>
           alert("Usuario registrado exitosamente");
           window.history.go(-1);
          </script>';
        }
        //cerrar conexion
        mysqli_close($conexion);

?>
