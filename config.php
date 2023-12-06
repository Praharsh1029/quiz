<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'praharshsql.mysql.database.azure.com');
define('DB_USERNAME', 'praharsh');
define('DB_PASSWORD', 'AlphaBetaGama%9');
define('DB_NAME', 'quiz');
$host = "praharshsql.mysql.database.azure.com";
$dbname = "quiz";
$username = "praharsh";
$password = "AlphaBetaGama%9";
/* Attempt to connect to MySQL database */
$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>  
