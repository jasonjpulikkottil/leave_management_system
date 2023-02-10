<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect;
use Session;
use DB;

use Mail;
use App\Mail\MailNotify;

class DatabaseController extends Controller
{

  public function AddLeaveType(Request $request){
    
    $session_type = Session::get('Session_Type');
    $session_value = Session::get('Session_Value');

    if($session_type == "Admin"){

      $this->validate($request, [
        'ltype' => 'required',
        'lcount' => 'required',
        'lfrom' => 'required',
        'lto' => 'required',
      ]);
      $ltype       = $request->ltype;
      $lcount      = $request->lcount;
      $lfrom      = $request->lfrom;
      $lto       = $request->lto;
      
      if (DB::table('leave_type')->where('leave_type_name', $ltype)->doesntExist()) {

        if(DB::insert('INSERT INTO leave_type (leave_type_name, count, from_date, to_date, active) values (?, ?, ?, ?, ?)', [ $ltype , $lcount , $lfrom , $lto ,1])){

            return redirect()->back()->with('message', 'Operation Successful.');

        }

      }else{
        return redirect()->back()->withErrors("<strong>Unable to register:</strong> The given leave type already exists in the database");
      }

    }
    return view("login-page");

  }




    public function InsertStaffData(Request $request){

      $session_type = Session::get('Session_Type');
      $session_value = Session::get('Session_Value');

      if($session_type == "Admin"){

        $this->validate($request, [
          'staff_id' => 'required',
          'first_name' => 'required',
          'last_name' => 'required',
          'date_of_birth' => 'required',
          'email' => 'required',
          'phone_number' => 'required',
          'position' => 'required',
        ]);

        $staff_id       = $request->staff_id;
        $first_name     = $request->first_name;
        $last_name      = $request->last_name;
        $date_of_birth  = $request->date_of_birth;
        $email          = $request->email;
        $phone_number   = $request->phone_number;
        $position       = $request->position;


        if (DB::table('staff_data')->where('staff_id', $staff_id)->doesntExist()) {

          if(DB::insert('INSERT INTO staff_data (staff_id, firstname, lastname, dob, email, phone_number, position) values (?, ?, ?, ?, ?, ?, ?)', [$staff_id, $first_name, $last_name, $date_of_birth, $email, $phone_number, $position])){

              return redirect()->back()->with('message', 'Registeration is Successful.');

          }

        }else{
          return redirect()->back()->withErrors("<strong>Unable to register:</strong> The given staff ID already exists in the database");
        }

      }

    }

    public function DeleteStaffData($auto_id){

       $session_type = Session::get('Session_Type');

       if($session_type == "Admin"){

           if(DB::table('staff_data')->where('auto_id', '=', $auto_id)->delete()){

               return redirect()->back()->with('message', 'Deletion is Successful.');
           }

       }else{

           return Redirect::to("/");

       }

   }

   public function UpdateStaffData(Request $request){

      $session_type = Session::get('Session_Type');

      if($session_type == "Admin"){

        $this->validate($request, [
          'auto_id' => 'required',
          'first_name' => 'required',
          'last_name' => 'required',
          'date_of_birth' => 'required',
          'email' => 'required',
          'phone_number' => 'required',
          'position' => 'required',
        ]);

        $auto_id        = $request->auto_id;
        $first_name     = $request->first_name;
        $last_name      = $request->last_name;
        $date_of_birth  = $request->date_of_birth;
        $email          = $request->email;
        $phone_number   = $request->phone_number;
        $position       = $request->position;


        if(DB::table('staff_data')->where('auto_id', $auto_id)->update(['firstname' => $first_name, 'lastname' => $last_name, 'dob' => $date_of_birth, 'email' => $email, 'phone_number' => $phone_number, 'position' => $position])){

          return Redirect::to("/view-staff-management-index")->with('message', 'Updation is Successful.');

        }else{

          return Redirect::to("/view-staff-management-index")->with('message', 'No changes made.');
        }

      }else{

          return Redirect::to("/");

      }

  }


