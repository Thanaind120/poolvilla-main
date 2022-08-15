<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    
    public function get_index() {
        $user=User::where('position','admin')->orwhere('position','super_admin')->get();
        $data=array(
            'user'=>$user,
        );
        return  view('backend.admin.manage_profile.index',$data);
    }
    public function get_form() {
        // $user=User::where('position','admin')->get();
        // $data=array(
        //     'user'=>$user,
        // );
        return  view('backend.admin.manage_profile.form');
    }
    public function get_form2($p) {
        $user=User::where('id',$p)->first();
        $data=array(
            'user'=>$user,
        );
        return  view('backend.admin.manage_profile.form',$data);
    }
    public function save_form(Request $r){
        // save
      
        if($r->type==1){        
            $user=new User();
            $user->name=$r->name;
            $user->email=$r->email;
            $user->position=$r->position;
            $user->password=Hash::make('m123456');
            $user->status=1;
            $user->save();
            return redirect()->to('/backend/admin_profile')->with('success','Save Data Success');
        }
        if($r->type==2){
            $user=User::where('id',$r->id)->first();
            $user->name=$r->name;
            $user->email=$r->email;
            $user->position=$r->position;
          
            if(isset($r->status)){
                $user->status=1;
            }else{
                $user->status=0;
            }
            $user->save();
            return redirect()->to('/backend/admin_profile')->with('success','Update Data Success');
        }
    }

    public function reset_password(Request $r) {
        $user=User::where('id',$r->id)->first();
        $user->password=Hash::make('m123456');
        $user->save();
        return redirect()->to('/backend/admin_profile')->with('success','Reset Password Success');
    }

}
