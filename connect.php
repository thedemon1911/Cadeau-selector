<?php

$shuffle = true;
session_start();
$_SESSION[$_SESSION["vcpn"] . "_Cadeaus"] = $_POST;
for ($i = 0; $i < $_SESSION["MaxGebruikers"]; $i++) {
    $a = $i + 1;
    $Cadeaus1 = $a . "_Cadeaus";
    $Cadeau2 = $a . "_Cadeau_" . $a;
    $_SESSION["UserList"][$i] = [$_SESSION["users"]["Gebruiker_$a"], $_SESSION["$Cadeaus1"]];
}

while ($shuffle == true) {
    $maxGebruikers = $_SESSION["MaxGebruikers"] - 1;
    $nummer = range(0, $maxGebruikers);
    $checkShuffle = 0;
    shuffle($nummer);
    for ($i = 0; $i < $_SESSION["MaxGebruikers"]; $i++) {
        if ($nummer[$i] == $i) {
            $checkShuffle = $checkShuffle + 1;
        }
    }
    if ($checkShuffle == 0) {
        $shuffle = false;
        $_SESSION["Nummer"] = $nummer;
    }
}
header("Location: /userMP.php");