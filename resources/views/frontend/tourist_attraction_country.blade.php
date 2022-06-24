<!doctype html>
<html lang="th">
<head>      
    <title>Poolvilla</title>
        @include('frontend/inc_header')
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="js/owl.carousel.min.js"></script>
</head>
    <body>
 @include('frontend/inc_navbar')
       
        <div class="container">
             <div class="banner">
            <img src="{{asset('assets_frontend/images/place-banner2.jpg')}}" class="banner-index">
            <div class="centered_box">
                <div class="text-banner-country text-center">*Country*</div>
            </div>
        </div>
            <div class="clearfix">
                <div class="float-start">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="bread" href="{{url('index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a class="bread" href="{{url('tourist_attraction')}}">Tourist Attraction</a></li>
                            <li class="breadcrumb-item active" aria-current="page">*country*</li>
                        </ol>
                    </nav>  
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 none-mobile">
                    <div class="filter-badge"><i class="fas fa-filter me-2"></i>filter</div>
                    <div class="mt-4">
                                <div class="text-orange text-filter">Category</div>
                                <div class="ms-4 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="form-check-label" for="flexCheckChecked1">
                                            Landmarks
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                        <label class="form-check-label" for="flexCheckChecked2">
                                            Attractions
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                        <label class="form-check-label" for="flexCheckChecked3">
                                          Restaurant
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                        <label class="form-check-label" for="flexCheckChecked4">
                                            Activities
                                        </label>
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
                                            <div class="text-orange text-filter"><i class="fas fa-star me-2"></i>Stars Rating</div>
                                            <div class="ms-4 mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                                    <label class="form-check-label" for="flexCheckChecked1">
                                                        Landmarks
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                                    <label class="form-check-label" for="flexCheckChecked2">
                                                        Attractions
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
                                                    <label class="form-check-label" for="flexCheckChecked3">
                                                      Restaurant
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                                    <label class="form-check-label" for="flexCheckChecked4">
                                                        Activities
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
                    <div class="row">
                        <div class="col-6 mb-2">
                            <div class="frame-item box-destination">
                                <a href="{{url('tourist_attraction_detail')}}" class="">          
                                    <img src="{{asset('assets_frontend/images/1-place.jpg')}}" class="img-des">
                                    <div class="bottom-left">
                                        <p class="name-text text-white">Place</p>
                                        <p class="detail-text text-white">Cities , Country</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <div class="frame-item box-destination">
                                <a href="{{url('tourist_attraction_detail')}}" class="">                
                                    <img src="{{asset('assets_frontend/images/2-place.jpg')}}" class="img-des">
                                    <div class="bottom-left">
                                        <p class="name-text text-white">Place</p>
                                        <p class="detail-text text-white">Cities , Country</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                        <div class="frame-item box-destination">
                            <a href="{{url('tourist_attraction_detail')}}" class="">              
                                <img src="{{asset('assets_frontend/images/3-place.jpg')}}" class="img-des">
                                    <div class="bottom-left">
                                        <p class="name-text text-white">Place</p>
                                        <p class="detail-text text-white">Cities , Country</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <div class="frame-item box-destination">
                                <a href="{{url('tourist_attraction_detail')}}" class="">              
                                    <img src="{{asset('assets_frontend/images/4-place.jpg')}}" class="img-des">
                                    <div class="bottom-left">
                                        <p class="name-text text-white">Place</p>
                                        <p class="detail-text text-white">Cities , Country</p>
                                    </div>
                                </a>
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