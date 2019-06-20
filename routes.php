<?php

// Create Router instance
$router = new Router();

$router->get('/', 'PagesController@home' );
$router->get('/about', 'PagesController@about');
$router->get('/contacte', 'PagesController@contacte');
$router->post('/contacte', 'PagesController@contacte');
//$router->post('/contacte', 'PagesController@post');
//$router->get('/contacte', 'PagesController@contacte');
// Run it!
$router->run();