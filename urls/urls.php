<?php

// -- GET THE REQUESTED URI --------------------------------------------
$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri, PHP_URL_PATH);
$uri = preg_replace(ROOT_REGEX, '', $uri);

$views = array(
    '/home' => './views/home.php',
    '/dashboard' => './views/dashboard.php',
    '/logout' => './views/logout.php',
    '/' => './views/home.php',
);

// -- INCLUDE THE REQUESTED URI OR 404 ---------------------------------
if (array_key_exists($uri, $views)) {
    include $views[$uri];
} else {
    include './errors/404.php';
}
