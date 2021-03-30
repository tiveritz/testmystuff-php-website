<?php

// -- GET THE REQUESTED URI --------------------------------------------
$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri, PHP_URL_PATH);
$uri = preg_replace(ROOT_REGEX, '', $uri);

$views = array(
    '/home' => '../src/views/home.php',
    '/dashboard' => '../src/views/dashboard.php',
    '/logout' => '../src/views/logout.php',
    '/' => '../src/views/home.php',
);

// -- INCLUDE THE REQUESTED URI OR 404 ---------------------------------
if (array_key_exists($uri, $views)) {
    include $views[$uri];
} else {
    include '../src/errors/404.php';
}
