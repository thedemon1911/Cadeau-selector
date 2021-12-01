<?php
session_start();
$name = $_SESSION["UserList"][$_SESSION["Nummer"][$_POST["UserId"]]][0];
$text1 = "Jij hebt: " . $name;
$text2 = $name . " wil graag:"
?>
<h1> <?php echo $text1; ?></h1>
<h2> <?php echo $text2; ?></h2>
<?php
for ($i = 0; $i < $_SESSION["MaxCadeaus"]; $i++) {
    $cadeauId = 
    $cadeau = $_SESSION["UserList"][$_SESSION["Nummer"][$_POST["UserId"]]][1];
    $cadeau = array_values($cadeau)[$i];
    ?>
    <h3> <?php
    echo($cadeau);
    ?> </h3> <?php
}
?>
<form action="userMP.php">
    <input type="submit" value="terug">
</form>