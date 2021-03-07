<?php

if (isset($_SESSION)) {
    unset($_SESSION['authorized']);
    session_destroy();
}
$str_message = "Successfully logged out";
sleep( 1.2 );
