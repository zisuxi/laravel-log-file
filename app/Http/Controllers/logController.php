<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logController extends Controller
{
    public function loginfo(){
        $name= "sir tanveer";

        if(strlen($name)>10){
              echo "<h1 style='
   width: 700px;
    color: red;
    text-align: center;
    margin-top: 20px;
    border: double 10px gray;
    background-color: midnightblue;
    padding: 20px;
    text-align-last: justify;
    display: flow-root;
    justify-content: space-evenly;
    margin-left: 263px;'> This text is perfectly set in this field</h1>";
        }else{
            \Log::error("The length of the text is greater than 10 that is not suitable");
            echo"some thing went wronge";
        }
    }
}
