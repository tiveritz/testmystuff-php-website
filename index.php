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
// removes the php version from the header -> security
header("x-powered-by: hidden");

// -- URL ROUTING ------------------------------------------------------
require_once "./urls/urls.php";
