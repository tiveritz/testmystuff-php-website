<?php

$str_message = "";

$username = getPostVariable("username");
$password = getPostVariable("password");

if (isset($_POST["username"]) || isset($_POST["password"])) {
    if ($username === AUTH_USER && $password === AUTH_PASS) {
        $_SESSION['authorized'] = IS_LOGGED_IN;
    }
    else {
        $str_message = "Benutzername und/oder Kennwort sind falsch";
    }
    sleep(2.2);
}
