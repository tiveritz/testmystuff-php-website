<?php

if (isset($_SESSION)) {
    unset($_SESSION['authorized']);
    session_destroy();
}
$str_message = "Abmeldung erfolgreich";
sleep( 1.2 );
