<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "sitopcto";

$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];

try{
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

    $query = "INSERT INTO utente (username, password, email) VALUES ('$username', '$password', '$email')";
    $conn->exec($query);
  
    
    header("location: login.html");


}catch(PDOException $ex){
    echo "error: " . $ex -> getMessage();
}


$conn = null;


?>