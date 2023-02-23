<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method='post'>

    <h1>Bling Bling Nail Studio</h1>

    <label for="color">Kies 4 basiskleuren voor uw nagels:</label> <br>
    <input type="color" id="color" name="color" value="#ff0000">
    <input type="color" id="color" name="color" value="#ff0000">
    <input type="color" id="color" name="color" value="#ff0000">
    <input type="color" id="color" name="color" value="#ff0000">
    <br>
    <label for="tel">Uw telefoonnummer:</label> <br>
    <input type="tel" name="tel" id="tel" placeholder='+31 6 1234 56 78' pattern="^+31\s6\s\d{4}\s\d{2}\s\d{2}$" required>
    <br>
    <label for="email">Uw e-mailadres:</label> <br>
    <input type="email" id="email" name="email" placeholder='randomguy@nowhere.com' required>
    <br>
    <label for="datum">Afspraakdatum:</label> <br>
    <input type="datetime-local" id="datum" name="datum" required>
    <br>
    <p>Soort behandeling:</p>
    <input type="checkbox" id="optie1" name="optie1">
    <label for="optie1">Nagelbijt arrangement (termijnbetaling mogelijk) €180</label> <br>
    <input type="checkbox" id="optie2" name="optie2">
    <label for="optie1">Luxe manicure (massage en handpakking) €30,00</label> <br>
    <input type="checkbox" id="optie3" name="optie3">
    <label for="optie3">Nagelreparatie (In eerste week gratis) €5,00</label> <br>
<br>
    <input id= "submit" type="submit" value="Sla op"> 
    <input id= "submit" type="reset" value="Reset"> 
    </form>
</body>
</html>