<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clc', function() {
	Artisan::call('cache:clear');
	Artisan::call('config:clear');
	Artisan::call('config:cache');
    Artisan::call('view:clear');   
    // Artisan::call('optimize');
    // Artisan::call('clear-compiled');
    // Artisan::call('view:clear');
    // session()->forget('key');
	return "Cleared!";
});

// ---------------------------------------- Member Frontend ---------------------------------------- //
if(Auth::guard('web')->user() != '' || Auth::guard('web')->user() != null){
    Route::group(['middleware' => ['web','auth']], function () {
        Route::get('/',[FrontendController::class,'get_index']);
        Route::get('/index',[FrontendController::class,'get_index']);
        Route::get('/category',[FrontendController::class,'get_category']);
        Route::get('/tourist-attraction',[FrontendController::class,'get_tourist_attraction']);
        Route::get('/select-country/id={id}',[FrontendController::class,'get_select_country'])->name('select_country.get');
        Route::get('/review-hotel', function () {
            return view('frontend.review_hotel');
        });
        Route::get('/select-hotel', function () {
            return view('frontend.select-hotel');
        });
        Route::get('/select-hotel/country={id_country}/city={id}',[FrontendController::class,'get_select_hotel'])->name('select_hotel.get'); 
        Route::get('/select-hotel/search',[FrontendController::class,'search'])->name('search.get');
        Route::get('/select-rooms', function () {
            return view('frontend.select-rooms');
        });
        Route::get('/booking-1', function () {
            return view('frontend.booking-1');
        });
        Route::get('/booking-2', function () {
            return view('frontend.booking-2');
        });
        Route::get('/booking-3', function () {
            return view('frontend.booking-3');
        });
        Route::get('/category-travel', function () {
            return view('frontend.category_travel');
        });
        Route::get('/category-travel/id={enjoy_id}',[FrontendController::class,'get_category_travel'])->name('category_travel.get');
        Route::get('/mybooking', function () {
            return view('frontend.mybooking');
        });
        Route::get('/profile',[FrontendController::class,'get_profile']);
        Route::put('/profile/id={id}',[FrontendController::class,'updated_profile']);
        Route::put('/profile/updated/id={id}',[FrontendController::class,'updated_password']);
        Route::post('/profile/payment',[FrontendController::class,'store_payment'])->name('payment.insert');
        Route::put('/profile/payment/id={id}',[FrontendController::class,'updated_payment']);
        Route::delete('/profile/payment/delete/id={id}',[FrontendController::class,'destroy']);
        Route::get('/review',[FrontendController::class,'get_review']);
        Route::post('/review/id={id}',[FrontendController::class,'updated_review']);
        Route::get('/promotion', function () {
            return view('frontend.promotion');
        });
        Route::get('/tourist_attraction_detail', function () {
            return view('frontend.tourist_attraction_detail');
        });
        Route::get('/booking_detail', function () {
            return view('frontend.booking_detail');
        });
        Route::get('/tourist_attraction_country', function () {
            return view('frontend.tourist_attraction_country');
        });
    });
}else if(Auth::guard('web')->user() == '' || Auth::guard('web')->user() == null){
    Route::POST('/loging',[LoginController::class,'loging']);
    Route::get('/logout',[LoginController::class,'logout']);
    Route::get('/signin', function () {
        return view('frontend.signin');
    });
    Route::get('/register', function () {
        return view('frontend.register');
    });
    Route::post('/register',[FrontendController::class,'register_member'])->name('register.insert');
    Route::get('/',[FrontendController::class,'get_index']);
    Route::get('/index',[FrontendController::class,'get_index']);
    Route::get('/category',[FrontendController::class,'get_category']);
    route::get('/tourist-attraction',[FrontendController::class,'get_tourist_attraction']);
    Route::get('/select-country/id={id}',[FrontendController::class,'get_select_country'])->name('select_country.get');
    Route::get('/review-hotel', function () {
        return view('frontend.review_hotel');
    });
    Route::get('/select-hotel', function () {
        return view('frontend.select-hotel');
    });
    Route::get('/select-hotel/country={id_country}/city={id}',[FrontendController::class,'get_select_hotel'])->name('select_hotel.get');
    Route::get('/select-hotel/search',[FrontendController::class,'search'])->name('search.get');
    Route::get('/select-rooms', function () {
        return view('frontend.select-rooms');
    });
    Route::get('/booking-1', function () {
        return view('frontend.booking-1');
    });
    Route::get('/booking-2', function () {
        return view('frontend.booking-2');
    });
    Route::get('/booking-3', function () {
        return view('frontend.booking-3');
    });
    Route::get('/category-travel', function () {
        return view('frontend.category_travel');
    });
    Route::get('/category-travel/id={enjoy_id}',[FrontendController::class,'get_category_travel'])->name('category_travel.get');
    Route::get('/promotion', function () {
        return view('frontend.promotion');
    });
    Route::get('/tourist_attraction_detail', function () {
        return view('frontend.tourist_attraction_detail');
    });
    Route::get('/booking_detail', function () {
        return view('frontend.booking_detail');
    });
    Route::get('/tourist_attraction_country', function () {
        return view('frontend.tourist_attraction_country');
    });
}
// ---------------------------------------- End Member Frontend ---------------------------------------- //

Route::POST('backend/loging','App\Http\Controllers\backend\LoginController@loging');
Route::get('/backend/login', function () {
    return view('auth.login');
});
