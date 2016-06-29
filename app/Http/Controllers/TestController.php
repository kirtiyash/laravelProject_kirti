<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller {

    public function postAuth()
    {
        //check which submit was clicked on
        if(Input::post('login')) {
              return view('profile');//if login then use go to profile page
        } elseif(Input::get('register')) {
              return view('register');//if register then go to this page
        }

    }    

   

}
?>
