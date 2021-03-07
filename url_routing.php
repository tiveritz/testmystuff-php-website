<?php


$request_path = $_SERVER["REQUEST_URI"];
$request_path = parse_url($request_path, PHP_URL_PATH);
$request_path = trim($request_path, "/ \\");
$request_array = explode("/", $request_path);

if ($logged_in === true) {
    if (isset($request_array[URL_DEPTH])) {
        $page = $request_array[URL_DEPTH];
    }
    
    if (!file_exists("pages/".$page.".php")) {
        $page = "home";
    }
} else {
    require_once './database/database.php';
    $database = new CDatabase(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $str_message = "";
    $page = "login";

    if (isset($_POST["email"]) || isset($_POST["password"])) {
        $email = trim(getPostVariable("email"));
        $password_hash = hash('sha512', trim(getPostVariable("password")));

        if ($database -> is_valid_login($email, $password_hash)) {
            $_SESSION['authorized'] = IS_LOGGED_IN;
            $page = "home";
        }
        else {
            $str_message = "Wrong email or password";
        }
        sleep(2.2);
    }
}
