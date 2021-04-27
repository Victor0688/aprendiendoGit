<?php

// $servername = "localhost";
// $database = "sesion";
// $username = "root";
// $password = ""; -->
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
// if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
// }
// var_dump($_POST["fecha"]);

// echo "Connected successfully";

// if (!isset($_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["telefono"], ) || $_POST["nombre"] !== "" && $_POST["apellido"] !== "" && $_POST["email"] !== "" && $_POST["telefono"] !== "") {
//    echo "ok";

//     $nombre = $_POST["nombre"];
//     $apellido = $_POST["apellido"];
//     $email = $_POST["email"];
//     $telefono = $_POST["telefono"];

//  $consulta = "INSERT INTO citas
//     -- (id,nombre, apellido, email, telefono) VALUES ('0', '$nombre', '$apellido', '$email', '$telefono')";


//     if ($conn->query($consulta)) {
//        echo "<p>Registro agregado.</p>";
//     } else {
//        echo "<p>No se agregó...</p>";
//     }
// } else {
//     echo "No estan completos los datos";
// }
// if ($_POST["fecha"]!==""  ) {
//     echo "ok";
// } else {
//     echo "No estan completos los datos";
// }



// mysqli_close($conn);


// $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
// $conn = new mysqli($servername, $username, $password);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sesion";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// $errores = [];
// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// sql to create table
// $sql = "CREATE TABLE sesion (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   nombre VARCHAR(30) NOT NULL,
//   apellido VARCHAR(30) NOT NULL,
//   email VARCHAR(50),
//   telefono TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";

//   if (mysqli_query($conn, $sql)) {
//     echo "Table MyGuests created successfully";
//   } else {
//     echo "Error creating table: " . mysqli_error($conn);
//   }


//     $nombre = $_POST["nombre"];
//     $apellido = $_POST["apellido"];
//     $email = $_POST["email"];
//     $telefono = $_POST["telefono"];

//     if(!$nombre){
//       $errores[] = "Debes añadir un Nombre";
//     }

//     echo "<pre>";
//     var_dump($errores);
//     echo "</pre>";

//     exit;


// $sql = "INSERT INTO sesion (nombre, apellido, email, telefono)
// VALUES ('$nombre', '$apellido', '$email', '$telefono')";

// if (mysqli_query($conn, $sql)) {
//   $last_id = mysqli_insert_id($conn);
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }


// mysqli_close($conn);


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

if (!isset($_POST["nombre"] ,$_POST["apellido"],$_POST["email"],$_POST["telefono"]  ) || $_POST["nombre"] !== "" && $_POST["apellido"] !== "" && $_POST["email"] !== "" && $_POST["telefono"] !== "") {

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];


  $sql = "INSERT INTO sesion (nombre, apellido, email, telefono)
VALUES ('$nombre', '$apellido', '$email', '$telefono')";

  $resultado = mysqli_query($conn, $sql);

  if ($resultado) {
    echo "Insertado correctamente";
  }
}else {
  echo "No estan completos los datos";
}


mysqli_close($conn);
