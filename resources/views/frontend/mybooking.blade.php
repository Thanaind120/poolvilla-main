<!doctype html>
<html lang="th">

<head>
    <title>@lang('lang.poolvilla')</title>
    @include('frontend/inc_header')
    <link rel="stylesheet" href="{{ asset('assets_frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/css/owl.theme.default.min.css') }}">
    <script src="{{ asset('assets_frontend/js/owl.carousel.min.js') }}"></script>
    <?php $active[0]='active'; ?>
</head>

<body>
    @include('frontend/inc_navbar')
    <div class="bg-orange">
        {{-- <div class="clearfix">
            <div class="float-end width-search">
                <input class="form-control empty orange" type="text" id="iconified"
                    placeholder="&#xF002;  Where  are  you  looking for ?" aria-label="default input example">
            </div>
        </div> --}}
    </div>
    <div class="bg-grey-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="none-mobile">
                        @include('frontend/inc_account')
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="mt-4"></div>
                    <div class="row">
                        <div>
                            <a style="cursor:pointer" class="btn-booking btn_show active">@lang('lang.upcoming')</a>
                            <a style="cursor:pointer" class="btn-booking btn_show">@lang('lang.completed')</a>
                            <a style="cursor:pointer" class="btn-booking btn_show">@lang('lang.cancelled')</a>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="float-end">
                            <div class="row g-1">
                                <div class="col-6">
                                    <div class="text-sort-by">@lang('lang.sort_by') :</div>
                                </div>
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn-sortby dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            @lang('lang.best_match')
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">@lang('lang.best_match')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.popular_properties')</a></li>
                                            {{-- <li><a class="dropdown-item" href="#">...</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="boxshow">
                            <div class="bg-orange-light3 my-4">
                                <div class="text-bold text-filter">@lang('lang.my_booking')</div>
                                <form class="row g-3 mt-1">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control booking" id="inputPassword2">
                                    </div>
                                    <div class="col-sm-3 col-6">
                                        <button type="submit" class="btn-search-booking">@lang('lang.search')</button>
                                    </div>
                                    <div class="col-sm-3 col-6">
                                        <button type="submit" class="btn-clear">@lang('lang.clear')</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card booking mb-3" href="#">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="{{ asset('assets_frontend/images/cities%20(5).jpg') }}"
                                                class="img-fluid" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="name-text">poolvilla</div>
                                                    <div class="text-grey text-review">@lang('lang.booking_id') : 000000000</div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="vl-left">
                                                        <div class="text-light-grey text-small">@lang('lang.booked_on') August 19,
                                                            2021</div>
                                                        <div class="row g-0 mt-2">
                                                            <div class="col-5">
                                                                <div class="text-light-grey text-tiny">@lang('lang.Check_in')</div>
                                                                <div class="row g-0">
                                                                    <div class="col-6">
                                                                        <div class="text-light-grey text-check">25</div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="text-light-grey text-small">Aug
                                                                        </div>
                                                                        <div class="text-light-grey text-small">Wed
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="vl-left-dash">
                                                                    <div class="text-light-grey text-tiny">@lang('lang.Check_out')
                                                                    </div>
                                                                    <div class="row g-0">
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-check">29
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-small">Aug
                                                                            </div>
                                                                            <div class="text-light-grey text-small">Sun
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-price text-grey text-bold text-end mt-4">
                                                            THB <span class="text-red">3,500</span></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-top-book">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a style="cursor:pointer" class="text-blue text-small" data-bs-toggle="modal"
                                                        data-bs-target="#confirmation">@lang('lang.send_booking_confirmation')</a>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="vl-blue">
                                                        <a style="cursor:pointer" class="text-blue text-small"
                                                            href="https://www.google.com/maps/dir//16.487357,102.835101/@16.487645,102.843716,15z?hl=th-TH"
                                                            target="_blank">@lang('lang.view_on_map')</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal confirmation-->
                                            <div class="modal fade" id="confirmation" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">@lang('lang.get_booking_confirmation')</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label text-bold text-tiny">@lang('lang.email')</label>
                                                            <input type="email" class="form-control"
                                                                id="exampleFormControlInput1">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn-search-booking">@lang('lang.send_to_email')</button>
                                                            <div class="text-light-grey text-center text-tiny">@lang('lang.or')</div>
                                                            <button type="submit" class="btn-blue">@lang('lang.download')</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <a type="submit" class="btn-blue" href="{{ url('/booking_detail') }}">@lang('lang.view_details')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-booking"></div>
                        </div>
                        <div class="boxshow">
                            <div class="bg-orange-light3 my-4">
                                <div class="text-bold text-filter">@lang('lang.my_booking')</div>
                                <form class="row g-3 mt-1">
                                    <div class="col-6">
                                        <input type="text" class="form-control booking" id="inputPassword2">
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn-search-booking">@lang('lang.search')</button>
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn-clear">@lang('lang.clear')</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card booking mb-3" href="#">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="{{ asset('assets_frontend/images/cities%20(5).jpg') }}"
                                                class="img-fluid" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="name-text">poolvilla</div>
                                                    <div class="text-grey text-review">@lang('lang.booking_id') : 000000000</div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="vl-left">
                                                        <div class="text-light-grey text-small">@lang('lang.booked_on') August 19,
                                                            2021</div>
                                                        <div class="row g-0 mt-2">
                                                            <div class="col-5">
                                                                <div class="text-light-grey text-tiny">@lang('lang.Check_in')</div>
                                                                <div class="row g-0">
                                                                    <div class="col-6">
                                                                        <div class="text-light-grey text-check">25</div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="text-light-grey text-small">Aug
                                                                        </div>
                                                                        <div class="text-light-grey text-small">Wed
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="vl-left-dash">
                                                                    <div class="text-light-grey text-tiny">@lang('lang.Check_out')
                                                                    </div>
                                                                    <div class="row g-0">
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-check">29
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-small">Aug
                                                                            </div>
                                                                            <div class="text-light-grey text-small">Sun
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-price text-grey text-bold text-end mt-4">
                                                            THB <span class="text-red">3,500</span></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-top-book">
                                    <div class="row">
                                        <div class="col-sm-9">
                                        </div>
                                        <div class="col-sm-3">
                                            <a type="submit" class="btn-blue" href="{{ url('/booking_detail') }}">@lang('lang.view_details')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card booking mb-3" href="#">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="{{ asset('assets_frontend/images/cities%20(5).jpg') }}"
                                                class="img-fluid" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="name-text">poolvilla</div>
                                                    <div class="text-grey text-review">@lang('lang.booking_id') : 000000000</div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="vl-left">
                                                        <div class="text-light-grey text-small">@lang('lang.booked_on') August 19,
                                                            2021</div>
                                                        <div class="row g-0 mt-2">
                                                            <div class="col-5">
                                                                <div class="text-light-grey text-tiny">@lang('lang.Check_in')</div>
                                                                <div class="row g-0">
                                                                    <div class="col-6">
                                                                        <div class="text-light-grey text-check">25</div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="text-light-grey text-small">Aug
                                                                        </div>
                                                                        <div class="text-light-grey text-small">Wed
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="vl-left-dash">
                                                                    <div class="text-light-grey text-tiny">@lang('lang.Check_out')
                                                                    </div>
                                                                    <div class="row g-0">
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-check">29
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-small">Aug
                                                                            </div>
                                                                            <div class="text-light-grey text-small">Sun
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-price text-grey text-bold text-end mt-4">
                                                            THB <span class="text-red">3,500</span></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-top-book">
                                    <div class="row">
                                        <div class="col-sm-9">
                                        </div>
                                        <div class="col-sm-3">
                                            <a type="submit" class="btn-blue" href="{{ url('/booking_detail') }}">@lang('lang.view_details')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-booking"></div>
                        </div>
                        <div class="boxshow">
                            <div class="bg-orange-light3 my-4">
                                <div class="text-bold text-filter">@lang('lang.my_booking')</div>
                                <form class="row g-3 mt-1">
                                    <div class="col-6">
                                        <input type="text" class="form-control booking" id="inputPassword2">
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn-search-booking">@lang('lang.search')</button>
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn-clear">@lang('lang.clear')</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card booking mb-3" href="#">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="{{ asset('assets_frontend/images/cities%20(5).jpg') }}"
                                                class="img-fluid" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="name-text">poolvilla</div>
                                                    <div class="text-grey text-review">@lang('lang.booking_id') : 000000000</div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="vl-left">
                                                        <div class="text-light-grey text-small">@lang('lang.booked_on') August 19,
                                                            2021</div>
                                                        <div class="row g-0 mt-2">
                                                            <div class="col-5">
                                                                <div class="text-light-grey text-tiny">@lang('lang.Check_in')</div>
                                                                <div class="row g-0">
                                                                    <div class="col-6">
                                                                        <div class="text-light-grey text-check">25</div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <div class="text-light-grey text-small">Aug
                                                                        </div>
                                                                        <div class="text-light-grey text-small">Wed
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="vl-left-dash">
                                                                    <div class="text-light-grey text-tiny">@lang('lang.Check_out')
                                                                    </div>
                                                                    <div class="row g-0">
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-check">29
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="text-light-grey text-small">Aug
                                                                            </div>
                                                                            <div class="text-light-grey text-small">Sun
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-price text-grey text-bold text-end mt-4">
                                                            THB <span class="text-red">3,500</span></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-top-book">
                                    <div class="row">
                                        <div class="col-sm-9">
                                        </div>
                                        <div class="col-sm-3">
                                            <a type="submit" class="btn-blue" href="{{ url('/booking_detail') }}">@lang('lang.view_details')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-booking"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend/inc_footer')
    <script>
        $('.btn_show').click(function (event) {
            var rsnum = $(this).index();
            if ($(".boxshow").eq(rsnum).is(":hidden")) {
                $(".boxshow").hide();
                $(".boxshow").eq(rsnum).fadeIn();
            } else {}
            event.stopPropagation();
        });
    
        $(function () {
            $('.btn_show').click(function () {
                $('.btn_show').removeClass('active');
                $(this).addClass('active');
            });
        });
    
    </script>
</body>

</html>


