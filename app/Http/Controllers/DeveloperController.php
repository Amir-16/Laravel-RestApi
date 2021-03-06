<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{

    function getdev(){

      return ["name"=>"John",
        "designation" =>"fullstack", "email"=>"john@gmail.com",
          "office" =>"Dhaka"];
    }
}
