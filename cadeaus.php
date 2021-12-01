<?php

session_start();
if (!isset($_SESSION["vcpn"])) {
    $_SESSION["vcpn"] = 0;
    $_SESSION["users"] = $_POST;
} else {
    $_SESSION[$_SESSION["vcpn"] . "_Cadeaus"] = $_POST; 
}
$_POST = $_SESSION["users"];
$_SESSION["vcpn"] = $_SESSION["vcpn"] + 1;
$current_user = $_POST["Gebruiker_" . $_SESSION["vcpn"]];
$user_id = $_SESSION["vcpn"];
?> <h1> <?php echo $current_user?> </h1>
<?php 
if ($_SESSION["vcpn"] < $_SESSION["MaxGebruikers"]) { ?>
    <form action="cadeaus.php" method="post">
<?php } else {?>
        <form action="connect.php" method="post">
<?php } ?>
<?php for ($i = 1; $i <= $_SESSION["MaxCadeaus"]; $i++) {
    echo "Cadeau $i:";
    ?>
    <input type="text" id="<?php echo "$user_id Cadeau $i";?>" name="<?php echo "$user_id Cadeau $i";?>"> <br/>
<?php    } 
?>
<input type="submit" name="Start" value="Select Cadeaus">