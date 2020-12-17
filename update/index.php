<?php

$pw = "";
if (isset($_POST['password'])) {
    $pw = $_POST['password'];
}

if ($pw == "welcome") {
    unset($_POST['password']);
    unset($_SERVER["REQUEST_METHOD"]);
    unset($_SERVER["REQUEST_METHOD"]);
    include("update.php");
} else {
    if ( $pw != "") {
        echo '<script>alert("Incorrect password");</script>'; 
    }

    echo '<form method="POST" action="index.php">';
    echo 'Password <input type="password" name="password"></input><br/>';
    echo '<input type="submit" name="submit" value="Go"></input>';
    echo '</form>';
}

?>
