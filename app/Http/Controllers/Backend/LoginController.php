<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    
    public function login(Request $r)    {
    
            $u=User::where('email',$r->email)->where('status',1)->first();
            if(!$u)
            {
                return redirect()->back()->with('warning','Email not found!');
            }
     
            if (!Hash::check($r->password, $u->password)) {
                return redirect()->back()->with('warning','Password is wrong');
            }

         
              Auth::login($u);
              if(auth::user()->position=="admin"||auth::user()->position=="super_admin"){
                return redirect()->to('/backend/index');
              }
             
              else{
                  return redirect()->back()->with('warning','Permission denied'); 
              }
    }

    public function logout(){
      Auth::logout();

     
  
      return redirect()->to('backend/login');
    }
}