  public function ChangeUsername(Request $request){

     $session_type = Session::get('Session_Type');

     if($session_type == "Admin"){

        $admin_data = DB::table('user_account')->where("account_type", "admin")->get(); // Get staff data.

        if($request->password == $admin_data[0]->password){

          if(DB::table('user_account')->where('account_type', 'admin')->update(['username'=>$request->username])){

              return redirect()->back()->with('message', 'Username has been updated successfully.');

          }else{

            return redirect()->back()->with('message', 'No changes made.');

          }


        }else{

          return redirect()->back()->withErrors('The password is wrong.');
        }

     }else{

         return Redirect::to("/");

     }

 }

 public function ChangePassword(Request $request){

    $session_type = Session::get('Session_Type');

    if($session_type == "Admin"){

       $admin_data = DB::table('user_account')->where("account_type", "admin")->get(); // Get staff data.

       if($request->current_password == $admin_data[0]->password){

         if($request->new_password == $request->confirm_password){

           if(DB::table('user_account')->where('account_type', 'admin')->update(['password'=>$request->new_password])){

               return redirect()->back()->with('message', 'Password has been updated successfully.');

           }else{

             return redirect()->back()->with('message', 'No changes made.');

           }

         }else{

           return redirect()->back()->withErrors('The confirm password does not match');

         }

       }else{

         return redirect()->back()->withErrors('The current password is wrong.');
       }

    }else{

        return Redirect::to("/");

    }

  }

  public function EditUserAccount(Request $request){

     $session_type = Session::get('Session_Type');

     if($session_type == "Admin"){

       $this->validate($request, [
         'username' => 'required',
         'password' => 'required',
       ]);


       $username  =  $request->username;
       $password  =  $request->password;
       $auto_id   =  $request->auto_id;

       if(DB::table('user_account')->where('auto_id', $auto_id)->update(['username' => $username, 'password' => $password])){

         return Redirect::to("/view-user-accounts-index")->with('message', 'Updation is Successful.');

       }else{

         return Redirect::to("/view-user-accounts-index")->with('message', 'No changes made.');
       }


     }else{

         return Redirect::to("/");

     }
  }

  public function DeleteUserAccount($auto_id){

     $session_type = Session::get('Session_Type');

     if($session_type == "Admin"){

         if(DB::table('user_account')->where('auto_id', '=', $auto_id)->delete()){

             return redirect()->back()->with('message', 'Deletion is Successful.');
         }

     }else{

         return Redirect::to("/");

     }

 }

 public function InsertUserAccount(Request $request){

   $session_type = Session::get('Session_Type');
   $session_value = Session::get('Session_Value');

   if($session_type == "Admin"){

     $this->validate($request, [
       'staff_id' => 'required',
       'username' => 'required',
       'password' => 'required',
     ]);

     $staff_id  =  $request->staff_id;
     $username  =  $request->username;
     $password  =  $request->password;
     
     $staff_email_data = DB::table('staff_data')->where('staff_id',$staff_id)->select("email")->get();


     $data = [
      "subject"=>"New User Created",
      "body"=>"Username:$username \n Password:$password"
      ];
    // MailNotify class that is extend from Mailable class.
    try
    {
      Mail::to( $staff_email_data )->send(new MailNotify($data));
      //return response()->json(['Great! Successfully send your mail']);
    }
    catch(Exception $e)
    {
      return response()->json(['Mail not sent']);
    }




     if (DB::table('user_account')->where('staff_id', $staff_id)->doesntExist()) {

       if (DB::table('user_account')->where('username', $username)->doesntExist()) {

         if(DB::insert('INSERT INTO user_account (staff_id, username, password, account_type) values (?, ?, ?, ?)', [$staff_id, $username, $password, "staff"])){

             return redirect()->back()->with('message', 'Account creation is Successful.');
         }

       }else{

         return redirect()->back()->withErrors("<strong>Unable to create:</strong> The given username already exists in the database.");

       }

     }else{

       return redirect()->back()->withErrors("<strong>Unable to create:</strong> The staff already has an account");

     }
   }
 }

