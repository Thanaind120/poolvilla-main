<!doctype html>
<html lang="th">

<head>
    <title>@lang('lang.poolvilla')</title>
    @include('frontend/inc_header')
    <link rel="stylesheet" href="{{ asset('assets_frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/css/owl.theme.default.min.css') }}">
    <script src="{{ asset('assets_frontend/js/owl.carousel.min.js') }}"></script>
    
</head>

<body>
    @include('sweetalert')
    @include('frontend/inc_navbar_scroll')
    <div class="banner">
        <img src="{{ asset('assets_frontend/images/banner_index.jpg') }}" class="banner-index">
        <div class="centered_box">
            <div class="text-banner-index">@lang('lang.get_thebest_poolvilla_aroundasia')</div>
            <div class="box-search-destination">
                <form action="{{ route('search.get') }}" method="get" autocomplete="off">
                    <div class="autocomplete">
                        <input id="myInput" class="form-control empty orange" type="text" name="province" id="iconified"
                            placeholder="&#xF002; @lang('lang.where_are_you_going')">
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-5">
                            <div class="bg-white-form">
                                <div class="row g-0">
                                    <div class="col-6">
                                        <div class="line-check-in">
                                            <label class="top-text-form" for="check-in">@lang('lang.check_in')</label>
                                            <div class="row g-0">
                                                <div class="col-2 text-center text-orange">
                                                    <i class="far fa-calendar check-calender"></i>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control orange-check check-in-out"
                                                        id="datepicker" type="text" placeholder="@lang('lang.date')" name="ci">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="top-text-form" for="check-in">@lang('lang.check_out')</label>
                                        <div class="row g-0">
                                            <div class="col-2 text-center text-orange">
                                                <i class="far fa-calendar check-calender"></i>
                                            </div>
                                            <div class="col-10">
                                                <input class="form-control orange-check check-in-out" id="datepicker2"
                                                    type="text" placeholder="@lang('lang.date')" name="co">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="bg-white-form">
                                <label class="top-text-form" for="check-in">@lang('lang.guest')</label>
                                <div class="row g-0">
                                    <div class="col-1 text-center text-orange">
                                        <i class="fas fa-user check-calender"></i>
                                    </div>
                                    <div class="col-11">
                                        <div class="row g-2">
                                            <div class="col-4">
                                                <div class="row g-2">
                                                    <label for="inputPassword"
                                                        class="col-4 text-tiny text-orange">@lang('lang.adult')</label>

                                                    <div class="col-8 mt-0">
                                                        <div class="input-group input-number">
                                                            <button class="btn sub" type="button" id="sub">-</button>
                                                            <input class="input-number border-0 text-center field"
                                                                placeholder="1" type="text" id="demoInput" name="adult"
                                                                value="1">
                                                            <button class="btn add" type="button" id="add">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="row g-2">
                                                    <label for="inputPassword"
                                                        class="col-4 text-tiny text-orange">@lang('lang.kid')</label>
                                                    <div class="col-8 mt-0">
                                                        <div class="input-group input-number">
                                                            <button class="btn sub2" type="button" id="sub2">-</button>
                                                            <input class="input-number border-0 text-center field2"
                                                                placeholder="1" type="text" id="demoInput" name="kid"
                                                                value="1">
                                                            <button class="btn add2" type="button" id="add2">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="row g-2">
                                                    <label for="inputPassword"
                                                        class="col-4 text-tiny text-orange">@lang('lang.room')</label>
                                                    <div class="col-8 mt-0">
                                                        <div class="input-group input-number">
                                                            <button class="btn sub3" type="button" id="sub3">-</button>
                                                            <input class="input-number border-0 text-center field3"
                                                                placeholder="1" type="text" id="demoInput" name="ro"
                                                                value="1">
                                                            <button class="btn add3" type="button" id="add3">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-search">@lang('lang.search')</button>
                </form>
            </div>
        </div>
    </div>
    <div class="space-footer">
        <div class="container my-5">
            <div class="owl-carousel slide-carousel-promotions owl-theme recommend">
                @foreach ($banner as $key => $val)
                <a class="" href="{{ url('/promotion/id='.$val->id) }}">
                    <div class="">
                        <div class="">
                            <img src="{{ asset('frontend_assets/banner/'.$val->banner_image) }}" class="card-img-top-travel"
                                alt="...">
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row pt-sm-5">
            <div class="col-sm-3 mb-2">
                <div class="head-text-index-df">@lang('lang.i_still')</div>
                <div class="detail-text mt-3">@lang('lang.the_place')</div>
                <a class="btn-sign index mt-xl-5" href="{{ url('/select-country') }}">@lang('lang.see_all')</a>
            </div>
            <div class="col-sm-9">
                <!-- destination slide -->
                <section class="testimonials">
                    <div class="row g-0">
                        <div id="customers-testimonials" class="owl-carousel trend">
                            @foreach ($country as $key => $val)
                            <div class="item box-destination">
                                <a href="{{ route('select_country.get', ['id' => $val->country_id]) }}">
                                    <img src="{{ asset('assets_frontend/images/destination1.jpg') }}" class="img-des">
                                    <div class="bottom-left">
                                        <p class="name-text text-white">{{ $val->country_name }}</p>
                                        {{-- {{ $val["country_name_".Session::get('locale')]}} --}}
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- end of destination slide -->
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="head-text-index">@lang('lang.what_activities')</div>
        <div class="line-bottom-head-text"></div>
        <div class="row mt-5">
            <div class="col-lg-3 col-6">
                <div class="myDIV">
                    <div class="overlay-img">
                        <div class="">
                            <a href="{{ url('/tourist_attraction_detail') }}">
                                <div class="HoverVideo">
                                    <div class="HoverVideo__wrapper">
                                        <div class="HoverVideo__videoBox thumb">
                                            <video class="video" loop preload="yes" muted>
                                                <source src="{{ asset('assets_frontend/images/video_1.mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/tourist_attraction_detail') }}">
                            <p class="name-text text-bold">place</p>
                        </a>
                        <p class="detail-text text-orange">cities , country</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="myDIV">
                    <div class="overlay-img">
                        <div class="">
                            <a href="{{ url('/tourist_attraction_detail') }}">
                                <div class="HoverVideo">
                                    <div class="HoverVideo__wrapper">
                                        <div class="HoverVideo__videoBox thumb">
                                            <video class="video" loop preload="yes" muted>
                                                <source src="{{ asset('assets_frontend/images/video_2.mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/tourist_attraction_detail') }}">
                            <p class="name-text text-bold">place</p>
                        </a>
                        <p class="detail-text text-orange">cities , country</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="myDIV">
                    <div class="overlay-img">
                        <div class="">
                            <a href="{{ url('/tourist_attraction_detail') }}">
                                <div class="HoverVideo">
                                    <div class="HoverVideo__wrapper">
                                        <div class="HoverVideo__videoBox thumb">
                                            <video class="video" loop preload="yes" muted>
                                                <source src="{{ asset('assets_frontend/images/video_3.mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/tourist_attraction_detail') }}">
                            <p class="name-text text-bold">place</p>
                        </a>
                        <p class="detail-text text-orange">cities , country</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="myDIV">
                    <div class="overlay-img">
                        <div class="">
                            <a href="{{ url('/tourist_attraction_detail') }}">
                                <div class="HoverVideo">
                                    <div class="HoverVideo__wrapper">
                                        <div class="HoverVideo__videoBox thumb">
                                            <video class="video" loop preload="yes" muted>
                                                <source src="{{ asset('assets_frontend/images/video_4.mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/tourist_attraction_detail') }}">
                            <p class="name-text text-bold">place</p>
                        </a>
                        <p class="detail-text text-orange">cities , country</p>

                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('/tourist-attraction') }}">
            <div class="row justify-content-center">
                <div class="col-sm-2 col-6 mt-sm-5 mt-2">
                    <div href="{{ url('/tourist-attraction') }}" class="btn-border-grey">@lang('lang.see_all')</div>
                </div>
            </div>
        </a>
    </div>
    <div class="bg-grey pb-5">
        <div class="container">
            <div class="head-text-index-df">@lang('lang.we_advise')</div>
            <div class="line-bottom-head-text-side"></div>
            <div class="scroll-bar-wrap">
                <div class="scroll-box">
                    <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true">ทะเล</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                                type="button" role="tab" aria-controls="pills-2" aria-selected="false">บนภูเขา</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                                type="button" role="tab" aria-controls="pills-3"
                                aria-selected="false">ห่างไกลความวุ่นวาย</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4"
                                type="button" role="tab" aria-controls="pills-4" aria-selected="false">Luxury</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5"
                                type="button" role="tab" aria-controls="pills-5" aria-selected="false">เกาะ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6"
                                type="button" role="tab" aria-controls="pills-6" aria-selected="false">ฟาร์ม</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-7-tab" data-bs-toggle="pill" data-bs-target="#pills-7"
                                type="button" role="tab" aria-controls="pills-7"
                                aria-selected="false">กลางป่าเขา</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-8-tab" data-bs-toggle="pill" data-bs-target="#pills-8"
                                type="button" role="tab" aria-controls="pills-8"
                                aria-selected="false">รับสัตว์เลี้ยง</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-9-tab" data-bs-toggle="pill" data-bs-target="#pills-9"
                                type="button" role="tab" aria-controls="pills-9"
                                aria-selected="false">บ้านต้นไม้</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-10-tab" data-bs-toggle="pill" data-bs-target="#pills-10"
                                type="button" role="tab" aria-controls="pills-10" aria-selected="false">ทุ่งนา</button>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/category') }}" class="nav-link btn-more">เพิ่มเติม</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-6 mb-3">
                            <div class="">
                                <a href="{{ url('/select-rooms') }}">
                                    <div class="img-cat">
                                        <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}"
                                            class="img-des pool" alt="...">
                                    </div>
                                </a>
                                <div class="box-body">
                                    <a href="#">
                                        <p class="detail-text text-bold">place</p>
                                    </a>
                                    <div class="for-mobile">
                                        <div class="row no-gutter ">
                                            <div class="col-2">
                                                <div class="star-rating">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="col-10">
                                                <div class="small star-rating">4.9</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <p class="small text-orange">8,000 ฿ / night</p>
                                        </div>
                                        <div class="col-auto g-1">
                                            <div class="for-destop">
                                                <div class="row no-gutter ">
                                                    <div class="col p-0">
                                                        <div class="star-rating">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-2 pr-0">
                                                        <div class="small star-rating">4.9</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ
                                        20,000 ฿ </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/category_travel') }}">
                        <div class="row justify-content-center">
                            <div class="col-sm-2  col-6 mt-sm-5 mt-2">
                                <div href="{{ url('/category_travel') }}" class="btn-border-grey">ดูทั้งหมด</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">...</div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">...</div>
                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">...</div>
                <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">...</div>
                <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">...</div>
                <div class="tab-pane fade" id="pills-7" role="tabpanel" aria-labelledby="pills-7-tab">...</div>
                <div class="tab-pane fade" id="pills-8" role="tabpanel" aria-labelledby="pills-8-tab">...</div>
                <div class="tab-pane fade" id="pills-9" role="tabpanel" aria-labelledby="pills-9-tab">...</div>
                <div class="tab-pane fade" id="pills-10" role="tabpanel" aria-labelledby="pills-10-tab">...</div>
            </div>
        </div>
        <div class="container">
            <div class="head-text-index-df">@lang('lang.choose_a')</div>
            <div class="line-bottom-head-text-side"></div>
            <div class="row mt-4">
                <div class="col-sm-4 col-6 mb-3">
                    <a class="" href="{{ url('/category_travel') }}">
                        <div class="row">
                            <div class="col-sm-7"><img
                                    src="{{ asset('assets_frontend/images/man-riding-his-surfboard-having-good-time.jpg') }}"
                                    class="card-img-top-travel w-100" alt="..."></div>
                            <div class="col-sm-5 pt-xl-5 pt-sm-2 pl-3">
                                <p class="detail-text text-bold text-center">Beach</p>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-sm-4 col-6 mb-3">
                    <a class="" href="{{ url('/category_travel') }}">
                        <div class="row">
                            <div class="col-sm-7"><img
                                    src="{{ asset('assets_frontend/images/attractive-stylish-young-woman-khaki-dress-desert-traveling-africa-safari-wearing-hat-backpack-taking-photo-vintage-camera.png') }}"
                                    class="card-img-top-travel w-100" alt="..."></div>
                            <div class="col-sm-5 pt-xl-5 pt-sm-2 pl-3">
                                <p class="detail-text text-bold text-center">Advanture</p>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-sm-4 col-6 mb-3">
                    <a class="" href="{{ url('/category_travel') }}">
                        <div class="row">
                            <div class="col-sm-7"><img
                                    src="{{ asset('assets_frontend/images/vertical-shot-motorbike-road-with-beautiful-view-mountains-kauai-hawaii.png') }}"
                                    class="card-img-top-travel w-100" alt="..."></div>
                            <div class="col-sm-5 pt-xl-5 pt-sm-2 pl-3">
                                <p class="detail-text text-bold text-center">Natural</p>

                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-sm-4 col-6 mb-3">
                    <a class="" href="{{ url('/category_travel') }}">
                        <div class="row">
                            <div class="col-sm-7"><img
                                    src="{{ asset('assets_frontend/images/rock-mountains-with-desert-background-nature-landscape%203.png') }}"
                                    class="card-img-top-travel w-100" alt="..."></div>
                            <div class="col-sm-5 pt-xl-5 pt-sm-2 pl-3">
                                <p class="detail-text text-bold text-center">City</p>

                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-sm-4 col-6 mb-3">
                    <a class="" href="{{ url('/category_travel') }}">
                        <div class="row">
                            <div class="col-sm-7"><img
                                    src="{{ asset('assets_frontend/images/camping-travel-tourism-hike-concept-young-man-setting-up-tent-outdoors%202.png') }}"
                                    class="card-img-top-travel w-100" alt="..."></div>
                            <div class="col-sm-5 pt-xl-5 pt-sm-2 pl-3">
                                <p class="detail-text text-bold text-center">Entertainment</p>

                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-sm-4 col-6 mb-3">
                    <a class="" href="{{ url('/category_travel') }}">
                        <div class="row">
                            <div class="col-sm-7"><img
                                    src="{{ asset('assets_frontend/images/courtyard-rural-house-building-with-grass-trees%202.jpg') }}"
                                    class="card-img-top-travel w-100" alt="..."></div>
                            <div class="col-sm-5 pt-xl-5 pt-sm-2 pl-3">
                                <p class="detail-text text-bold text-center">Private Tour</p>

                            </div>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <!-- reviews -->
        <div class="bg-orange-light">
            <div class="head-text-index">@lang('lang.review_from_travelers')</div>
            <div class="line-bottom-head-text"></div>
            <div class="row my-4">
                <div class="col-sm-4">
                    <div class="reviewimg-box mb-2">
                        <div class="fitter-review">
                            <img src="{{ asset('assets_frontend/images/4.2-place.jpg') }}" class="w-100">
                        </div>
                        <div class="review-text">
                            <p class="name-text text-white">poolvilla</p>
                            <p class="detail-text text-white">cities , country</p>
                            <p class="card-text text-white mt-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                        </div>
                        <div class="review-text-name">
                            <p class="reviews-customer mt-3">Miss A</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="reviewimg-box mb-2">
                        <div class="fitter-review">
                            <img src="{{ asset('assets_frontend/images/3-place.jpg') }}" class="w-100">
                        </div>
                        <div class="review-text">
                            <p class="name-text text-white">poolvilla</p>
                            <p class="detail-text text-white">cities , country</p>
                            <p class="card-text text-white mt-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                        </div>
                        <div class="review-text-name">
                            <p class="reviews-customer mt-3">Miss A</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="reviewimg-box mb-2">
                        <div class="fitter-review">
                            <img src="{{ asset('assets_frontend/images/recomment%20(1).jpg') }}" class="w-100">
                        </div>
                        <div class="review-text">
                            <p class="name-text text-white">poolvilla</p>
                            <p class="detail-text text-white">cities , country</p>
                            <p class="card-text text-white mt-3">Some quick example text to build on the card title and
                                make up the bulk of the card's content.</p>
                        </div>
                        <div class="review-text-name">
                            <p class="reviews-customer mt-3">Miss A</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of reviews -->
    </div>
    @include('frontend/inc_footer')
