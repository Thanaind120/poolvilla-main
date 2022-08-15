<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class CountryController extends Controller
{
    
    public function backend_country() {
        $country = DB::select("select * from db_country order by country_id desc");
        return  view('backend.country.backend_country',compact('country'));
    }

    public function backend_country_add() {
        return  view('backend.country.backend_country_add');
    }
    
    public function backend_country_save(Request $request) {
        if($request->type == 1){
            if(isset($request->image)){
                $country_image = date('YmdHis').'_country_image'.'.'.$request->image->getClientOriginalExtension();
                $request->image->move('frontend_assets/country_image/', $country_image);
            }
            DB::insert("insert into db_country set country_image = '$country_image', country_name = '$request->country_name'");
            return redirect()->to('/backend/country')->with('success','บันทึกข้อมูลเรียบร้อย');

        }else{
            if(isset($request->image)){
                $country_image = date('YmdHis').'_country_image'.'.'.$request->image->getClientOriginalExtension();
                $request->image->move('frontend_assets/country_image/', $country_image);
            }else{
                $country_image = $request->old_image;
            }
            DB::update("update db_country set country_image = '$country_image', country_name = '$request->country_name' where country_id = '$request->id'");
            return redirect()->to('/backend/country')->with('success','บันทึกข้อมูลเรียบร้อย');
        }
       
    }

    public function backend_country_edit($id) {
        $country = DB::select("select * from db_country where country_id = '$id'");
        return  view('backend.country.backend_country_add',compact('country'));
    }

    public function backend_country_city($id) {
        $country = DB::select("select * from db_country where country_id = '$id'");
        $city = DB::select("select * from db_city where country_id = '$id'");
        return  view('backend.country.city.backend_country_city',compact('country','city'));
    }

    public function backend_country_city_add($id) {
        $country_id = $id;
        return  view('backend.country.city.backend_country_city_add',compact('country_id'));
    }

    public function backend_country_city_edit($id) {
        $city = DB::select("select * from db_city where city_id = '$id'");
        $country_id = $city[0]->country_id;
        return  view('backend.country.city.backend_country_city_add',compact('city','country_id'));
    }

    public function backend_country_city_save(Request $request) {
        if($request->type == 1){
            if(isset($request->image)){
                $city_image = date('YmdHis').'_city_image'.'.'.$request->image->getClientOriginalExtension();
                $request->image->move('frontend_assets/city_image/', $city_image);
            }
            DB::insert("insert into db_city set city_image = '$city_image', city_name = '$request->city_name', country_id = '$request->country_id'");
            return redirect()->to('/backend/country/city/'.$request->country_id)->with('success','บันทึกข้อมูลเรียบร้อย');

        }else{
            if(isset($request->image)){
                $city_image = date('YmdHis').'_city_image'.'.'.$request->image->getClientOriginalExtension();
                $request->image->move('frontend_assets/city_image/', $city_image);
            }else{
                $city_image = $request->old_image;
            }
            DB::update("update db_city set city_image = '$city_image', city_name = '$request->city_name' where city_id = '$request->id'");
            return redirect()->to('/backend/country/city/'.$request->country_id)->with('success','บันทึกข้อมูลเรียบร้อย');
        }
       
    }

    public function backend_country_city_delete($id){
        DB::delete("delete from db_city where city_id = '$id'");
        return back()->with('success', 'ลบข้อมูลเรียบร้อย');
    }


    
    

    

    


}
