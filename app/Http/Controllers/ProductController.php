<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    function products(){

      return Product::all();
    }
    function products($id=null){

      return $id?Product::find($id):Product::all();
    }
}
