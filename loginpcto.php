<?php
$server="localhost";
$user="root";
$pass="";
$db="sitopcto";

$username = $_POST['username'];
$password = $_POST['password'];

try{
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM utente WHERE username= :username";

$stmt = $conn->prepare($query);

$stmt->bindParam('username', $username);


$stmt->execute();
}catch(PDOException $ex){
    echo "error:" . $ex->getMessage();
}
if ($stmt->rowCount() == 0)
    header("location: /error.php?msg=UTENTE NON REGISTRATO");
else {
    $row = $stmt->fetch();

    if ($row['password']== md5($password))
        //echo "utente registrato";
        header("location: /index.html");
    else 
        header("location: /error.php?msg=PASSWORD ERRATA");
}

$conn = null;

?>