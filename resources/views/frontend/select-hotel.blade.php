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
        <form action="{{ route('search.get') }}" method="get" autocomplete="off">
            <div class="row g-1">
                <div class="col-lg-2 col-12">
                    @if(isset($c_from))
                    <input class="form-control emptytwo orange" type="text" id="iconified" name="province"
                        placeholder="&#xF002;  *country*" aria-label="default input example" value="{{ $c_from }}">
                    @else
                    <input class="form-control emptytwo orange" type="text" id="iconified" name="province"
                        placeholder="&#xF002;  *country*" aria-label="default input example" value="">
                    @endif
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
                                            @if(isset($cin_from))
                                            <input class="form-control orange-check check-in-out" id="datepicker"
                                                type="text" placeholder="mm/dd/yyyy" name="ci" value="{{ $cin_from }}">
                                            @else
                                            <input class="form-control orange-check check-in-out" id="datepicker"
                                                type="text" placeholder="mm/dd/yyyy" name="ci" value="">
                                            @endif
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
                                        @if(isset($cout_from))
                                        <input class="form-control orange-check check-in-out" id="datepicker2"
                                            type="text" placeholder="mm/dd/yyyy" name="co" value="{{ $cout_from }}">
                                        @else
                                        <input class="form-control orange-check check-in-out" id="datepicker2"
                                            type="text" placeholder="mm/dd/yyyy" name="co" value="">
                                        @endif
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
                                            <div class="col-8 mt-0">
                                                <div class="input-group input-number">
                                                    <button class="btn sub" type="button" id="sub">-</button>
                                                    @if(isset($a_from))
                                                    <input class="input-number border-0 text-center field"
                                                        placeholder="{{ $a_from }}" type="text" id="demoInput"
                                                        name="adult" value="{{ $a_from }}">
                                                    @else
                                                    <input class="input-number border-0 text-center field"
                                                        placeholder="1" type="text" id="demoInput" name="adult"
                                                        value="">
                                                    @endif
                                                    <button class="btn add" type="button" id="add">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row g-2">
                                            <label for="inputPassword"
                                                class="col-4 text-tiny text-orange text-center">Kid</label>
                                            <div class="col-8 mt-0">
                                                <div class="input-group input-number">
                                                    <button class="btn sub2" type="button" id="sub2">-</button>
                                                    @if(isset($k_from))
                                                    <input class="input-number border-0 text-center field2"
                                                        placeholder="{{ $k_from }}" type="text" id="demoInput2"
                                                        name="kid" value="{{ $k_from }}">
                                                    @else
                                                    <input class="input-number border-0 text-center field2"
                                                        placeholder="1" type="text" id="demoInput2" name="kid" value="">
                                                    @endif
                                                    <button class="btn add2" type="button" id="add2">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row g-2">
                                            <label for="inputPassword" class="col-4 text-tiny text-orange">Room</label>
                                            <div class="col-8 mt-0">
                                                <div class="input-group input-number">
                                                    <button class="btn sub3" type="button" id="sub3">-</button>
                                                    @if(isset($r_from))
                                                    <input class="input-number border-0 text-center field3"
                                                        placeholder="{{ $r_from }}" type="text" id="demoInput3"
                                                        name="ro" value="{{ $r_from }}">
                                                    @elseif(isset($ro))
                                                    <input class="input-number border-0 text-center field3"
                                                        placeholder="{{ $ro }}" type="text" id="demoInput3" name="ro"
                                                        value="{{ $ro }}">
                                                    @else
                                                    <input class="input-number border-0 text-center field3"
                                                        placeholder="1" type="text" id="demoInput3" name="ro" value="">
                                                    @endif
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
                <div class="col-lg-2 col-12">
                    <button type="submit" class="btn-search two">Search</button>
                </div>
            </div>
        </form>
    </div>
    <div class="bg-orange">
        <!-- <div class="clearfix">
            <div class="float-end width-search">
                <input class="form-control empty orange" type="text" id="iconified" placeholder="&#xF002;  Where  are  you  looking for ?" aria-label="default input example">
            </div>
        </div> -->
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-3  none-mobile">
                <div class="filter-badge"><i class="fas fa-filter me-2"></i>filter</div>
                <div class="mt-4">
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-tag me-2"></i>Budget</div>
                            <div class="ms-4">
                                <div class="text-bold text-title-filter text-grey">Price Per Night</div>
                                <div class="">
                                    <fieldset class="filter-price">
                                        <div class="price-field">
                                            <form id="formRange">
                                                @if(isset($c_from) || isset($cin_from) || isset($cout_from) ||
                                                isset($a_from) || isset($k_from))
                                                <input type="hidden" name="province" value="{{ $c_from }}">
                                                <input type="hidden" name="ci" value="{{ $cin_from }}">
                                                <input type="hidden" name="co" value="{{ $cout_from }}">
                                                <input type="hidden" name="adult" value="{{ $a_from }}">
                                                <input type="hidden" name="kid" value="{{ $k_from }}">
                                                @else
                                                <input type="hidden" name="province" value="">
                                                <input type="hidden" name="ci" value="">
                                                <input type="hidden" name="co" value="">
                                                <input type="hidden" name="adult" value="">
                                                <input type="hidden" name="kid" value="">
                                                @endif
                                                @if(isset($r_from))
                                                <input type="hidden" name="ro" value="{{ $r_from }}">
                                                @elseif(isset($ro))
                                                <input type="hidden" name="ro" value="{{ $ro }}">
                                                @else
                                                <input type="hidden" name="ro" value="">
                                                @endif
                                                @if(isset($lower_from))
                                                <input type="range" min="0" max="10000" value="{{ $lower_from }}"
                                                    id="lower" name="lower" onchange="changeRange(this.value)">
                                                @else
                                                <input type="range" min="0" max="10000" value="0" id="lower"
                                                    name="lower" onchange="changeRange(this.value)">
                                                @endif
                                                @if(isset($upper_from))
                                                <input type="range" min="100" max="10000" value="{{ $upper_from }}"
                                                    id="upper" name="upper" onchange="changeRange(this.value)">
                                                @else
                                                <input type="range" min="100" max="10000" value="10000" id="upper"
                                                    name="upper" onchange="changeRange(this.value)">
                                                @endif
                                            </form>
                                        </div>
                                        <div class="price-wrap">
                                            <div class="price-container">
                                                <div class="price-wrap-1">
                                                    <input id="one">
                                                </div>
                                            </div>
                                            <div class="price-container">
                                                <div class="price-wrap-2">
                                                    <input id="two">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-star me-2"></i>Stars Rating</div>
                            <div class="ms-4 mt-2">
                                <form id="formStars">
                                    @if(isset($c_from) || isset($cin_from) || isset($cout_from) ||
                                    isset($a_from) || isset($k_from))
                                    <input type="hidden" name="province" value="{{ $c_from }}">
                                    <input type="hidden" name="ci" value="{{ $cin_from }}">
                                    <input type="hidden" name="co" value="{{ $cout_from }}">
                                    <input type="hidden" name="adult" value="{{ $a_from }}">
                                    <input type="hidden" name="kid" value="{{ $k_from }}">
                                    @else
                                    <input type="hidden" name="province" value="">
                                    <input type="hidden" name="ci" value="">
                                    <input type="hidden" name="co" value="">
                                    <input type="hidden" name="adult" value="">
                                    <input type="hidden" name="kid" value="">
                                    @endif
                                    @if(isset($r_from))
                                    <input type="hidden" name="ro" value="{{ $r_from }}">
                                    @elseif(isset($ro))
                                    <input type="hidden" name="ro" value="{{ $ro }}">
                                    @else
                                    <input type="hidden" name="ro" value="">
                                    @endif
                                    @if(isset($lower_from) || isset($upper_from))
                                    <input type="hidden" name="lower" value="{{ $lower_from }}">
                                    <input type="hidden" name="upper" value="{{ $upper_from }}">
                                    @else
                                    <input type="hidden" name="lower" value="">
                                    <input type="hidden" name="upper" value="">
                                    @endif
                                    @if(isset($star5_from))
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star5" name="star5"
                                            onclick="clickStars(this.value)" value="{{ $star5_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked1">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star5" name="star5"
                                            onclick="clickStars(this.value)" value="5">
                                        <label class="form-check-label" for="flexCheckChecked1">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @endif
                                    @if (isset($star4_from))
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star4" name="star4"
                                            onclick="clickStars(this.value)" value="{{ $star4_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked2">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star4" name="star4"
                                            onclick="clickStars(this.value)" value="4">
                                        <label class="form-check-label" for="flexCheckChecked2">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @endif
                                    @if (isset($star3_from))
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star3" name="star3"
                                            onclick="clickStars(this.value)" value="{{ $star3_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked3">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star3" name="star3"
                                            onclick="clickStars(this.value)" value="3">
                                        <label class="form-check-label" for="flexCheckChecked3">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @endif
                                    @if (isset($star2_from))
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star2" name="star2"
                                            onclick="clickStars(this.value)" value="{{ $star2_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked4">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star2" name="star2"
                                            onclick="clickStars(this.value)" value="2">
                                        <label class="form-check-label" for="flexCheckChecked4">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @endif
                                    @if (isset($star1_from))
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star1" name="star1"
                                            onclick="clickStars(this.value)" value="{{ $star1_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked5">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star1" name="star1"
                                            onclick="clickStars(this.value)" value="1">
                                        <label class="form-check-label" for="flexCheckChecked5">
                                            <i class="fas fa-star text-orange text-medium"></i>
                                        </label>
                                    </div>
                                    @endif
                                    @if (isset($star0_from))
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star0" name="star0"
                                            onclick="clickStars(this.value)" value="{{ $star0_from }}"
                                            checked="checked">
                                        <label class="form-check-label text-grey text-medium" for="flexCheckChecked5">
                                            No Rating
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="star0" name="star0"
                                            onclick="clickStars(this.value)" value="0">
                                        <label class="form-check-label text-grey text-medium" for="flexCheckChecked5">
                                            No Rating
                                        </label>
                                    </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-suitcase-rolling me-2"></i>Category
                            </div>
                            <div class="ms-4 mt-2">
                                <form id="formCategory">
                                    @if(isset($c_from) || isset($cin_from) || isset($cout_from) ||
                                    isset($a_from) || isset($k_from))
                                    <input type="hidden" name="province" value="{{ $c_from }}">
                                    <input type="hidden" name="ci" value="{{ $cin_from }}">
                                    <input type="hidden" name="co" value="{{ $cout_from }}">
                                    <input type="hidden" name="adult" value="{{ $a_from }}">
                                    <input type="hidden" name="kid" value="{{ $k_from }}">
                                    @else
                                    <input type="hidden" name="province" value="">
                                    <input type="hidden" name="ci" value="">
                                    <input type="hidden" name="co" value="">
                                    <input type="hidden" name="adult" value="">
                                    <input type="hidden" name="kid" value="">
                                    @endif
                                    @if(isset($r_from))
                                    <input type="hidden" name="ro" value="{{ $r_from }}">
                                    @elseif(isset($ro))
                                    <input type="hidden" name="ro" value="{{ $ro }}">
                                    @else
                                    <input type="hidden" name="ro" value="">
                                    @endif
                                    @if(isset($lower_from) || isset($upper_from) || isset($star5_from) ||
                                    isset($star4_from) || isset($star3_from) || isset($star2_from) || isset($star1_from)
                                    || isset($star0_from))
                                    <input type="hidden" name="lower" value="{{ $lower_from }}">
                                    <input type="hidden" name="upper" value="{{ $upper_from }}">
                                    <input type="hidden" name="star5" value="{{ $star5_from }}">
                                    <input type="hidden" name="star4" value="{{ $star4_from }}">
                                    <input type="hidden" name="star3" value="{{ $star3_from }}">
                                    <input type="hidden" name="star2" value="{{ $star2_from }}">
                                    <input type="hidden" name="star1" value="{{ $star1_from }}">
                                    <input type="hidden" name="star0" value="{{ $star0_from }}">
                                    @else
                                    <input type="hidden" name="lower" value="">
                                    <input type="hidden" name="upper" value="">
                                    <input type="hidden" name="star5" value="">
                                    <input type="hidden" name="star4" value="">
                                    <input type="hidden" name="star3" value="">
                                    <input type="hidden" name="star2" value="">
                                    <input type="hidden" name="star1" value="">
                                    <input type="hidden" name="star0" value="">
                                    @endif
                                    @if (isset($category_from) == 'Beach')
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category" name="category"
                                            onclick="clickCategory(this.value)" value="{{ $category_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked1">Beach
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category" name="category"
                                            onclick="clickCategory(this.value)" value="Beach">
                                        <label class="form-check-label" for="flexCheckChecked1">Beach
                                        </label>
                                    </div>
                                    @endif
                                    @if (isset($category_from) == 'City')
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category" name="category"
                                            onclick="clickCategory(this.value)" value="{{ $category_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked2">City
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category" name="category"
                                            onclick="clickCategory(this.value)" value="City">
                                        <label class="form-check-label" for="flexCheckChecked2">City
                                        </label>
                                    </div>
                                    @endif
                                    @if (isset($category_from) == 'Entertainment')
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category" name="category"
                                            onclick="clickCategory(this.value)" value="{{ $category_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked3">Entertainment
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category" name="category"
                                            onclick="clickCategory(this.value)" value="Entertainment">
                                        <label class="form-check-label" for="flexCheckChecked3">Entertainment
                                        </label>
                                    </div>
                                    @endif
                                    @if (isset($category_from) == 'Natural')
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category" name="category"
                                            onclick="clickCategory(this.value)" value="{{ $category_from }}"
                                            checked="checked">
                                        <label class="form-check-label" for="flexCheckChecked3">Entertainment
                                        </label>
                                    </div>
                                    @else
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category" name="category"
                                            onclick="clickCategory(this.value)" value="Natural">
                                        <label class="form-check-label" for="flexCheckChecked4">Natural
                                        </label>
                                    </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-gem me-2"></i>Payment Options</div>
                            <div class="ms-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked1">Free
                                        Cancellation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked2">Book
                                        Now,Pay Later
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked3">Pay at
                                        Hotel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked4">Pay
                                        Now
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked5">Book
                                        without Credit Card
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-map-pin me-2"></i>Distance to Center
                            </div>
                            <div class="ms-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked1">Inside
                                        City Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked2"><i
                                            class="fas fa-chevron-left me-1"></i>2 km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked3">2 - 5
                                        km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked4">5 -
                                        10 km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked5"><i
                                            class="fas fa-chevron-right me-1"></i>5 km to Center
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="clearfix mb-3">
                    <div class="for-mobile">
                        <div class="float-start">
                            <button type="button" class="filter-badge" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fas fa-filter me-2"></i>filter</button>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div>
                                            <div class="vl-filter">
                                                <div class="text-orange text-filter"><i
                                                        class="fas fa-tag me-2"></i>Budget</div>
                                                <div class="ms-4">
                                                    <div class="text-bold text-title-filter text-grey">Price Per Night
                                                    </div>
                                                    <div class="">
                                                        <fieldset class="filter-price">
                                                            <div class="price-field">
                                                                <form id="formRange">
                                                                    @if(isset($c_from) || isset($cin_from) ||
                                                                    isset($cout_from) ||
                                                                    isset($a_from) || isset($k_from))
                                                                    <input type="hidden" name="province"
                                                                        value="{{ $c_from }}">
                                                                    <input type="hidden" name="ci"
                                                                        value="{{ $cin_from }}">
                                                                    <input type="hidden" name="co"
                                                                        value="{{ $cout_from }}">
                                                                    <input type="hidden" name="adult"
                                                                        value="{{ $a_from }}">
                                                                    <input type="hidden" name="kid"
                                                                        value="{{ $k_from }}">
                                                                    @else
                                                                    <input type="hidden" name="province" value="">
                                                                    <input type="hidden" name="ci" value="">
                                                                    <input type="hidden" name="co" value="">
                                                                    <input type="hidden" name="adult" value="">
                                                                    <input type="hidden" name="kid" value="">
                                                                    @endif
                                                                    @if(isset($r_from))
                                                                    <input type="hidden" name="ro"
                                                                        value="{{ $r_from }}">
                                                                    @elseif(isset($ro))
                                                                    <input type="hidden" name="ro" value="{{ $ro }}">
                                                                    @else
                                                                    <input type="hidden" name="ro" value="">
                                                                    @endif
                                                                    @if(isset($lower_from))
                                                                    <input type="range" min="0" max="10000"
                                                                        value="{{ $lower_from }}" id="lower"
                                                                        name="lower" onchange="changeRange(this.value)">
                                                                    @else
                                                                    <input type="range" min="0" max="10000" value="0"
                                                                        id="lower" name="lower"
                                                                        onchange="changeRange(this.value)">
                                                                    @endif
                                                                    @if(isset($upper_from))
                                                                    <input type="range" min="100" max="10000"
                                                                        value="{{ $upper_from }}" id="upper"
                                                                        name="upper" onchange="changeRange(this.value)">
                                                                    @else
                                                                    <input type="range" min="100" max="10000"
                                                                        value="10000" id="upper" name="upper"
                                                                        onchange="changeRange(this.value)">
                                                                    @endif
                                                                </form>
                                                            </div>
                                                            <div class="price-wrap">
                                                                <div class="price-container">
                                                                    <div class="price-wrap-1">
                                                                        <input id="one">
                                                                    </div>
                                                                </div>
                                                                <div class="price-container">
                                                                    <div class="price-wrap-2">
                                                                        <input id="two">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="vl-filter">
                                                <div class="text-orange text-filter"><i
                                                        class="fas fa-star me-2"></i>Stars Rating</div>
                                                <div class="ms-4 mt-2">
                                                    <form id="formStars">
                                                        @if(isset($c_from) || isset($cin_from) || isset($cout_from) ||
                                                        isset($a_from) || isset($k_from))
                                                        <input type="hidden" name="province" value="{{ $c_from }}">
                                                        <input type="hidden" name="ci" value="{{ $cin_from }}">
                                                        <input type="hidden" name="co" value="{{ $cout_from }}">
                                                        <input type="hidden" name="adult" value="{{ $a_from }}">
                                                        <input type="hidden" name="kid" value="{{ $k_from }}">
                                                        @else
                                                        <input type="hidden" name="province" value="">
                                                        <input type="hidden" name="ci" value="">
                                                        <input type="hidden" name="co" value="">
                                                        <input type="hidden" name="adult" value="">
                                                        <input type="hidden" name="kid" value="">
                                                        @endif
                                                        @if(isset($r_from))
                                                        <input type="hidden" name="ro" value="{{ $r_from }}">
                                                        @elseif(isset($ro))
                                                        <input type="hidden" name="ro" value="{{ $ro }}">
                                                        @else
                                                        <input type="hidden" name="ro" value="">
                                                        @endif
                                                        @if(isset($lower_from) || isset($upper_from))
                                                        <input type="hidden" name="lower" value="{{ $lower_from }}">
                                                        <input type="hidden" name="upper" value="{{ $upper_from }}">
                                                        @else
                                                        <input type="hidden" name="lower" value="">
                                                        <input type="hidden" name="upper" value="">
                                                        @endif
                                                        @if(isset($star5_from))
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star5"
                                                                name="star5" onclick="clickStars(this.value)"
                                                                value="{{ $star5_from }}" checked="checked">
                                                            <label class="form-check-label" for="flexCheckChecked1">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star5"
                                                                name="star5" onclick="clickStars(this.value)" value="5">
                                                            <label class="form-check-label" for="flexCheckChecked1">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @endif
                                                        @if (isset($star4_from))
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star4"
                                                                name="star4" onclick="clickStars(this.value)"
                                                                value="{{ $star4_from }}" checked="checked">
                                                            <label class="form-check-label" for="flexCheckChecked2">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star4"
                                                                name="star4" onclick="clickStars(this.value)" value="4">
                                                            <label class="form-check-label" for="flexCheckChecked2">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @endif
                                                        @if (isset($star3_from))
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star3"
                                                                name="star3" onclick="clickStars(this.value)"
                                                                value="{{ $star3_from }}" checked="checked">
                                                            <label class="form-check-label" for="flexCheckChecked3">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star3"
                                                                name="star3" onclick="clickStars(this.value)" value="3">
                                                            <label class="form-check-label" for="flexCheckChecked3">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @endif
                                                        @if (isset($star2_from))
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star2"
                                                                name="star2" onclick="clickStars(this.value)"
                                                                value="{{ $star2_from }}" checked="checked">
                                                            <label class="form-check-label" for="flexCheckChecked4">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star2"
                                                                name="star2" onclick="clickStars(this.value)" value="2">
                                                            <label class="form-check-label" for="flexCheckChecked4">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @endif
                                                        @if (isset($star1_from))
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star1"
                                                                name="star1" onclick="clickStars(this.value)"
                                                                value="{{ $star1_from }}" checked="checked">
                                                            <label class="form-check-label" for="flexCheckChecked5">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star1"
                                                                name="star1" onclick="clickStars(this.value)" value="1">
                                                            <label class="form-check-label" for="flexCheckChecked5">
                                                                <i class="fas fa-star text-orange text-medium"></i>
                                                            </label>
                                                        </div>
                                                        @endif
                                                        @if (isset($star0_from))
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star0"
                                                                name="star0" onclick="clickStars(this.value)"
                                                                value="{{ $star0_from }}" checked="checked">
                                                            <label class="form-check-label text-grey text-medium"
                                                                for="flexCheckChecked5">
                                                                No Rating
                                                            </label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="star0"
                                                                name="star0" onclick="clickStars(this.value)" value="0">
                                                            <label class="form-check-label text-grey text-medium"
                                                                for="flexCheckChecked5">
                                                                No Rating
                                                            </label>
                                                        </div>
                                                        @endif
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="vl-filter">
                                                <div class="text-orange text-filter"><i
                                                        class="fas fa-suitcase-rolling me-2"></i>Category</div>
                                                <div class="ms-4 mt-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked1">
                                                        <label class="form-check-label" for="flexCheckChecked1">Beach
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked2">
                                                        <label class="form-check-label" for="flexCheckChecked2">City
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked3">
                                                        <label class="form-check-label"
                                                            for="flexCheckChecked3">Entertainment
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked4">
                                                        <label class="form-check-label" for="flexCheckChecked4">Natural
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="vl-filter">
                                                <div class="text-orange text-filter"><i
                                                        class="fas fa-gem me-2"></i>Payment Options</div>
                                                <div class="ms-4 mt-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked1">
                                                        <label class="form-check-label text-grey text-medium"
                                                            for="flexCheckChecked1">Free Cancellation
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked2">
                                                        <label class="form-check-label text-grey text-medium"
                                                            for="flexCheckChecked2">Book Now,Pay Later
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked3">
                                                        <label class="form-check-label text-grey text-medium"
                                                            for="flexCheckChecked3">Pay at Hotel
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked4">
                                                        <label class="form-check-label  text-grey text-medium"
                                                            for="flexCheckChecked4">Pay Now
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked5">
                                                        <label class="form-check-label  text-grey text-medium"
                                                            for="flexCheckChecked5">Book without Credit Card
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="vl-filter">
                                                <div class="text-orange text-filter"><i
                                                        class="fas fa-map-pin me-2"></i>Distance to Center</div>
                                                <div class="ms-4 mt-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked1">
                                                        <label class="form-check-label text-grey text-medium"
                                                            for="flexCheckChecked1">Inside City Center
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked2">
                                                        <label class="form-check-label text-grey text-medium"
                                                            for="flexCheckChecked2"><i
                                                                class="fas fa-chevron-left me-1"></i>2 km to Center
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked3">
                                                        <label class="form-check-label text-grey text-medium"
                                                            for="flexCheckChecked3">2 - 5 km to Center
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked4">
                                                        <label class="form-check-label  text-grey text-medium"
                                                            for="flexCheckChecked4">5 - 10 km to Center
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked5">
                                                        <label class="form-check-label  text-grey text-medium"
                                                            for="flexCheckChecked5"><i
                                                                class="fas fa-chevron-right me-1"></i>5 km to Center
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn-grey"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn-search-booking">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-start">
                        <div class="for-destop">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="bread" href="{{url('index')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a class="bread"
                                            href="{{url('select-hotel')}}">*country*</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">*cities*</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="float-end ">
                        <div class="row g-1">
                            <div class="col-5">
                                <div class="text-sort-by">sort by :</div>
                            </div>
                            <div class="col-7">
                                <div class="dropdown">
                                    <button class="btn-sortby dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Best Match
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Best Match</a></li>
                                        <li><a class="dropdown-item" href="#">Popular Properties</a></li>
                                        <li><a class="dropdown-item" href="#">...</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" href="#">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <a href="{{url('select-rooms')}}">
                                <img src="{{asset('assets_frontend/images/cities%20(5).jpg')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="name-text">poolvilla</div>
                                        <div>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                        </div>
                                        <div class="text-blue text-tiny"><i
                                                class="fas fa-map-marker-alt me-1"></i>Location , Country
                                            <span>
                                                <a href="#" class="btn-link-map">show on map</a>
                                            </span>
                                        </div>
                                        <div class="text-green text-tiny">
                                            <span class="text-bold me-1">FREE</span>Cancellation
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="vl-left">
                                            <div class="row g-0 ">
                                                <div class="col-8">
                                                    <div class="text-grey text-review">Exceptional</div>
                                                    <div class="text-light-grey text-tiny">562 reviews</div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="point-badge">9.2</div>
                                                </div>
                                            </div>
                                            <div class="text-grey text-small mt-4 text-end">price per night as per as
                                            </div>
                                            <div class="text-light-grey text-tiny text-end">5,500</div>
                                            <div class="line-th-price"></div>
                                            <div class="text-price text-grey text-bold text-end mt-1 mb-4">THB<span
                                                    class="text-red">3,500</span></div>
                                            <a class="btn-select-room" href="{{url('select-rooms')}}">Select Room<span
                                                    class="fas fa-chevron-right text-orange arrow-select"></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" href="#">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <a href="{{url('select-rooms')}}">
                                <img src="{{asset('assets_frontend/images/cities%20(4).jpg')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="name-text">poolvilla</div>
                                        <div>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                        </div>
                                        <div class="text-blue text-tiny"><i
                                                class="fas fa-map-marker-alt me-1"></i>Location , Country
                                            <span>
                                                <a href="#" class="btn-link-map">show on map</a>
                                            </span>
                                        </div>
                                        <div class="text-green text-tiny">
                                            <span class="text-bold me-1">FREE</span>Cancellation
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="vl-left">
                                            <div class="row g-0 ">
                                                <div class="col-8">
                                                    <div class="text-grey text-review">Exceptional</div>
                                                    <div class="text-light-grey text-tiny">562 reviews</div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="point-badge">9.2</div>
                                                </div>
                                            </div>
                                            <div class="text-grey text-small mt-4 text-end">price per night as per as
                                            </div>
                                            <div class="text-light-grey text-tiny text-end">5,500</div>
                                            <div class="line-th-price"></div>
                                            <div class="text-price text-grey text-bold text-end mt-1 mb-4">THB<span
                                                    class="text-red">3,500</span></div>
                                            <a class="btn-select-room" href="{{url('select-rooms')}}">Select Room<span
                                                    class="fas fa-chevron-right text-orange arrow-select"></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" href="#">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <a href="select-rooms.php">
                                <img src="{{asset('assets_frontend/images/cities%20(3).jpg')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="name-text">poolvilla</div>
                                        <div>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                        </div>
                                        <div class="text-blue text-tiny"><i
                                                class="fas fa-map-marker-alt me-1"></i>Location , Country
                                            <span>
                                                <a href="#" class="btn-link-map">show on map</a>
                                            </span>
                                        </div>
                                        <div class="text-green text-tiny">
                                            <span class="text-bold me-1">FREE</span>Cancellation
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="vl-left">
                                            <div class="row g-0 ">
                                                <div class="col-8">
                                                    <div class="text-grey text-review">Exceptional</div>
                                                    <div class="text-light-grey text-tiny">562 reviews</div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="point-badge">9.2</div>
                                                </div>
                                            </div>
                                            <div class="text-grey text-small mt-4 text-end">price per night as per as
                                            </div>
                                            <div class="text-light-grey text-tiny text-end">5,500</div>
                                            <div class="line-th-price"></div>
                                            <div class="text-price text-grey text-bold text-end mt-1 mb-4">THB<span
                                                    class="text-red">3,500</span></div>
                                            <a class="btn-select-room" href="{{url('select-rooms')}}">Select Room<span
                                                    class="fas fa-chevron-right text-orange  arrow-select"></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($result as $key => $val)
                <div class="card mb-3" href="#">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <a href="{{url('select-rooms')}}">
                                <img src="{{asset('assets_frontend/images/cities%20(5).jpg')}}"
                                    class="img-fluid rounded-start" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="name-text">{{ $val->name }}</div>
                                        <div>
                                            @if ($val->star_rate == '5')
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            @elseif ($val->star_rate == '4')
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            @elseif ($val->star_rate == '3')
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            @elseif ($val->star_rate == '2')
                                            <i class="fas fa-star text-orange size-star"></i>
                                            <i class="fas fa-star text-orange size-star"></i>
                                            @elseif ($val->star_rate == '1')
                                            <i class="fas fa-star text-orange size-star"></i>
                                            @else
                                            @endif
                                        </div>
                                        <div class="text-blue text-tiny"><i
                                                class="fas fa-map-marker-alt me-1"></i>Location , {{ $val->country }}
                                            <span>
                                                <a href="#" class="btn-link-map">show on map</a>
                                            </span>
                                        </div>
                                        <div class="text-green text-tiny">
                                            <span class="text-bold me-1">FREE</span>Cancellation
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="vl-left">
                                            <div class="row g-0 ">
                                                <div class="col-8">
                                                    <div class="text-grey text-review">Exceptional</div>
                                                    <div class="text-light-grey text-tiny">562 reviews</div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="point-badge">9.2</div>
                                                </div>
                                            </div>
                                            <div class="text-grey text-small mt-4 text-end">price per night as per as
                                            </div>
                                            <div class="text-light-grey text-tiny text-end">5,500</div>
                                            <div class="line-th-price"></div>
                                            <div class="text-price text-grey text-bold text-end mt-1 mb-4">THB<span
                                                    class="text-red">3,500</span></div>
                                            <a class="btn-select-room" href="{{url('select-rooms')}}">Select Room<span
                                                    class="fas fa-chevron-right text-orange arrow-select"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="space-footer"></div>
    @include('frontend/inc_footer')
