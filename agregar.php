<?php

$servername = "localhost";
$database = "peluqueria";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// var_dump($_POST["fecha"]);

// echo "Connected successfully";

if (!isset($_POST["nombre"] ,$_POST["fecha"],$_POST["hora"]  ) || $_POST["nombre"] !== "" && $_POST["fecha"] !== "" && $_POST["hora"] !== "") {
    // echo "ok";

    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

    $consulta = "INSERT INTO citas
    (id,nombre, fecha, hora) VALUES ('0', '$nombre', '$fecha', '$hora')";


    if ($conn->query($consulta)) {
        echo "<p>Registro agregado.</p>";
    } else {
        echo "<p>No se agregó...</p>";
    }
} else {
    echo "No estan completos los datos";
}
// if ($_POST["fecha"]!==""  ) {
//     echo "ok";
// } else {
//     echo "No estan completos los datos";
// }




mysqli_close($conn);
