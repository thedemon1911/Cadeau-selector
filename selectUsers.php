<?php

session_start();
$_SESSION["MaxCadeaus"] = $_POST["Aantal_Cadeaus"];
$_SESSION["MaxGebruikers"] = $_POST["Aantal_Gebruikers"];
?>
<h2>vul de namen van de gebruikers in:</h2>
<form action="cadeaus.php" method="post">
    <?php for ($i = 1; $i <= $_POST["Aantal_Gebruikers"]; $i++) {
        echo "Gebruiker $i:";
        ?>
        
        <input type="text" id="<?php echo "Gebruiker $i";?>" name="<?php echo "Gebruiker $i";?>" required> <br/>
        <?php   
    }
    ?>
<input type="submit" name="Start" value="Select Cadeaus">