</body>

</html>

<script>
    var lowerSlider = document.querySelector('#lower');
    var upperSlider = document.querySelector('#upper');

    document.querySelector('#two').value = upperSlider.value;
    document.querySelector('#one').value = lowerSlider.value;

    var lowerVal = parseInt(lowerSlider.value);
    var upperVal = parseInt(upperSlider.value);

    upperSlider.oninput = function () {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);

        if (upperVal < lowerVal + 4) {
            lowerSlider.value = upperVal - 4;
            if (lowerVal == lowerSlider.min) {
                upperSlider.value = 4;
            }
        }
        document.querySelector('#two').value = this.value
    };

    lowerSlider.oninput = function () {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);
        if (lowerVal > upperVal - 4) {
            upperSlider.value = lowerVal + 4;
            if (upperVal == upperSlider.max) {
                lowerSlider.value = parseInt(upperSlider.max) - 4;
            }
        }
        document.querySelector('#one').value = this.value
    };

    $('#formRange').change(function changeRange(value) {

        document.getElementById("lower").innerHTML = value;
        document.getElementById("upper").innerHTML = value;
        var lower = document.getElementById('lower').value;
        var upper = document.getElementById('upper').value;
        console.log({
            lower: lower,
            upper: upper
        })
        document.getElementById('formRange').submit(); // SUB
        $.ajax({
            url: "{!! route('search.get') !!}",
            type: "GET",
            data: {
                lower: lower,
                upper: upper
            },
            success: function (response) {
                // console.log(lower);
                // console.log(upper);
                // alert('successful');
                // document.getElementById('div').innerHTML = response
                // $('#formRange').append(response);
            }
        });

    });

    $('#formStars').click(function clickStars(value) {

        document.getElementById("star5").innerHTML = value;
        document.getElementById("star4").innerHTML = value;
        document.getElementById("star3").innerHTML = value;
        document.getElementById("star2").innerHTML = value;
        document.getElementById("star1").innerHTML = value;
        document.getElementById("star0").innerHTML = value;
        var star5 = document.getElementById('star5').value;
        var star4 = document.getElementById('star4').value;
        var star3 = document.getElementById('star3').value;
        var star2 = document.getElementById('star2').value;
        var star1 = document.getElementById('star1').value;
        var star0 = document.getElementById('star0').value;
        console.log({
            star5: star5,
            star4: star4,
            star3: star3,
            star2: star2,
            star1: star1,
            star0: star0,
        })
        document.getElementById('formStars').submit(); // SUB
        $.ajax({
            url: "{!! route('search.get') !!}",
            type: "GET",
            data: {
                star5: star5,
                star4: star4,
                star3: star3,
                star2: star2,
                star1: star1,
                star0: star0,
            },
            success: function (response) {
                // console.log();
                // alert('successful');
                // document.getElementById('div').innerHTML = response
                // $('#formStars').append(response);
            }
        });

    });

    $('#formCategory').change(function clickCategory(value) {

        document.getElementById("category").innerHTML = value;
        var category = document.getElementById('category').value;
        console.log({
            category: category
        })
        document.getElementById('formCategory').submit(); // SUB
        $.ajax({
            url: "{!! route('search.get') !!}",
            type: "GET",
            data: {
                category: category
            },
            success: function (response) {
                // console.log(lower);
                // console.log(upper);
                // alert('successful');
                // document.getElementById('div').innerHTML = response
                // $('#formCategory').append(response);
            }
        });

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
