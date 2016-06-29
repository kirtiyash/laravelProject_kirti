<?php
/*
    |--------------------------------------------------------------------------
    | Client side  validation
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for validation of user input.
    */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Validator;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Session;

class HomeController extends Controller
{
    //function for returning view to signup form
    public function signupform()
    {
        return view('signup_form');
    }
     
     //function for validating user input
     
    public function postAuth(Request $request)
    {
        //check which submit was clicked on naddepending on that profile page or redirection occurs
        if(Input::get('login')) {
            
            $validator=Validator::make(
            array('email'=>$request->email,
                  'password'=>$request->password),
            array("email"=>'required|email',
                  "password"=>'required|min:4'
                  ));
        if($validator->fails())
        {
            return redirect('signup')->withErrors($validator)->withInput();
        }
        $da=Test::all();
        
        $data = Test::where('email', $request->email)
              ->where('password' , $request->password)
              ->get();
        if((count($data)))
        {
             //if login then use go to profile page
             foreach($data as $users)
             $id=$users->user_id;
             Session::setId($id);
             Session::set('sid', $id);
             Session::save();
             return view('home');
        }
        //if login error then use go to redirect page
        return redirect('signup');
        }
        //if register then go to this page
         return view('register');
    }
     public function show()
     {
        $id=Session::get('sid');
        $data=Test::where('user_id', $id)->get();
        return view('profile')->with('users',$data);
     }
     
     public function showRegister(Request $request)
     {
        $test = new Test;
        $test->name = $request->name;
        $test->age = $request->age;
        $test->gender = $request->gender;
        $test->address = $request->address;
        $test->email = $request->email;
        $test->password = $request->password;
        $test->save();
     }
     public function logOut(Request $request)
     {
        $id=Session::get('sid');
        $request->Session()->forget($id);
        return redirect('signup');
      }
}
?>