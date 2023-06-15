<?php

$routes = [
    '/' => 'controllers/index.php',
    '/konwerter' => 'controllers/converter.php',
    '/o-projekcie' => 'controllers/about.php',
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
}