<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'form' =>'controllers/form.php',
//     'about' => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact'=> 'controllers/contact.php',
//     'names'=> 'controllers/add-name.php',
// ]);

    // >>>> This file was commented during the refactoring of the controller
// $router->get('', 'controllers/index.php');
// $router->get('about', 'controllers/about.php');
// $router->get('form', 'controllers/form.php');
// $router->get('contact', 'controllers/contact.php');
// $router->get('about/culture', 'controllers/about-culture.php');
// $router->post('names', 'controllers/add-name.php');

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');






