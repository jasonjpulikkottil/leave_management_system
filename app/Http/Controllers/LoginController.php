<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;

class LoginController extends Controller
{
    public function HandleLoginContoller(Request $request){

        $this->validate($request, [
          'username' => 'required',
          'password' => 'required',
          'login_type' => 'required',
        ]);

        $user_entered_username    =    $request->username;
        $user_entered_password    =    $request->password;
        $user_entered_login_type  =    $request->login_type;


        $real_staff_id      = "";
        $real_username      = "";
        $real_password      = "";
        $real_account_type  = "";

        $user = DB::select( DB::raw("SELECT staff_id,username, password,account_type FROM user_account WHERE username ='$user_entered_username' AND account_type='$user_entered_login_type'"));

        foreach($user as $u){

           $real_staff_id     =     $u->staff_id;
           $real_username     =     $u->username;
           $real_password     =     $u->password;
           $real_account_type =     $u->account_type;

       }

       if($real_username != "" && $real_password != "" && $real_account_type != ""){


         if($user_entered_username == $real_username && $user_entered_password == $real_password){

           if($real_account_type == "admin"){

             Session::put('Session_Type', 'Admin');
             Session::put('Session_Value', $real_username);

             return Redirect::to("/view-home-page");

           }else if($real_account_type == "staff"){

             Session::put('Session_Type', 'Staff');
             Session::put('Session_Value', $real_staff_id);

             return Redirect::to("/view-home-page-of-staff-account");


           }

        }else{

          return Redirect::to("/")->withErrors(['The username or password is incorrect.']);

        }



       }else{

         return Redirect::to("/")->withErrors(['Sorry, no account found for this credentials']);
       }

       echo $real_password." ".$real_password." ".$real_account_type;
    }

    public function HandleLogoutContoller(){

      Session::flush();
      return Redirect('/');

    }


}
