<?php

use App\core\App;

// Using Dependency Injection (DI) Container for the three lines just below
App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view ($name, array $data = [])
{
    extract($data); // extract does the oppo of compact
                    // it creates a variable from an array and 
                    // assign the value of the array key as the variable value
                  

    return require "views/{$name}.view.php";
}


function redirect ($path)
{
        header("Location: /{$path}");

}
// >>>>> we're now using Dependency Injection (DI) Container 
// >>>>> the four lines just below were commented
// $app = [];
// $app['config'] = require 'config.php';
// $app['database'] =  new QueryBuilder(
//     Connection::make($app['config']['database'])
// );


/// >>>>>>> the require files below were removed
/// >>>>>>> we are now using composer to autoload the classes
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';




// $query = new QueryBuilder(
//     Connection::make()
// );

