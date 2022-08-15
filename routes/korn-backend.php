<?php

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
Route::group(['middleware' => ['web','auth']], function () {
// manage admin
Route::get('/backend/index','App\Http\Controllers\Backend\AdminController@get_index');
Route::get('/backend/admin_profile','App\Http\Controllers\Backend\AdminController@get_index');
Route::get('/backend/admin/add-admin','App\Http\Controllers\Backend\AdminController@get_form');
Route::POST('backend/admin_profile/save','App\Http\Controllers\Backend\AdminController@save_form');
Route::POST('/backend/admin_reset','App\Http\Controllers\Backend\AdminController@reset_password');
Route::get('/backend/admin/update_profile/{p}','App\Http\Controllers\Backend\AdminController@get_form2');

//manage member
Route::get('/backend/member_profile','App\Http\Controllers\Backend\ManageMemberController@get_index');
Route::get('/backend/admin/add-member','App\Http\Controllers\Backend\ManageMemberController@get_form');
Route::POST('backend/member_profile/save','App\Http\Controllers\Backend\ManageMemberController@save_form');
Route::POST('/backend/member_reset','App\Http\Controllers\Backend\ManageMemberController@reset_password');
Route::get('/backend/admin/update_member/{p}','App\Http\Controllers\Backend\ManageMemberController@get_form2');
//manage hotel
Route::get('/backend/hotel_profile','App\Http\Controllers\Backend\ManageHotelController@get_index');
Route::get('/backend/admin/add-hotel','App\Http\Controllers\Backend\ManageHotelController@get_form');
Route::POST('backend/hotel_profile/save','App\Http\Controllers\Backend\ManageHotelController@save_form');
Route::POST('/backend/hotel_reset','App\Http\Controllers\Backend\ManageHotelController@reset_password');
Route::get('/backend/admin/update_hotel/{p}','App\Http\Controllers\Backend\ManageHotelController@get_form2');

//profile 
Route::get('/backend/edit_profile','App\Http\Controllers\Backend\ProfileController@get_form');
Route::get('/backend/change_password','App\Http\Controllers\Backend\ProfileController@get_form2');
Route::Post('backend/profile/save','App\Http\Controllers\Backend\ProfileController@update_profile');
Route::Post('backend/password/update','App\Http\Controllers\Backend\ProfileController@update_password');
// hotel detail
Route::get('/backend/admin/hotel/{p}','App\Http\Controllers\Backend\HotelDetailController@get_index');
Route::get('/backend/admin/manage_image_hotel/{p}','App\Http\Controllers\Backend\HotelDetailController@get_index2');
Route::get('/backend/admin/manage_description_hotel/{p}','App\Http\Controllers\Backend\HotelDetailController@get_form');
Route::get('backend/admin/manage_rooms/{p}','App\Http\Controllers\Backend\HotelDetailController@get_index3');
Route::get('backend/admin/add_edit_room/{p}','App\Http\Controllers\Backend\HotelDetailController@get_form2');
Route::post('/backend/hotel/save','App\Http\Controllers\Backend\HotelDetailController@save_hotel');
route::get('backend/admin/add_poolvilla/{p}','App\Http\Controllers\Backend\HotelDetailController@get_add_poolvilla');
Route::post('/backend/image_poolvilla/save','App\Http\Controllers\Backend\HotelDetailController@save_image_poolvilla');
Route::post('/backend/image_poolvilla/delete','App\Http\Controllers\Backend\HotelDetailController@delete_image_poolvilla');
// facilities
Route::get('backend/admin/facilities','App\Http\Controllers\Backend\FacilitiesController@get_index');
Route::get('backend/admin/add_facilities','App\Http\Controllers\Backend\FacilitiesController@get_form');
Route::get('backend/admin/edit_facilities/{p}','App\Http\Controllers\Backend\FacilitiesController@get_form2');
Route::POST('backend/facilities/save','App\Http\Controllers\Backend\FacilitiesController@save_facilities');
Route::POST('backend/facilities/update','App\Http\Controllers\Backend\FacilitiesController@update_facilities');
Route::POST('backend/icon/update','App\Http\Controllers\Backend\FacilitiesController@update_icon');
Route::POST('backend/icon/save','App\Http\Controllers\Backend\FacilitiesController@save_icon');
Route::POST('backend/icon/delete','App\Http\Controllers\Backend\FacilitiesController@delete_icon');
Route::POST('backend/facilities/delete','App\Http\Controllers\Backend\FacilitiesController@delete_facilities');

//banner
Route::get('backend/admin/banner','App\Http\Controllers\Backend\BannerController@get_index');
Route::get('backend/banner/add','App\Http\Controllers\Backend\BannerController@get_add');
Route::get('backend/banner/edit/{id}','App\Http\Controllers\Backend\BannerController@get_edit');
Route::POST('backend/banner/save','App\Http\Controllers\Backend\BannerController@save_banner');
Route::POST('backend/banner/update','App\Http\Controllers\Backend\BannerController@update_banner');
Route::POST('backend/banner/delete','App\Http\Controllers\Backend\BannerController@delete_banner');

// pool villa manage page
route::POST('backend/manage_poolvilla_pages','App\Http\Controllers\Backend\ManagePoolVillaPagesController@manage_page');
route::get('backend/admin/more_about_poolvilla/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@get_more_about_poovilla');
route::get('backend/admin/Q&A/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@q_and_a');
route::get('backend/admin/manage_Q&A/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@get_edit_q_and_a');

// rooms manage page
route::POST('backend/manage_rooms_pages','App\Http\Controllers\Backend\ManagePoolVillaPagesController@manage_rooms_page');
route::get('backend/admin/image_room/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@get_image_room');
route::get('backend/admin/discount/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@get_discount');
route::get('backend/admin/reserve_time/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@get_reserve_time');
route::get('backend/admin/reserve/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@get_reserve');
route::get('backend/admin/reserve_report/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@get_reserve_report');
route::get('backend/admin/edit_reserve/{id}','App\Http\Controllers\Backend\ManagePoolVillaPagesController@get_edit_reserve');

//Banking Control
route::get('backend/admin/banking','App\Http\Controllers\Backend\BankController@get_index');
route::get('backend/admin/add_bank','App\Http\Controllers\Backend\BankController@get_form');
route::POST('backend/banking/save','App\Http\Controllers\Backend\BankController@save_form');
route::get('backend/admin/update_bank/{id}','App\Http\Controllers\Backend\BankController@get_form2');

//Banking System Control
route::get('backend/admin/banking_system','App\Http\Controllers\Backend\BankController@get_index_system');
route::get('backend/admin/add_bank_system','App\Http\Controllers\Backend\BankController@get_form_system');
route::POST('backend/banking_system/save','App\Http\Controllers\Backend\BankController@save_form_system');
route::get('backend/admin/update_bank_system/{id}','App\Http\Controllers\Backend\BankController@get_form2_system');

//House
route::POST('backend/house/save','App\Http\Controllers\Backend\HouseDetailController@save_house');
route::get('backend/admin/add_house/{id}','App\Http\Controllers\Backend\HouseDetailController@get_add_house');
route::get('backend/admin/manage_rooms/th/{id}','App\Http\Controllers\Backend\HouseDetailController@get_edit_house_th');
route::get('backend/admin/manage_description_hotel/th/{id}','App\Http\Controllers\Backend\HouseDetailController@get_edit_pool_th');

//discount
route::POST('backend/discount/save','App\Http\Controllers\Backend\ManagePoolVillaPagesController@save_discount');
});