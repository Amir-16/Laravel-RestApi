<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gadget;
class GadgetController extends Controller
{

    function store(Request $request){
      $data  =new Gadget();
      $data->name= $request->name;
      $data->category= $request->category;
      $data->quantity= $request->quantity;
      $result =$data->save();
      if($result){

        return ["Result" => "Data saved"];
      }
      else{
        return ["Result"=> "Data couldnt save"];
      }


    }
    public function update(Request $request){
      $data  =Gadget::find($re->$id);
      $data->name= $request->name;
      $data->category= $request->category;
      $data->quantity= $request->quantity;
      $result =$data->update();
      if($result){

        return ["Result" => "Data Updated"];
      }
      else{
        return ["Result"=> "Data couldnt save"];
      }


    }
}
