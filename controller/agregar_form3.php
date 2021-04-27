<?php

///////////////////////////////////////////////////////////////////// Configuracion conexión php bbdd
require('../config/conexion.php');
/////////////////////////////////////////////////////////////////// Validacion de datos (controler)- Recibe datos de la vista

if (!isset($_POST["nombre"] ,$_POST["email"],$_POST["telefono"],$_POST["mensaje"],$_POST["VoC"],$_POST["presupuesto"],$_POST["tipocontacto"],$_POST["fecha"],$_POST["hora"]  ) || $_POST["nombre"] !== "" && $_POST["email"] !== "" && $_POST["telefono"] !== ""&& $_POST["mensaje"] !== "" && $_POST["VoC"] !== "" && $_POST["presupuesto"] !== "" && $_POST["tipocontacto"] !== "" && $_POST["fecha"] !== "" && $_POST["hora"] !== "" ) {
    // echo "ok";

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $VoC = $_POST["VoC"];
    $presupuesto = $_POST["presupuesto"];
    $tipocontacto = $_POST["tipocontacto"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

////////////////////////////////////////////////////////////////////////////////// Modelo de Datos(Modelo)


    $consulta = "INSERT INTO form3
    (id,nombre, email, telefono, mensaje, VoC, presupuesto, tipocontacto, fecha, hora) VALUES ('0', '$nombre', '$email', '$telefono', '$mensaje', '$VoC', '$presupuesto', '$tipocontacto', '$fecha', '$hora')";


    if ($conn->query($consulta)) {
        echo "<p>Registro agregado.</p>";
    } else {
        echo "<p>No se agregó...</p>";
    }
} else {
    echo "No estan completos los datos";
}



mysqli_close($conn);