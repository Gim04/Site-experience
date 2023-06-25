<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "sitopcto";

    $titolo = $_POST['titolo'];
    $corpo = $_POST['corpo'];
    if (!empty($titolo)) {
    try {
        $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO commento (titolo, corpo) VALUES (:titolo, :corpo)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':titolo', $titolo);
        $stmt->bindParam(':corpo', $corpo);
        $stmt->execute();
        
        header("location: /commenti.php");
    } catch (PDOException $ex) {
        echo "error" . $ex->getMessage();
    } 
}else {
    echo "Il campo 'titolo' è obbligatorio.";}
}

$conn = null;
?>