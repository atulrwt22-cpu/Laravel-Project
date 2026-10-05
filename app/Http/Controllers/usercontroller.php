<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function index()
    {
        return "This is user controller";
    }

    function addUser()
    {
        return "new user added";
    }
}
