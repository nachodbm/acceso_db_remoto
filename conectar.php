<?php
$servername = "lhcp3124.webapps.net:3306"; 
$username = "hs43g9dz_accesod";
$password = "Nac010769Vi041940";
$database = "hs43g9dz_defiestavdb.partidas";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
echo "Conectado Correctamente";
mysqli_close($conn);
?>