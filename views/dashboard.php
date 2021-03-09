<?php

// -- LOGIN REQUIRED ---------------------------------------------------
require_once "./auth/login.php";


if ($is_authenticated === true):
// -- USER AUTHENTICATED BELOW -----------------------------------------


include "./html/dashboard.php";


// -- USER AUTHENTICATED ABOVE -----------------------------------------
endif;
