<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "administrativo";

// Creamos la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificamos la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Recibimos los valores de los campos que vienen del archivo index.html

$apellido = $_POST["apellido"];
$clave = $_POST["clave"];
$email = $_POST["email"];
$nombre = $_POST["nombre"];
$username = $_POST["username"];

$sql = "INSERT INTO usuarios (nombre,apellido,nomre_usuario,email,clave)
VALUES ('$nombre','$apellido','$username','$email','$clave')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>