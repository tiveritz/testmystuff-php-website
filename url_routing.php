<?php

if ($logged_in === false) {
    $page = "login";
} else {
    if (isset($request_array[URL_DEPTH])) {
        $page = $request_array[URL_DEPTH];
    }
    
    if (!file_exists("pages/".$page.".php")) {
        $page = "home";
    }
}
