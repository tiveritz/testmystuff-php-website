<?php

// -- SESSION HANDLING -------------------------------------------------
session_start();

$is_authenticated = false;

if (isset($_SESSION['authorized'])) {
    if ($_SESSION['authorized'] === AUTHENTICATION_TOKEN) {
        $is_authenticated = true;
    }
}

// Renew / Destroy Cookie
if (isset($_SESSION["timeout"])) {
    $session_delta = time() - $_SESSION["timeout"];
    if ($session_delta > AUTHENTICATION_TIMEOUT * 60) {
        session_destroy();
    }
}

$_SESSION["timeout"] = time();


// -- AUTHENTICATION ---------------------------------------------------
require_once "./functions/post.php";

$login_message = "";
$login_url = $_SERVER["REQUEST_URI"];;

if ($is_authenticated === false) {
    require_once './db/database.php';
    $database = new CDatabase(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (isset($_POST["email"]) || isset($_POST["password"])) {
        $email = trim(get_post_variable("email"));
        $password_hash = hash('sha512', trim(get_post_variable("password")));

        if ($database -> is_valid_login($email, $password_hash)) {
            $_SESSION['authorized'] = AUTHENTICATION_TOKEN;
            $is_authenticated = true;
        }
        else {
            $login_message = "Wrong email or password";
        }
        sleep(2.2);
    }
}

if ($is_authenticated === false) {
    include "./html/login.php";
}