</body>

</html>
<script>
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: 'dd/mm/yy',
        });
    });

    $(function () {
        $("#datepicker2").datepicker({
            dateFormat: 'dd/mm/yy',
        });
    });

</script>
<script>
    $('#iconified').on('keyup', function () {
        var input = $(this);
        if (input.val().length === 0) {
            input.addClass('empty');
        } else {
            input.removeClass('empty');
        }
    });

    jQuery(document).ready(function ($) {
        "use strict";
        $('#customers-testimonials').owlCarousel({
            loop: true,
            margin: 30,
            navText: ['<span><i class="arrow fas fa-chevron-circle-left"></i></span>',
                '<span><i class="arrow fas fa-chevron-circle-right"></i></span>'
            ],
            autoplayHoverPause: false,
            autoplay: false,
            dots: true,
            nav: true,
            autoplayTimeout: 5500,
            smartSpeed: 650,
            stagePadding: 10,
            slideBy: 1,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1024: {
                    items: 3
                }

            }
        });
    });

    $('.slide-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ['<span><i class="fas fa-chevron-left"></i></span>',
            '<span><i class="fas fa-chevron-right"></i></span>'
        ],
        autoplayHoverPause: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5500,
        smartSpeed: 500,
        stagePadding: 30,
        slideBy: 1,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            768: {
                items: 3
            },
            1201: {
                items: 4
            }
        }
    });


    $('.slide-carousel-promotions').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ['<span><i class="fas fa-chevron-left"></i></span>',
            '<span><i class="fas fa-chevron-right"></i></span>'
        ],
        autoplayHoverPause: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5500,
        smartSpeed: 500,
        stagePadding: 30,
        slideBy: 1,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 1
            },
            768: {
                items: 2
            },
            1201: {
                items: 2
            }
        }
    });

