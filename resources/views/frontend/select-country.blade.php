<!doctype html>
<html lang="th">

<head>
    <title>Poolvilla</title>
    @include('frontend/inc_header')
    <link rel="stylesheet" href="{{asset('assets_frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_frontend/css/owl.theme.default.min.css')}}">
    <script src="{{asset('assets_frontend/js/owl.carousel.min.js')}}"></script>
</head>

<body>
    @include('frontend/inc_navbar_scroll')
    <div class="banner">
        <img src="{{asset('assets_frontend/images/banner_index.jpg')}}" class="banner-index">
        <div class="centered_box">
            <div class="text-banner-country ">Search Pool Villa In *Country*</div>
            <div class="box-search-destination">
                <input class="form-control empty orange" type="text" id="iconified"
                    placeholder="&#xF002;  Where  are  you  going ?" aria-label="default input example">
                <div class="row mt-2">
                    <div class="col-lg-5">
                        <div class="bg-white-form">
                            <div class="row g-0">
                                <div class="col-6">
                                    <div class="line-check-in">
                                        <label class="top-text-form" for="check-in">Check in</label>
                                        <div class="row g-0">
                                            <div class="col-2 text-center text-orange">
                                                <i class="far fa-calendar check-calender"></i>
                                            </div>
                                            <div class="col-10">
                                                <input class="form-control orange-check check-in-out" id="datepicker"
                                                    type="text" placeholder="mm/dd/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="top-text-form" for="check-in">Check out</label>
                                    <div class="row g-0">
                                        <div class="col-2 text-center text-orange">
                                            <i class="far fa-calendar check-calender"></i>
                                        </div>
                                        <div class="col-10">
                                            <input class="form-control orange-check check-in-out" id="datepicker2"
                                                type="text" placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bg-white-form">
                            <label class="top-text-form" for="check-in">Guest</label>
                            <div class="row g-0">
                                <div class="col-1 text-center text-orange">
                                    <i class="fas fa-user check-calender"></i>
                                </div>
                                <div class="col-11">
                                    <div class="row g-2">

                                        <div class="col-4">
                                            <div class="row g-2">
                                                <label for="inputPassword"
                                                    class="col-4 text-tiny text-orange">Adult</label>
                                                <div class="col-8 mt-0">
                                                    <div class="input-group input-number">
                                                        <button class="btn sub" type="button" id="sub">-</button>
                                                        <input class="input-number border-0 text-center field "
                                                            placeholder="" type="text" id="1" value="1">
                                                        <button class="btn add" type="button" id="add">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row g-2">
                                                <label for="inputPassword"
                                                    class="col-4 text-tiny text-orange">Kid</label>
                                                <div class="col-8 mt-0">
                                                    <div class="input-group input-number">
                                                        <button class="btn sub" type="button" id="sub">-</button>
                                                        <input class="input-number border-0 text-center field "
                                                            placeholder="" type="text" id="1" value="1">
                                                        <button class="btn add" type="button" id="add">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row g-2">
                                                <label for="inputPassword"
                                                    class="col-4 text-tiny text-orange">Room</label>
                                                <div class="col-8 mt-0">
                                                    <div class="input-group input-number">
                                                        <button class="btn sub" type="button" id="sub">-</button>
                                                        <input class="input-number border-0 text-center field "
                                                            placeholder="" type="text" id="1" value="1">
                                                        <button class="btn add" type="button" id="add">+</button>
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
                <a class="btn-search" href="{{url('select-hotel')}}">search</a>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="clearfix">
            <div class="float-start">
                <div class="for-destop">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="bread" href="{{url('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">*country*</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="head-text-index">Most popular cities in *country*</div>
        <div class="line-bottom-head-text"></div>
        <div class="row my-5">
            @foreach ($_city as $key => $val)
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{ route('select_hotel.get', ['id_country' => $val->country_id ,'id' => $val->city_id]) }}" class="">          
                        <img src="{{asset('assets_frontend/images/destination1.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">{{ $val->city_name }} , {{ $val->country_name }}</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="head-text-index">Top picks for Pool Villa in *country*</div>
        <div class="line-bottom-head-text"></div>
        <!-- Recommend  slide -->
        <div class="container mt-5">
            <div class="owl-carousel slide-carousel owl-theme  recommend">
                <div class="">
                    <a href="{{url('select-rooms')}}">
                        <div class="box-save-red-image">
                            <div class="text-head-sale">25%</div>
                            <p>Sale</p>
                        </div>
                        <div class="img-cat-place">
                            <img src="{{asset('assets_frontend/images/recomment%20(1).jpg')}}" class="img-des  pool" alt="...">
                        </div>

                    </a>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-9">
                                <a href="{{url('select-rooms')}}">
                                    <p class="name-text">poolvilla</p>
                                    <p class="detail-text">cities , country</p>
                                </a>
                            </div>
                            <div class="col-3 px-0">
                                <div class="row no-gutter">
                                    <div class="col-4 px-2 ">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="small star-rating">4.9</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class="small text-orange">8,000 ฿ / night</p>
                            </div>
                        </div>
                        <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ 20,000 ฿
                        </div>
                    </div>
                </div>
                <div class="">
                    <a href="{{url('select-rooms')}}">
                        <div class="box-save-red-image">
                            <div class="text-head-sale">25%</div>
                            <p>Sale</p>
                        </div>
                        <div class="img-cat-place">
                            <img src="{{asset('assets_frontend/images/recomment%20(2).jpg')}}" class="img-des  pool" alt="...">
                        </div>

                    </a>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-9">
                                <a href="{{url('select-rooms')}}">
                                    <p class="name-text">poolvilla</p>
                                    <p class="detail-text">cities , country</p>
                                </a>
                            </div>
                            <div class="col-3 px-0">
                                <div class="row no-gutter">
                                    <div class="col-4 px-2 ">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 ">
                                        <div class="small star-rating">4.9</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class="small text-orange">8,000 ฿ / night</p>
                            </div>
                        </div>
                        <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ 20,000 ฿
                        </div>
                    </div>
                </div>
                <div class="">
                    <a href="{{url('select-rooms')}}">
                        <div class="box-save-red-image">
                            <div class="text-head-sale">25%</div>
                            <p>Sale</p>
                        </div>
                        <div class="img-cat-place">
                            <img src="{{asset('assets_frontend/images/recomment%20(3).jpg')}}" class="img-des  pool" alt="...">
                        </div>

                    </a>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-9">
                                <a href="{{url('select-rooms')}}">
                                    <p class="name-text">poolvilla</p>
                                    <p class="detail-text">cities , country</p>
                                </a>
                            </div>
                            <div class="col-3 px-0">
                                <div class="row no-gutter">
                                    <div class="col-4 px-2 ">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="small star-rating">4.9</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class="small text-orange">8,000 ฿ / night</p>
                            </div>
                        </div>
                        <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ 20,000 ฿
                        </div>
                    </div>
                </div>
                <div class="">
                    <a href="{{url('select-rooms')}}">
                        <div class="box-save-red-image">
                            <div class="text-head-sale">25%</div>
                            <p>Sale</p>
                        </div>
                        <div class="img-cat-place">
                            <img src="{{asset('assets_frontend/images/recomment%20(4).jpg')}}" class="img-des pool" alt="...">
                        </div>

                    </a>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-9">
                                <a href="{{url('select-rooms')}}">
                                    <p class="name-text">poolvilla</p>
                                    <p class="detail-text">cities , country</p>
                                </a>
                            </div>
                            <div class="col-3 px-0">
                                <div class="row no-gutter">
                                    <div class="col-4 px-2 ">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="small star-rating">4.9</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <p class="small text-orange">8,000 ฿ / night</p>
                            </div>
                        </div>
                        <div class="small text-light-grey" style="text-decoration: line-through;">จากปกติ 20,000 ฿
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of Recommend slide -->
    </div>
    <div class="space-footer"></div>
    @include('frontend/inc_footer')
</body>

</html>

<script>
    $('#iconified').on('keyup', function () {
        var input = $(this);
        if (input.val().length === 0) {
            input.addClass('empty');
        } else {
            input.removeClass('empty');
        }
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
    $(function () {
        $("#datepicker").datepicker();
    });

    $(function () {
        $("#datepicker2").datepicker();
    });

</script>
