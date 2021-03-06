<?php

// Use the DOCUMENT_ROOT to determine whether to use the development or
// deployment config.php
if ($_SERVER["DOCUMENT_ROOT"] !== "/opt/lampp/htdocs") {
    require_once "../config.php";
} else {
    require_once "./config.php";
}

header("x-powered-by: hidden"); // removes the php version from the header -> security
$logged_in = false;
$page = "home";

$request_path = $_SERVER["REQUEST_URI"];
$request_path = parse_url($request_path, PHP_URL_PATH);
$request_path = trim($request_path, "/ \\");
$request_array = explode("/", $request_path);

session_start();

if (isset($_SESSION['authorized'])) {
    if ($_SESSION['authorized'] === IS_LOGGED_IN) {
        $logged_in = true;
    }
}

$session_timeout = 60;

if (isset($_SESSION["timeout"])) {
    $session_delta = time() - $_SESSION["timeout"];
    if ($session_delta > $session_timeout) {
        session_destroy();
        header("Location: ".ROOT_LINK."/logout");
    }
}

$_SESSION["timeout"] = time();

require_once "./functionality/functions.php";



require_once "./url_routing.php";
include "./layout/layout.php";