</script>
<script>
    const videos = document.querySelectorAll(".video");

    for (const video of videos) {
        video.addEventListener('mouseover', function () {
            video.play()
        }, false);
        video.addEventListener('mouseout', function () {
            video.pause()
        }, false);
    }

</script>
<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function (e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function (e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function (e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    /*An array containing all the country names in the world:*/
    var courses = ["Destination A", "Destination B", "Destination C", "Destination D", "Destination E", "Destination F",
        "Destination G"
    ];

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("myInput"), courses);

</script>


<!-- ปุ่มเพิ่ม-ลด  -->
<script>
    var unit = 1;
    var total;
    // if user changes value in field
    $('.field').change(function () {
        unit = this.value;
    });
    $('.add').click(function () {
        unit++;
        var $input = $(this).prevUntil('.sub');
        $input.val(unit);
        unit = unit;
    });
    $('.sub').click(function () {
        if (unit > 0) {
            unit--;
            var $input = $(this).nextUntil('.add');
            $input.val(unit);
        }
    });

</script>

<script>
    var unit2 = 1;
    var total;
    // if user changes value in field
    $('.field2').change(function () {
        unit2 = this.value;
    });
    $('.add2').click(function () {
        unit2++;
        var $input = $(this).prevUntil('.sub2');
        $input.val(unit2);
        unit2 = unit2;
    });
    $('.sub2').click(function () {
        if (unit2 > 0) {
            unit2--;
            var $input = $(this).nextUntil('.add2');
            $input.val(unit2);
        }
    });

</script>

<script>
    var unit3 = 1;
    var total;
    // if user changes value in field
    $('.field3').change(function () {
        unit3 = this.value;
    });
    $('.add3').click(function () {
        unit3++;
        var $input = $(this).prevUntil('.sub3');
        $input.val(unit3);
        unit3 = unit3;
    });
    $('.sub3').click(function () {
        if (unit3 > 0) {
            unit3--;
            var $input = $(this).nextUntil('.add3');
            $input.val(unit3);
        }
    });

</script>
