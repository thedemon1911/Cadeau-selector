<?php 
session_start();
?>
<h2>Gebruikers zijn gecombineerd</h2>
<h3>klik op de naam van een gebruiker om de gekoppelde gebruiker + de cadeau's te zien</h3>
<?php for ($i = 0; $i < $_SESSION["MaxGebruikers"]; $i++) {
    $username = $_SESSION["UserList"][$i][0];?>
    <form action="user.php" method="post">
    <input type="submit" name="User" value="<?php echo $username; ?>">
    <input type="Hidden" name="UserId" value="<?php echo $i; ?>">
    </form>
    <?php
}
?>