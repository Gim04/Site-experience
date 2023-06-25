<!doctype html>
<html lang="it" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>PCTO e la mia esperienza</title>
    <link rel="shortcut icon" href="travel.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="bootstrap5.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
   
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>
  <body class="body">
    

<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="registrazione.html">Registrati</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="index.html"><h1>PCTO e la mia esperienza</h1></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="login.html">Login</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis" href="index.html">Il progetto</a>
      <a class="nav-item nav-link link-body-emphasis" href="travelcity.html">Travelcity</a>
      <a class="nav-item nav-link link-body-emphasis" href="amcd.html">Orientamento Amici di Peterpan</a>
      <a class="nav-item nav-link link-body-emphasis active" href="commenti.php">Commenti e domande</a>
    </nav>
  </div>
</div>


<main class="container">
<form method="POST" action="commpost.php">
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Interagiamo
      </h3>

      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">Commenti</h2>
        
        <p>Qui potrai commentare con curiosità e domande riguardo pcto e il progetto.</p>
        <hr>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="titolo" name="titolo" placeholder="titolo">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Corpo</label>
        <textarea type="text" class="form-control" id="corpo" name="corpo" placeolder="testo" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Invio</button>
    <hr>
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        I commenti
      </h3>

</main>
<?php
if ($_SERVER['REQUEST_METHOD']== 'GET'){
$server="localhost";
$user="root";
$password="";
$db="sitopcto";

   


    try{
        $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM commento";
        $stmt = $conn->query($sql);


    
        foreach ($stmt as $row){
            ?>
            <div style="
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    padding: 10px;
                    margin-top: 10px;
                    margin-left: 100px;
                    margin-right: 700px;">
            <form><?=$row['titolo'];  ?></form>
        </div>
            <div  style="
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    padding: 10px;
                    margin-left: 100px;
                    margin-right: 500px;">
            <form><?=$row['corpo'];    ?> </form>
            </div>
            <hr>
      <?php  }    
       
    

    }catch(PDOException $ex){
        echo "error". $ex->getMessage();

    }
} 
$conn = null;
?>

</form>
<br>
<br>
<footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket-takeoff" viewBox="0 0 16 16">
            <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z"/>
            <path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z"/>
            <path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z"/>
          </svg>
        </div>
      <div class="col-6 col-md">
        <h5>Contatti</h5>
        <ul class="list-unstyled text-small">
          <li>Email: gianmarcopaffetti@gmail.com</li>
          <li>Telefono: +39 348 310 2024</li>
          <li>Indirizzo: Piazza Santa Maria della Fede</li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Social</h5>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ol>
      </div>
  </footer>



<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="bootstrap5.3/js/bootstrap.min.js"></script>
    </body>
</html>