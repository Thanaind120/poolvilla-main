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
    @include('frontend/inc_navbar')
    <div class="bg-orange-light2">
        <div class="row g-1">
            <div class="col-lg-2 col-12">
                <input class="form-control emptytwo orange" type="text" id="iconified" placeholder="&#xF002;  *country*"
                    aria- label="default input example">
            </div>
            <div class="col-lg-4 col-sm-6">
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
                                        <input class="form-control orange-check check-in-out" id="check-in" type="date">
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
                                    <input class="form-control orange-check check-in-out" id="check-in" type="date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
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
                                        <label for="inputPassword" class="col-4 text-tiny text-orange">Adult</label>
                                        <div class="col-auto">
                                            <input class="input-number " id=demoInput type=number min=0 max=110
                                                placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row g-2">
                                        <label for="inputPassword" class="col-4 text-tiny text-orange">Kid</label>
                                        <div class="col-auto">
                                            <input class="input-number" id=demoInput type=number min=0 max=110
                                                placeholder="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row g-2">
                                        <label for="inputPassword" class="col-4 text-tiny text-orange">Room</label>
                                        <div class="col-auto">
                                            <input class="input-number" id=demoInput type=number min=0 max=110
                                                placeholder="0">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <a class="btn-search two" href="#">search</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="clearfix mt-2">
            <div class="float-start">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="bread" href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Catergory</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="head-text-index">Enjoy with</div>
        <div class="line-bottom-head-text"></div>
        <div class="row mt-5">
            @foreach ($enjoywith as $key => $val)
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{ route('category_travel.get', ['enjoy_id' => $val->enjoy_id]) }}" class="">
                        <img src="{{asset('assets_frontend/images/'.$val->enjoy_image)}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">{{ $val->enjoy_name }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
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

</script>
