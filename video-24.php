<?php
echo "Welcome to the stage where we are ready to get connected to a database server" . '<br>';

/*
Ways to connect to a MySQL Database
1. MySQLi Extension
2. PDO
*/
// Connecting to the Databash
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection object 
$conn = mysqli_connect($servername, $username, $password);

// Die if the connection was not successful
if  (!$conn){
    die("Sorry we failed to connect: " . $mysqli_connect_error());
} else {
    echo "Congratulation, Connected successfully!";
}
?>