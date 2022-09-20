<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
// use App\Mail\register;
use App\Models\Frontend\CountryModel;
use App\Models\Frontend\CityModel;
use App\Models\Frontend\RegisterModel;
use App\Models\Frontend\PaymentModel;
use App\Models\Frontend\ImageReviewModel;
use App\Models\Frontend\ReviewModel;
use App\Models\Frontend\EnjoyWithModel;

class FrontendController extends Controller
{
    public function get_index()
    {  
        $country = CountryModel::orderBy('p_view', 'DESC')->get();
        return view('frontend.index')->with('country', $country);
    }
    
    public function get_select_country(Request $request,$id)
    { 
        $_city = CityModel::leftJoin('db_country', 'db_city.country_id', '=', 'db_country.country_id')->where('db_city.country_id',$id)->orderBy('db_city.p_view', 'DESC')->get();
        $_country = CountryModel::find($id);
        CountryModel::find($id)->update([
            'p_view' => $_country->p_view + 1,
        ]);
        return view('frontend.select-country')->with('_country', $_country)->with('_city', $_city);
    }

    public function get_select_hotel(Request $request,$id_country,$id)
    { 
        $_city = CityModel::find($id);
        CityModel::find($id)->update([
            'p_view' => $_city->p_view + 1,
        ]);
        return view('frontend.select-hotel')->with('_city', $_city);
    }

    public function get_tourist_attraction()
    {  
        return view('frontend.tourist_attraction');
    }

    public function get_review()
    {  
        $review = ReviewModel::where('id_member',Auth::user()->id)->get();
        $reviews = ReviewModel::where('id_member',Auth::user()->id)->where('status',1)->get();
        $review_c = ReviewModel::where('id_member',Auth::user()->id)->where('status',0)->get();
        $check = count($review_c);
        return view('frontend.review')->with('review', $review)->with('reviews', $reviews)->with('check', $check);
    }

    public function get_profile()
    {  
        $payment = PaymentModel::where('id_member',Auth::user()->id)->get();
        return view('frontend.profile')->with('payment', $payment);
    }

    public function get_category()
    {  
        $enjoywith = EnjoyWithModel::get();
        return view('frontend.category')->with('enjoywith', $enjoywith);
    }

    public function get_category_travel(Request $request,$enjoy_id)
    {  
        $_enjoywith = EnjoyWithModel::find($enjoy_id);
        EnjoyWithModel::find($enjoy_id)->update([
            'p_view' => $_enjoywith->p_view + 1,
        ]);
        return view('frontend.category_travel');
    }

    public function register_member(Request $request)
    {
        $date = date('Y-m-d');
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
        $time = date('H:i:s');
        $newTime = \Carbon\Carbon::createFromFormat('H:i:s', $time)->format('H:i:s');
        if($request->password_1 == $request->password_2 && $request->password_1 != ""){

            // $pw = md5($request->password_1);
            $varible = Hash::make($request->password_1);
            
            RegisterModel::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => $varible,
                'status' => 1,
                'save_date' => $newDate,
                'save_time' => $newTime,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        return redirect("/signin");
    }

    public function search(request $request){

        $c_from = $request->province;
        $cin_from = $request->ci;
        $cout_from = $request->co;
        $a_from = $request->adult;
        $k_from = $request->kid;
        $r_from = $request->ro;
        $lower_from = $request->lower;
        $upper_from = $request->upper;
        if($c_from == '' || $cin_from == '' || $cout_from == '' || $a_from == '' || $k_from == ''|| $r_from == ''|| $lower_from == '' || $upper_from == ''){
            $ci = '01-'.date('m-Y');
            $co = date('t-m-Y',strtotime('01-'.date('m-Y')));
            $ro = 1;
        }else{
            $province = $c_from;
            $ci = $cin_from;
            $co = $cout_from;
            $adult = $a_from;
            $kid = $k_from;
            $ro = $r_from;
            if(isset($lower_from) || isset($upper)){
            $lower = $lower_from;
            $upper = $upper_from;
            }
		}
        if(isset($lower_from) || isset($upper)){
            return view('frontend/select-hotel', compact('c_from', 'cin_from', 'cout_from', 'a_from', 'k_from', 'r_from', 'ro', 'lower', 'upper'));
        }
        return view('frontend/select-hotel', compact('c_from', 'cin_from', 'cout_from', 'a_from', 'k_from', 'r_from', 'ro'));
    }

    public function updated_review(Request $request, $id)
    {
        ReviewModel::find($id)->update([
            'recommend_rate' => $request->recommend_rate,
            'write_review' => $request->write_review,
            'status' => 1,
            'updated_at' => Carbon::now()
        ]);
        
        if($request->img_review != '' && $request->img_review != NULL){
            $review = ReviewModel::find($id);

            if($review){

                foreach($request->img_review as $key => $qq){

                    $aa = $request->img_review[$key];

                    $gal = new ImageReviewModel();

                    $gal->id_member = Auth::user()->id;

                    $gal->id_review = $review->id;

                    $file_name = 'review_'.date('YmdHis').$_FILES['img_review']['name'][$key];

                    $picture = $file_name;

                    $aa->move(public_path() . '/assets_frontend/images/', $picture);

                    $gal->img_review = $picture;

                    $gal->created_at = Carbon::now();

                    $gal->updated_at = Carbon::now();

                    $gal->save();  

                }

            } 
        }
        echo '<script>
        alert("บันทึกข้อมูลเรียบร้อย");
        window.location.href = "' . url('/review') . '" ;
        </script>';

    }

    public function updated_profile(Request $request, $id)
    {
        RegisterModel::find($id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'updated_at' => Carbon::now()
        ]);
        echo '<script>
        alert("บันทึกข้อมูลเรียบร้อย");
        window.location.href = "' . url('/profile') . '" ;
        </script>';
    }

    public function updated_password(Request $request, $id)
    {
        if($request->password_1 == $request->password_2 && $request->password_1 != "" && $request->password_3 != ""){
            $varible = Hash::make($request->password_1);
            RegisterModel::find($id)->update([
                'password' => $varible,
                'updated_at' => Carbon::now()
            ]);
        }
        Auth::logout();$request->session()->invalidate();
        echo '<script>
        alert("บันทึกข้อมูลเรียบร้อย");
        window.location.href = "' . url('/signin') . '" ;
        </script>';
        
    }

    public function store_payment(Request $request)
    {
        PaymentModel::create([
            'id_member' => Auth::user()->id,
            'credit_number' => $request->credit_number,
            'credit_name' => $request->credit_name,
            'credit_date' => $request->credit_date,
            'credit_cvv' => $request->credit_cvv,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        echo '<script>
        alert("บันทึกข้อมูลเรียบร้อย");
        window.location.href = "' . url('/profile') . '" ;
        </script>';
    }

    public function updated_payment(Request $request, $id)
    {
        PaymentModel::find($id)->update([
            'credit_number' => $request->credit_number,
            'credit_name' => $request->credit_name,
            'credit_date' => $request->credit_date,
            'credit_cvv' => $request->credit_cvv,
            'updated_at' => Carbon::now()
        ]);
        echo '<script>
        alert("บันทึกข้อมูลเรียบร้อย");
        window.location.href = "' . url('/profile') . '" ;
        </script>';
    }

    public function destroy($id)
    {
        PaymentModel::find($id)->delete();
    }
   
}
