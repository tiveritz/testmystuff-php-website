<?php

session_start();

if (isset($_SESSION)) {
    session_unset();
    session_destroy();
}

$login_message = "Successfully logged out";
$login_url = ROOT."/dashboard";
sleep( 1.2 );

include "../src/html/login.php";
