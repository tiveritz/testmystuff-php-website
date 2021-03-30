<?php

// -- CONFIGURATION ----------------------------------------------------
require_once "../src/config.php";

// -- DEFAULT VARIABLES ------------------------------------------------
// removes the php version from the header -> security
header("x-powered-by: hidden");

// -- URL ROUTING ------------------------------------------------------
require_once "../src/urls/urls.php";
