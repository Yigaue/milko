<?php

namespace App\controllers;

use App\core\App;


class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
       
        return view('users', compact('users'));
    }

    public function store ()

    {
        // insert the user associated with the request
        // And then redirect back to all users.

        App::get('database')-> insert('users', [

             'name' => $_POST['name']
         ]);

         return redirect ('users');

    }
}
