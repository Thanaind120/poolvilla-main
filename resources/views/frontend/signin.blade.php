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
    @include('frontend/inc_navbar_nonlogin')
    <div class="bg-grey">
        <form action="{{ url('/loging') }}" method="post">
            @csrf
            <div class="container">
                <div class="box-sign">
                    <div class="text-head-sign text-orange">@lang('lang.sign_in')</div>
                    <div class="space-footer mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-orange">@lang('lang.email')</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label text-orange">@lang('lang.password')</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput2">
                    </div>
                    <div class="clearfix">
                        <div class="float-end">
                            <a href="">
                                <small class="text-orange">@lang('lang.forgot_password')</small>
                            </a>
                        </div>
                    </div>

                    <button class="btn-sign"type="submit">@lang('lang.sign_in')</button>
                    <div class="box-text-white">
                        <div class="text-grey text-tiny">@lang('lang.or_countinue_with')</div>
                    </div>
                    <div class="text-line"></div>
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <button class="btn-facebook">
                                <img src="{{ asset('assets_frontend/images/fb.png') }}" class="fb"><span class="">facebook</span>
                            </button>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn-gmail">
                                <img src="{{ asset('assets_frontend/images/gmail.png') }}" class="gm"><span class="">gmail</span>
                            </button>
                        </div>
                    </div>
                    <div class="text-grey text-tiny text-start mt-5">@lang('lang.donot_have_an_account')<a href="{{('register') }}"
                            class="text-orange ms-2">@lang('lang.register')</a></div>

                    <div class="space-footer"></div>
                    <div class="row justify-content-center">
                        <div class="col-sm-5 col-8">
                            <img src="{{ asset('assets_frontend/images/singin.svg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="space-footer"></div>
    </div>
    @include('frontend/inc_footer')
</body>

</html>
