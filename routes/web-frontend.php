<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['web','auth']], function () {
    //frontend
    Route::get('/',[FrontendController::class,'get_index']);
    Route::get('/index',[FrontendController::class,'get_index']);
    Route::get('/category',[FrontendController::class,'get_category']);
    Route::get('/tourist_attraction',[FrontendController::class,'get_tourist_attraction']);
    Route::get('/select-country/{id}',[FrontendController::class,'get_select_country'])->name('select_country.get');
    Route::get('/review_hotel', function () {
        return view('frontend.review_hotel');
    });
    Route::get('/select-hotel', function () {
        return view('frontend.select-hotel');
    });
    Route::get('/select-hotel/id_country={id_country}/id_city={id}',[FrontendController::class,'get_select_hotel'])->name('select_hotel.get'); 
    Route::get('/select-hotel/search','App\Http\Controllers\FrontendController@country_search')->name('search.get');
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
    Route::get('/category-travel/id_enjoy={enjoy_id}',[FrontendController::class,'get_category_travel'])->name('category_travel.get');
    Route::get('/mybooking', function () {
        return view('frontend.mybooking');
    });
    Route::get('/profile',[FrontendController::class,'get_profile']);
    Route::put('/profile/{id}','App\Http\Controllers\FrontendController@updated_profile');
    Route::put('/profile/updated/{id}','App\Http\Controllers\FrontendController@updated_password');
    Route::post('/profile/payment','App\Http\Controllers\FrontendController@store_payment')->name('payment.insert');
    Route::put('/profile/payment/{id}','App\Http\Controllers\FrontendController@updated_payment');
    Route::delete('/profile/payment/delete/{id}','App\Http\Controllers\FrontendController@destroy');
    Route::get('/review',[FrontendController::class,'get_review']);
    Route::post('/review/{id}','App\Http\Controllers\FrontendController@updated_review');
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

//frontend
Route::POST('/loging','App\Http\Controllers\LoginController@loging');
Route::get('/logout','App\Http\Controllers\LoginController@logout');
Route::get('/signin', function () {
    return view('frontend.signin');
});
Route::get('/register', function () {
    return view('frontend.register');
});
Route::post('/register','App\Http\Controllers\FrontendController@register_member')->name('register.insert');
Route::get('/',[FrontendController::class,'get_index']);
Route::get('/index',[FrontendController::class,'get_index']);
Route::get('/category',[FrontendController::class,'get_category']);
route::get('/tourist_attraction',[FrontendController::class,'get_tourist_attraction']);
Route::get('/select-country/{id}',[FrontendController::class,'get_select_country'])->name('select_country.get');
Route::get('/review_hotel', function () {
    return view('frontend.review_hotel');
});
Route::get('/select-hotel', function () {
    return view('frontend.select-hotel');
});
Route::get('/select-hotel/id_country={id_country}/id_city={id}',[FrontendController::class,'get_select_hotel'])->name('select_hotel.get');
Route::get('/select-hotel/search','App\Http\Controllers\FrontendController@country_search')->name('search.get');
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
Route::get('/category-travel/id_enjoy={enjoy_id}',[FrontendController::class,'get_category_travel'])->name('category_travel.get');
// Route::get('/mybooking', function () {
//     return view('frontend.mybooking');
// });
// Route::get('/profile', function () {
//     return view('frontend.profile');
// });
// Route::get('/review', function () {
//     return view('frontend.review');
// });
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


