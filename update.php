<?php
// echo $_GET['Id'];
// Voeg de verbindingsgegevens toe in config.php
require('config.php');

// Maak de data sourcename string
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo =  new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Er is een verbinding met de database";
    } else {
        echo "Interne server-error";
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_POST);
    // Maak een sql update-query en vuur deze af op de database

    // Stuur de gebruiker door naar de read.php pagina voor het overzicht met een header(Refresh) functie;
    exit();
}

// Maak een sql-query voor de database
$sql = "SELECT Id
              ,Merk
              ,Model
              ,Topsnelheid
              ,Prijs
        FROM DureAuto
        WHERE Id = :Id";

// Maak de sql-query klaar om de $_GET['Id'] waarde te koppelen aan de placeholder :Id
$statement = $pdo->prepare($sql);

// Koppel de waarde $_GET['Id'] aan de placeholder :Id
$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

// Voer de query uit
$statement->execute();

// Haal het resultaat op met fetch en stop het object in de variabele $result
$result = $statement->fetch(PDO::FETCH_OBJ);

// var_dump($result);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PHP PDO CRUD TOETS</title>
</head>
<body>
    <h1>PHP PDO CRUD TOETS</h1>
    
    <form action="create.php" method="post">

        <label for="merk">Merk:</label><br>
        <input type="text" name="merk" id="merk"><br>
        <br>
        <label for="model">Model:</label><br>
        <input type="text" name="model" id="model"><br>
        <br>
        <label for="topsnelheid">Topsnelheid:</label><br>
        <input type="text" name="topsnelheid" id="topsnelheid"><br>
        <br>
        <label for="prijs">Prijs:</label><br>
        <input type="text" name="prijs" id="prijs"><br>
        <br>
        <input type="submit" value="Verstuur!">        

    </form>



</body>
</html>