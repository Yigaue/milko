<?php

require 'vendor/autoload.php';

// $database = require 'core/bootstrap.php';
require 'core/bootstrap.php';

use App\core\{Router, Request};


// $router = new Router;

// require 'routes.php';


Router::load('routes.php')

       ->direct(\Request::uri(), \Request::method());

// require $router->direct($uri);

// require $router->direct('contact');

// require 'Task.php';
// we do not need the class when were'nt mapping into the class(Task);

// PDO 

// $pdo = Connection::make();

// $query = new QueryBuilder($pdo);
// $tasks = $query->selectAll('todos');




// $tasks = $query->selectAll('todos', 'Task');
// The class maping maynot be necessary, simple classes are enough, just as below





// $tasks = $statement->fetchAll(PDO::FETCH_OBJ); // this is 
// fetching into a generic object - PDO::FETCH_OBJ. but we can fetch the results into a class
// as shown just below



