<!doctype html>
<html lang="th">
<head>      
    <title>Poolvilla</title>
    @include('frontend/inc_header')
    <link rel="stylesheet" href="{{asset('assets_frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets_frontend/css/owl.theme.default.min.css')}}">
<script src="js/owl.carousel.min.js"></script>
</head>
<body >
    @include('frontend/inc_navbar')
    <div class="bg-orange-light2">
        <div class="row g-1">
            <div class="col-lg-2 col-12">
                <input class="form-control emptytwo orange" type="text" id="iconified" placeholder="&#xF002;  *country*"aria-   label="default input example">
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
                                        <input class="form-control orange-check check-in-out"  id="check-in" type="date" >
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
                                    <input class="form-control orange-check check-in-out"  id="check-in" type="date" >
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
                                                  <input class="input-number " id=demoInput type=number min=0 max=110 placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row g-2">
                                                <label for="inputPassword" class="col-4 text-tiny text-orange">Kid</label>
                                                <div class="col-auto">
                                                  <input class="input-number" id=demoInput type=number min=0 max=110  placeholder="0" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row g-2">
                                                <label for="inputPassword" class="col-4 text-tiny text-orange">Room</label>
                                                <div class="col-auto">
                                                  <input class="input-number" id=demoInput type=number min=0 max=110  placeholder="0">
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
    <div class="bg-orange">
        <div class="clearfix">
            <div class="float-end width-search">
                <input class="form-control empty orange" type="text" id="iconified" placeholder="&#xF002;  Where  are  you  looking for ?"aria-label="default input example">
            </div>
        </div>
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
                                            <input type="range" min="0" max="10000" value="0" id="lower">
                                            <input type="range" min="100" max="10000" value="10000" id="upper">
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
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label" for="flexCheckChecked1">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label" for="flexCheckChecked2">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label" for="flexCheckChecked3">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label" for="flexCheckChecked4">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label" for="flexCheckChecked5">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked5">
                                       No Rating
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-suitcase-rolling me-2"></i>Category</div>
                            <div class="ms-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label" for="flexCheckChecked1">Beach
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label" for="flexCheckChecked2">City
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label" for="flexCheckChecked3">Entertainment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label" for="flexCheckChecked4">Natural
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-gem me-2"></i>Payment Options</div>
                            <div class="ms-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked1">Free Cancellation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked2">Book Now,Pay Later
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked3">Pay at Hotel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked4">Pay Now
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked5">Book without Credit Card
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-map-pin me-2"></i>Distance to Center</div>
                            <div class="ms-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked1">Inside City Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked2"><i class="fas fa-chevron-left me-1"></i>2 km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked3">2 - 5 km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked4">5 - 10 km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked5"><i class="fas fa-chevron-right me-1"></i>5 km to Center
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
                            <button type="button" class="filter-badge" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-filter me-2" ></i>filter</button>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-tag me-2"></i>Budget</div>
                            <div class="ms-4">
                                <div class="text-bold text-title-filter text-grey">Price Per Night</div>
                                <div class="">
                                    <fieldset class="filter-price">
                                        <div class="price-field">
                                           <input type="range" min="0" max="10000" value="0" id="lower">
                                            <input type="range" min="100" max="10000" value="10000" id="upper">
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
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label" for="flexCheckChecked1">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label" for="flexCheckChecked2">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label" for="flexCheckChecked3">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label" for="flexCheckChecked4">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label" for="flexCheckChecked5">
                                        <i class="fas fa-star text-orange text-medium"></i>
                                    </label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked5">
                                       No Rating
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-suitcase-rolling me-2"></i>Category</div>
                            <div class="ms-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label" for="flexCheckChecked1">Beach
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label" for="flexCheckChecked2">City
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label" for="flexCheckChecked3">Entertainment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label" for="flexCheckChecked4">Natural
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-gem me-2"></i>Payment Options</div>
                            <div class="ms-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked1">Free Cancellation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked2">Book Now,Pay Later
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked3">Pay at Hotel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked4">Pay Now
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked5">Book without Credit Card
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="vl-filter">
                            <div class="text-orange text-filter"><i class="fas fa-map-pin me-2"></i>Distance to Center</div>
                            <div class="ms-4 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked1">Inside City Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked2"><i class="fas fa-chevron-left me-1"></i>2 km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                    <label class="form-check-label text-grey text-medium" for="flexCheckChecked3">2 - 5 km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked4">5 - 10 km to Center
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked5">
                                    <label class="form-check-label  text-grey text-medium" for="flexCheckChecked5"><i class="fas fa-chevron-right me-1"></i>5 km to Center
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                              </div>
                              <div class="modal-footer">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn-grey" data-bs-dismiss="modal">Cancel</button>
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
                                    <li class="breadcrumb-item"><a class="bread" href="{{url('select-hotel')}}">*country*</a></li>
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
                                    <button class="btn-sortby dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <img src="{{asset('assets_frontend/images/cities%20(5).jpg')}}" class="img-fluid rounded-start" alt="...">
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
                                        <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country
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
                                            <div class="text-grey text-small mt-4 text-end">price per night as per as</div>
                                            <div class="text-light-grey text-tiny text-end">5,500</div>
                                            <div class="line-th-price"></div>
                                            <div class="text-price text-grey text-bold text-end mt-1 mb-4">THB<span class="text-red">3,500</span></div>
                                            <a class="btn-select-room" href="{{url('select-rooms')}}">Select Room<span class="fas fa-chevron-right text-orange arrow-select"></span></a>
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
                                <img src="{{asset('assets_frontend/images/cities%20(4).jpg')}}" class="img-fluid rounded-start" alt="...">
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
                                        <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country
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
                                            <div class="text-grey text-small mt-4 text-end">price per night as per as</div>
                                            <div class="text-light-grey text-tiny text-end">5,500</div>
                                            <div class="line-th-price"></div>
                                            <div class="text-price text-grey text-bold text-end mt-1 mb-4">THB<span class="text-red">3,500</span></div>
                                            <a class="btn-select-room" href="{{url('select-rooms')}}">Select Room<span class="fas fa-chevron-right text-orange arrow-select"></span></a>
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
                                <img src="{{asset('assets_frontend/images/cities%20(3).jpg')}}" class="img-fluid rounded-start" alt="...">
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
                                        <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country
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
                                            <div class="text-grey text-small mt-4 text-end">price per night as per as</div>
                                            <div class="text-light-grey text-tiny text-end">5,500</div>
                                            <div class="line-th-price"></div>
                                            <div class="text-price text-grey text-bold text-end mt-1 mb-4">THB<span class="text-red">3,500</span></div>
                                            <a class="btn-select-room" href="{{url('select-rooms')}}">Select Room<span class="fas fa-chevron-right text-orange  arrow-select"></span></a>
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
    <div class="space-footer"></div>
    @include('frontend/inc_footer')
</body>
</html>

<script>
    var lowerSlider = document.querySelector('#lower');
var  upperSlider = document.querySelector('#upper');

document.querySelector('#two').value=upperSlider.value;
document.querySelector('#one').value=lowerSlider.value;

var  lowerVal = parseInt(lowerSlider.value);
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
    document.querySelector('#two').value=this.value
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
    document.querySelector('#one').value=this.value
}; 
</script>