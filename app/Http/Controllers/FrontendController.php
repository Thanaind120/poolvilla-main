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
use App\Models\Frontend\PoolvillaModel;
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
        $result = PoolvillaModel::orderBy('id', 'DESC')->get();
        return view('frontend.select-hotel', compact('result'))->with('_city', $_city);
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

    public function search(request $request)
    { 
        $c_from = $request->province;
        if($c_from != ''){
            $province = $c_from;
	 	}else{
            $province = NULL;
		}
        $cin_from = $request->ci;
        if($cin_from != ''){
            $ci = $cin_from;
	 	}else{
            $ci = '01-'.date('m-Y');
		}
        $cout_from = $request->co;
        if($cout_from != ''){
            $co = $cout_from;
	 	}else{
            $co = date('t-m-Y',strtotime('01-'.date('m-Y')));
		}
        $a_from = $request->adult;
        if($a_from != ''){
            $adult = $a_from;
	 	}else{
            $adult = NULL;
		}
        $k_from = $request->kid;
        if($k_from != ''){
            $kid = $k_from;
	 	}else{
            $kid = NULL;
		}
        $r_from = $request->ro;
        if($r_from != ''){
            $ro = $r_from;
	 	}else{
            $ro = 1;
		}
        $lower_from = $request->lower;
        if($lower_from != ''){
            $lower = $lower_from;
        }else{
            $lower = NULL;
        }
        $upper_from = $request->upper;
        if($upper_from != ''){
            $upper = $upper_from;
        }else{
            $upper = NULL;
        }
        $star5_from = $request->star5;
        if($star5_from != ''){   
            $star5 = $star5_from;
        }else{
            $star5 = NULL;
        }
        $star4_from = $request->star4;
        if($star4_from != ''){
            $star4 = $star4_from;
        }else{
            $star4 = NULL;
        }
        $star3_from = $request->star3;
        if($star3_from != ''){
            $star3 = $star3_from;
        }else{
            $star3 = NULL;
        }
        $star2_from = $request->star2;
        if($star2_from != ''){
            $star2 = $star2_from;
        }else{
            $star2 = NULL;
        }
        $star1_from = $request->star1;
        if($star1_from != ''){ 
            $star1 = $star1_from;
        }else{
            $star1 = NULL;
        }
        $star0_from = $request->star0;
        if($star0_from != ''){
            $star0 = $star0_from;
        }else{
            $star0 = NULL;
        }
        // $category_from = $request->category;
        // if($category_from != ''){
        //     $category = $category_from;
        // }else{

        // }
        // dd($province);
        // dd($star5_from);
        // $result = PoolvillaModel::where('country', $province)->where('adult','>=', $adult)->where('kids','>=', $kid)->where('room','>=', $ro)->where('','<=', $lower)->orWhere('','>=', $upper)->where('star_rate', $star5)->orWhere('star_rate', $star4)->orWhere('star_rate', $star3)->orWhere('star_rate', $star2)->orWhere('star_rate', $star1)->orWhere('star_rate', $star0)->orderBy('id', 'DESC')->get();
        if($lower != '' || $upper != '' || $star5 != '' || $star4 != '' || $star3 != '' || $star2 != '' || $star1 != '' || $star0 != ''){
            $result = PoolvillaModel::where('country', $province)->where('adult','>=', $adult)->where('kids','>=', $kid)->where('room','>=', $ro)->where('star_rate', $star5)->orWhere('star_rate', $star4)->orWhere('star_rate', $star3)->orWhere('star_rate', $star2)->orWhere('star_rate', $star1)->orWhere('star_rate', $star0)->orderBy('id', 'DESC')->get();
            return view('frontend/select-hotel', compact('result','c_from', 'cin_from', 'cout_from', 'a_from', 'k_from', 'r_from', 'ro', 'lower_from', 'upper_from', 'star5_from', 'star4_from', 'star3_from', 'star2_from', 'star1_from', 'star0_from'));
        }else{
            $result = PoolvillaModel::where('country', $province)->where('adult','>=', $adult)->where('kids','>=', $kid)->where('room','>=', $ro)->orderBy('id', 'DESC')->get();
            return view('frontend/select-hotel', compact('result','c_from', 'cin_from', 'cout_from', 'a_from', 'k_from', 'r_from', 'ro', 'lower_from', 'upper_from', 'star5_from', 'star4_from', 'star3_from', 'star2_from', 'star1_from', 'star0_from')); 
        }
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
