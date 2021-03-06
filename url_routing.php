<?php

if ($logged_in === true) {
    if (isset($request_array[URL_DEPTH])) {
        $page = $request_array[URL_DEPTH];
    }
    
    if (!file_exists("pages/".$page.".php")) {
        $page = "home";
    }
} else {
    $str_message = "";
    $page = "login";

    if (isset($_POST["username"]) || isset($_POST["password"])) {
        $username = getPostVariable("username");
        $password = getPostVariable("password");
        if ($username === AUTH_USER && $password === AUTH_PASS) {
            $_SESSION['authorized'] = IS_LOGGED_IN;
            $page = "home";
        }
        else {
            $str_message = "Wrong username or password";
        }
        sleep(2.2);
    }
}
