<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    // Login
    public function loging(Request $r)    {
        // find user
        $member = Member::where('email',$r->email)->where('status',1)->first();
        if(!isset($member))
        {
            return redirect()->back()->with('warning','Email not found!');
        }
 
        if (!Hash::check($r->password, $member->password)) {
            // dd($r->password);
            return redirect()->back()->with('warning','Password is wrong');
        }
          Auth::guard('web')->login($member);
          if(auth::guard('web')->user()->status == 1){
            return redirect()->to('/index')->with('success','Success!');
          }
          else{
              return redirect()->back()->with('warning','Permission denied'); 
          }
    }
    
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect("/index");
    }
}
