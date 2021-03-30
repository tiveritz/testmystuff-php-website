<?php

// -- LOGIN REQUIRED ---------------------------------------------------
require_once "../src/auth/login.php";


if ($is_authenticated === true):
// -- USER AUTHENTICATED BELOW -----------------------------------------


include "../src/html/dashboard.php";


// -- USER AUTHENTICATED ABOVE -----------------------------------------
endif;