 public function AcceptRequest($auto_id){

   $session_type = Session::get('Session_Type');
   $session_value = Session::get('Session_Value');

   if($session_type == "Admin"){

     if(DB::table('leave_data')->where(["auto_id"=>$auto_id])->update(['approval_status'=>"[ACCEPTED]"])){

         return redirect()->back()->with('message', 'Accepted');

     }else{

       return redirect()->back()->with('message', 'No changes made.');

     }

   }else{

        return Redirect::to("/");

   }

 }

 public function DeclineRequest($auto_id){

   $session_type = Session::get('Session_Type');
   $session_value = Session::get('Session_Value');

   if($session_type == "Admin"){

     if(DB::table('leave_data')->where(["auto_id"=>$auto_id])->update(['approval_status'=>"[DECLINED]"])){

         return redirect()->back()->with('message', 'Declined');

     }else{

       return redirect()->back()->with('message', 'No changes made.');

     }

   }else{

        return Redirect::to("/");

   }

 }

 public function ChangeUsernameOfStaffAccount(Request $request){

    $session_type = Session::get('Session_Type');
    $session_value = Session::get('Session_Value');

    if($session_type == "Staff"){

       $staff_data = DB::table('user_account')->where(["account_type" => "staff", "staff_id" => $session_value])->get(); // Get staff data.

       if($request->password == $staff_data[0]->password){

         if(DB::table('user_account')->where(["account_type" => "staff", "staff_id" => $session_value])->update(['username'=>$request->username])){

             return redirect()->back()->with('message', 'Username has been updated successfully.');

         }else{

           return redirect()->back()->with('message', 'No changes made.');

         }


       }else{

         return redirect()->back()->withErrors('The password is wrong.');
       }

    }else{

        return Redirect::to("/");

    }

  }

  public function ChangePasswordOfStaffAccount(Request $request){

    $session_type = Session::get('Session_Type');
    $session_value = Session::get('Session_Value');

    if($session_type == "Staff"){

       $staff_data = DB::table('user_account')->where(["account_type" => "staff", "staff_id" => $session_value])->get(); // Get staff data.

       if($request->current_password == $staff_data[0]->password){

         if($request->new_password == $request->confirm_password){

           if(DB::table('user_account')->where(["account_type" => "staff", "staff_id" => $session_value])->update(['password'=>$request->new_password])){

               return redirect()->back()->with('message', 'Password has been updated successfully.');

           }else{

             return redirect()->back()->with('message', 'No changes made.');

           }

         }else{

           return redirect()->back()->withErrors('The confirm password does not match');

         }

       }else{

         return redirect()->back()->withErrors('The current password is wrong.');
       }

    }else{

        return Redirect::to("/");

    }

  }


   public function InsertLeaveDataOfStaffAccount(Request $request){

     $session_type = Session::get('Session_Type');
     $session_value = Session::get('Session_Value');

     if($session_type == "Staff"){

       $this->validate($request, [
         'type_of_leave' => 'required',
         'description' => 'required',
         'date_of_leave' => 'required',
       ]);

       
       $staff_id          =  $session_value;
       $type_of_leave     =  $request->type_of_leave;
       $description       =  $request->description;
       $date_of_leave     =  $request->date_of_leave;
       $date_of_request   =  date('Y-m-d H:i:s');
       $approval_status	  =  "[PENDING]";

      

       $results = DB::table('leave_type')->where('leave_type_name', $type_of_leave)->value('id');
      

       if(DB::insert('INSERT INTO leave_data (staff_id, type_of_leave, description, date_of_leave, date_of_request, approval_status ) values (?, ?, ?, ?, ?, ?)', [$staff_id, $results, $description, $date_of_leave, $date_of_request, $approval_status])){

           return redirect()->back()->with('message', 'Leave request has been submited successfully.');

       }

     }
   }

   public function DeleteLeavePendingRequestInStaffAccount($auto_id){

      $session_type = Session::get('Session_Type');

      if($session_type == "Staff"){

        if(DB::table('leave_data')->where('auto_id', '=', $auto_id)->delete()){

            return redirect()->back()->with('message', 'Deletion is Successful.');
        }

      }else{

          return Redirect::to("/");

      }






  }







}

?>
