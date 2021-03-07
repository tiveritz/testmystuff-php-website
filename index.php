<?php

// -- CONFIGURATION ----------------------------------------------------
// Use the DOCUMENT_ROOT to determine whether to use the development or
// deployment config.php
if ($_SERVER["DOCUMENT_ROOT"] !== "/opt/lampp/htdocs") {
    require_once "../config.php";
} else {
    require_once "./config.php";
}

// -- DEFAULT VARIABLES ------------------------------------------------
header("x-powered-by: hidden"); // removes the php version from the header -> security
$logged_in = false;
$page = "home";

// -- SESSION HANDLING -------------------------------------------------
session_start();

if (isset($_SESSION['authorized'])) {
    if ($_SESSION['authorized'] === IS_LOGGED_IN) {
        $logged_in = true;
    }
}

if (isset($_SESSION["timeout"])) {
    $session_delta = time() - $_SESSION["timeout"];
    if ($session_delta > TIMEOUT * 60) {
        session_destroy();
        header("Location: ".ROOT_LINK."/logout");
    }
}

$_SESSION["timeout"] = time();

// -- PAGE HANDLING ----------------------------------------------------
require_once "./functionality/functions.php";
require_once "./url_routing.php";
include "./layout/layout.php";
