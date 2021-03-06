<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
      function getdata(){
        return["name"=> "Amir","email"=>"amir@gmail.com",

                "address"=>"Dhaka"];
}
