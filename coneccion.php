<html>

<br><br><br>

<title>Prueba de conexión</title>

<body>

<?php
//$servername = "bbdd.erikc-mauricio.com";
$servername = "database-1.ch80s4uismx4.us-east-1.rds.amazonaws.com";
//$username = "ddb67526";
$username = "erikc";
//$password = "Kusanagui5000";
$password = "LeonDorado5000";
//$dbname = "ddb67526";
$dbname = "database-1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Fallo en la conexion: " . $conn->connect_error);
} 
echo "         Conectado satisfactorimante";

//Cerrar conexión
//$conn->close();

?>

</body>
</html>