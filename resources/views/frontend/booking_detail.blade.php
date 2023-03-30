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
    @include('frontend/inc_navbar')
    <div class="bg-orange">
        {{-- <div class="clearfix">
            <div class="float-end width-search">
                <input class="form-control empty orange" type="text" id="iconified" placeholder="&#xF002;  Where  are  you  looking for ?"aria-label="default input example">
            </div>
        </div> --}}
    </div>
    <div class="bg-grey-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="none-mobile">
                        <div class="box-sidebaraccount mt-3">
                            <a href="{{ url('/mybooking') }}" class="menu-account">
                                <div class="text-menu-account active">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-calendar"></i></div>
                                        <div class="col-10">@lang('lang.my_booking')</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/review') }}" class="menu-account">
                                <div class="text-menu-account">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-star"></i></div>
                                        <div class="col-10">@lang('lang.my_review')</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ url('/profile') }}" class="menu-account">
                                <div class="text-menu-account">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-user"></i></div>
                                        <div class="col-10">@lang('lang.profile')</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="mt-4"></div>
                    <a href="{{ url('/mybooking') }}" class="text-sort-by"><i
                            class="fas fa-chevron-left text-light-grey me-2"></i>@lang('lang.back_to_bookings')</a>
                    <div class="box-white my-4">
                        <div class="text-bold text-filter">@lang('lang.yourbooking_isconfirmed_noreconfirmation_required')</div>
                        <div class="row mt-2">
                            <div class="col-sm-6">
                                <a style="cursor:pointer" class="text-tiny text-orange" data-bs-toggle="modal" data-bs-target="#confirmation">
                                    <i class="fas fa-envelope me-2"></i>@lang('lang.get_booking_confirmation')
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a style="cursor:pointer" class="text-tiny text-orange" data-bs-toggle="modal" data-bs-target="#guest"><i
                                        class="fas fa-user-tie me-2"></i>@lang('lang.manage_guest')</a>
                            </div>
                            <div class="col-sm-6">
                                <a style="cursor:pointer" class="text-tiny text-orange" data-bs-toggle="modal" data-bs-target="#cancel"><i
                                        class="fas fa-ban me-2"></i>@lang('lang.cancel_booking')</a>
                            </div>
                            <div class="col-sm-6">
                                <a style="cursor:pointer" class="text-tiny text-orange" data-bs-toggle="modal" data-bs-target="#policies"><i
                                        class="fas fa-file-alt me-2"></i>@lang('lang.view_propoty_policies')</a>
                            </div>
                        </div>
                    </div>
                    <!-- Modal confirmation-->
                    <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">@lang('lang.get_booking_confirmation')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-bold text-tiny">@lang('lang.email')</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn-search-booking">@lang('lang.send_to_email')</button>
                                    <div class="text-light-grey text-center text-tiny">@lang('lang.or')</div>
                                    <button type="submit" class="btn-blue">@lang('lang.download')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal guest-->
                    <div class="modal fade" id="guest" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">@lang('lang.manage_guest')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="exampleFormControlInput2"
                                                class="form-label text-bold text-tiny">@lang('lang.first_name')</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="exampleFormControlInput3"
                                                class="form-label text-bold text-tiny">@lang('lang.last_name')</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput3">
                                        </div>
                                    </div>
                                    <div id="Create" style="display:none">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="exampleFormControlInput2"
                                                    class="form-label text-bold text-tiny">@lang('lang.first_name')</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="exampleFormControlInput3"
                                                    class="form-label text-bold text-tiny">@lang('lang.last_name')</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput3">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input style="cursor:pointer" id="btn" class="text-small text-blue btn-anoter"
                                            value="@lang('lang.add_another_guest')">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="row g-1 justify-content-end">
                                        <div class="col-4">
                                            <button type="submit" class="btn-grey"
                                                data-bs-dismiss="modal">@lang('lang.cancel')</button>
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" class="btn-search-booking">@lang('lang.save')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal cancel-->
                    <div class="modal fade" id="cancel" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">@lang('lang.cancel_booking')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">@lang('lang.reason_for_cancellation')</label>
                                    <div class="dropdown">
                                        <button class="btn-reason-cancel dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            @lang('lang.select_an_option')
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">@lang('lang.booking_was_not_confirmed_quickly_enough')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.concerns_about_reliabilityandtrustworthiness')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.concerns_about_safety_at_thehotel_location')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.decided_on_a_different_hotel_not_offered_byyour_site')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.did_not_like_cancellation_terms')</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.did_not_like_payment_terms')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.forced_to_cancel_or_postpone_trip')</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.found_lower_price_on_the_Internet')</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.found_lower_price_through_a_local_agent')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.natural_disaster')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.will_book_a_different_hotel_through_your_site')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.will_book_with_hotel_directly')</a></li>
                                            <li><a class="dropdown-item" href="#">@lang('lang.other')</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="row g-1 justify-content-end">
                                        <div class="col-4">
                                            <button type="submit" class="btn-grey"
                                                data-bs-dismiss="modal">@lang('lang.cancel')</button>
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" class="btn-search-booking">@lang('lang.cancel_booking')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal policies-->
                    <div class="modal fade" id="policies" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">@lang('lang.view_propoty_policies')</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-small text-bold text-grey">@lang('lang.title')</div>
                                    <div class="text-small  text-grey">@lang('lang.title_details')</div>
                                    <div class="text-small text-bold text-grey">@lang('lang.title')</div>
                                    <div class="text-small  text-grey">@lang('lang.title_details')</div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="box-white my-4">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="{{ asset('assets_frontend/images/cities%20(5).jpg') }}" class="img-fluid" alt="...">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <div class="name-text">poolvilla</div>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-orange size-star"></i>
                                        <i class="fas fa-star text-orange size-star"></i>
                                        <i class="fas fa-star text-orange size-star"></i>
                                        <i class="fas fa-star text-orange size-star"></i>
                                        <i class="fas fa-star text-orange size-star"></i>
                                    </div>
                                    <div class="text-blue text-tiny"><i class="fas fa-phone me-2"></i>02-000-0000</div>
                                    <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-2"></i>Location
                                        , Country
                                        <span>
                                            <a href="https://www.google.com/maps/dir//16.487357,102.835101/@16.487645,102.843716,15z?hl=th-TH"
                                                class="btn-link-map" target="_blank">@lang('lang.show_on_map')</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.booking_id')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">0000000000</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.check_in')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">14.00 - 25 Auguest 2021</div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.check_out')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">12.00 - 29 Auguest 2021</div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold"></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">4 @lang('lang.nights')</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.contact_detail')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">@lang('lang.email')</div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold"></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">090-000-0000</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.lead_guest')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">Thamonchanok Sangworavisit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.additional_guest')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-booking-detail">@lang('lang.rooms')</div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="{{ asset('assets_frontend/images/cities%20(5).jpg') }}" class="img-fluid" alt="...">
                                </a>
                                <div class="text-small text-light-grey mt-2">@lang('lang.room_size') : 70 m / 753 ft</div>
                                <div class="text-small text-light-grey mt-1">1 King bed & 1 Queen bed</div>
                                <div class="text-small text-light-grey mt-1">Private pool</div>
                            </div>
                            <div class="col-md-9">
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.rooms_booked')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">privates pool (x1)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.booked_capacity')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">2 adults</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.max_capacity')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">3 adults</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.room_type')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">Privated pool</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.room_capacity')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">Max 3 adults</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-booking-detail">@lang('lang.payment')</div>
                        <div class="row mt-4">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.payment_details')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-tiny">@lang('lang.total_amount_charged')</div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-tiny">THB 3,500.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">@lang('lang.payment_methods')</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-tiny">@lang('lang.card_holder_name')</div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-tiny">xxxxxxxxxxxxxx</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-tiny">@lang('lang.card_type')</div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-tiny">Visa</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="text-tiny">@lang('lang.card_number')</div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-tiny">xxxx-xxxx-xxxx-4363</div>
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
        </div>
    </div>
    @include('frontend/inc_footer')
</body>

</html>

<script type="text/javascript">
    $(document).ready(function () {
        $("#btn").click(function () {
            $("#Create").toggle();
        });
    });

</script>
