<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show the users/form
    public function index()
    {
        return view('welcome');
    }

    //Store the user data
    public function store(Request $request)
    {

    }
}
