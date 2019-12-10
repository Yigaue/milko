<?php

namespace App\controllers;

use App\core\App;


class PagesController
{
    public function home()
    {
        // Received the request.

        // Delegate ( to the database)

        // Return a response
  
         $tasks = App::get('database')->selectAll('todos');

            return view ('index', ['tasks'=> $tasks]);

    }

    
    public function about()
    {
        return view('about');

    }

    public function contact()
    {
        return view ('contact');

    }
}
