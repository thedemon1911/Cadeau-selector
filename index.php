<?php

session_start();
session_destroy();
?>

<html>
    <head>
        <h1>Cadeau Generator</h1>
        <h3>(Made By Collin)</h3>
        <br>
    </head>
    <body>
        <form action="selectUsers.php" method="post">
        Aantal gebruikers: <input type="number" id="Gebruikers" name="Aantal Gebruikers" value="3" min="3" max="25" required> <br/>
        Max cadeaus: <input type="number" id="Cadeaus" name="Aantal Cadeaus" value="1" min="1" max="10" required> </br>
        <input type="submit" name="Start" value="Start">
        </form>
    </body>
    <h4>Voer het aantal gebruikers in en het maximale aantal cadeaus dat iemand kan selecteren </h4>
</html>