<!doctype html>
<html lang="th">

<head>
    <title>Poolvilla</title>
    <?php require('inc_header.php'); ?>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="js/owl.carousel.min.js"></script>
</head>

<body>
    <?php require('inc_navbar.php'); ?>
    <div class="bg-orange-light2">
        <div class="row g-1">
            <div class="col-lg-2 col-12">
                <input class="form-control emptytwo orange" type="text" id="iconified" placeholder="&#xF002;  *country*" aria- label="default input example">
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
                                        <input class="form-control orange-check check-in-out" id="datepicker" type="text" placeholder="mm/dd/yyyy">
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
                                    <input class="form-control orange-check check-in-out" id="datepicker2" type="text" placeholder="mm/dd/yyyy">
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
                                                <input class="input-number border-0 text-center field " placeholder="" type="text" id="1" value="1">
                                                <button class="btn add" type="button" id="add">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row g-2">
                                        <label for="inputPassword" class="col-4 text-tiny text-orange text-center">Kid</label>
                                        <div class="col-8 mt-0">
                                            <div class="input-group input-number">
                                                <button class="btn sub" type="button" id="sub">-</button>
                                                <input class="input-number border-0 text-center field " placeholder="" type="text" id="1" value="1">
                                                <button class="btn add" type="button" id="add">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row g-2">
                                        <label for="inputPassword" class="col-4 text-tiny text-orange">Room</label>
                                        <div class="col-8 mt-0">
                                            <div class="input-group input-number">
                                                <button class="btn sub" type="button" id="sub">-</button>
                                                <input class="input-number border-0 text-center field " placeholder="" type="text" id="1" value="1">
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
            <div class="col-lg-2 col-12">
                <a class="btn-search two" href="#">search</a>
            </div>
        </div>
    </div>
    <div class="bg-orange">
        <!-- <div class="clearfix">
            <div class="float-end width-search">
                <input class="form-control empty orange" type="text" id="iconified" placeholder="&#xF002;  Where  are  you  looking for ?" aria-label="default input example">
            </div>
        </div> -->
    </div>
    <div class="container">
        <div class="clearfix">
            <div class="float-start">
                <div class="for-destop">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="bread" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="bread" href="select-hotel.php">*country*</a></li>
                            <li class="breadcrumb-item"><a class="bread">*cities*</a></li>
                            <li class="breadcrumb-item active" aria-current="page">pool villa</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="float-end">
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
            <div class="col-sm-9">
                <div class="row g-1">
                    <div class="col-sm-7">
                        <div class="img-a">
                            <img src="images/cities%20(1).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="img-b">
                            <img src="images/room%20(2).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                        </div>
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="img-c">
                                    <img src="images/room%20(3).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="img-c text-on">
                                    <img src="images/rooma%20(1).jpg" style="width:100%" class="img-see-more" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                                    <div class="centered">See more photo</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="popup-img-head" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content popup-img">
                            <div class="modal-body">
                                <div class="clearfix mb-2">
                                    <div class="float-end">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/cities%20(1).jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/room%20(2).jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/room%20(3).jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/rooma%20(1).jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/rooma%20(2).jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/rooma%20(3).jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/roomb%20(1).jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/roomb%20(2).jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <div class="text-tiny text-grey text-end mt-1">รูปภาพทั้งหมด (8)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-white">
                    <div class="mt-3">
                        <div class="row mb-2">
                            <div class="col-auto">
                                <div class="text-title text-bold text-grey">poolvilla</div>
                            </div>
                            <div class="col-auto mt-2">
                                <i class="fas fa-star text-orange text-tiny"></i>
                                <i class="fas fa-star text-orange text-tiny"></i>
                                <i class="fas fa-star text-orange text-tiny"></i>
                                <i class="fas fa-star text-orange text-tiny"></i>
                                <i class="fas fa-star text-orange text-tiny"></i>
                            </div>
                        </div>
                        <div class="text-light-grey text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country
                            <span><a href="https://www.google.com/maps" target="_blank" class="btn-link-map">show on map</a></span>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="name-text text-bold text-grey">Space & Rooms</div>
                        <div class="text-grey text-tiny">Entire villa</div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="text-grey text-tiny">Max 4 guest</div>
                            </div>
                            <div class="col-auto">
                                <div class="vl-left">
                                    <div class="text-grey text-tiny">2&nbsp;bedrooms</div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="vl-left">
                                    <div class="text-grey text-tiny">2&nbsp;bathrooms</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="row g-1">
                            <div class="col-sm-2 col-4 ">
                                <div class="box-facilities">
                                    <div class="text-orange icon-box-facilities"><i class="fas fa-wifi"></i></div>
                                    <div class="text-orange text-box-facilities">Free WIFI</div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-4 ">
                                <div class="box-facilities">
                                    <div class="text-orange icon-box-facilities"><i class="fas fa-shuttle-van"></i></div>
                                    <div class="text-orange text-box-facilities">Airport Transfer</div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-4 ">
                                <div class="box-facilities">
                                    <div class="text-orange icon-box-facilities"><i class="fas fa-swimming-pool"></i></div>
                                    <div class="text-orange text-box-facilities">Private Pool</div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-4 ">
                                <div class="box-facilities">
                                    <div class="text-orange icon-box-facilities"><i class="fas fa-smoking"></i></div>
                                    <div class="text-orange text-box-facilities">Smorking Area</div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-4 ">
                                <div class="box-facilities">
                                    <div class="text-orange icon-box-facilities"><i class="fas fa-car"></i></div>
                                    <div class="text-orange text-box-facilities">Car Park</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="box-white">
                    <div class="row g-1">
                        <div class="col-3">
                            <div class="point-badge">9.2</div>
                        </div>
                        <div class="col-9">
                            <div class="text-grey text-review">Exceptional</div>
                            <div class="text-light-grey text-tiny">562 reviews</div>
                        </div>
                    </div>
                    <div class="vl-top-book">
                        <a href="https://www.google.com/maps" target="_blank">
                            <img class="map w-100" src="images/map.jpg">
                        </a>
                        <div class="name-text text-bold text-grey mt-1">Area info</div>
                        <div class="text-tiny text-bold text-grey mt-1"><i class="fas fa-walking me-2"></i>near by landmarks</div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1">location</div>
                            </div>
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1 text-end">100m.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1">location</div>
                            </div>
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1 text-end">100m.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1">location</div>
                            </div>
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1 text-end">100m.</div>
                            </div>
                        </div>
                        <div class="text-tiny text-bold text-grey mt-1"><i class="fas fa-award me-2"></i>population landmarks</div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1">location</div>
                            </div>
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1 text-end">100m.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1">location</div>
                            </div>
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1 text-end">100m.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1">location</div>
                            </div>
                            <div class="col-6">
                                <div class="text-tiny text-light-grey mt-1 text-end">100m.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-white">
            <div class="mt-2">
                <div class="name-text text-bold text-grey">Select your Room</div>
                <div class="text-grey text-tiny">3 rooms type</div>
                <div class="box-grey my-2">
                    <div class="name-text text-bold text-grey">Rooms Type A</div>
                    <div class="row g-2">
                        <div class="col-sm-3">
                            <img src="images/rooma%20(1).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-room1">
                            <div class="row g-2 mt-1">
                                <div class="col-6">
                                    <img src="images/rooma%20(2).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-room1">
                                </div>
                                <div class="col-6">
                                    <img src="images/rooma%20(3).jpg " style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-room1">
                                </div>
                            </div>
                            <div class="text-blue text-tiny mt-2" data-bs-toggle="modal" data-bs-target="#popup-img-room1">see more photo</div>
                            <!-- Modal -->
                            <div class="modal fade" id="popup-img-room1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content popup-img">
                                        <div class="modal-body">
                                            <div class="clearfix mb-2">
                                                <div class="float-end">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                            </div>
                                            <div id="carousel-room1" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="images/rooma%20(1).jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/rooma%20(2).jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/rooma%20(3).jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/rooma%20(4).jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-room1" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-room1" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>

                                            <div class="text-tiny text-grey text-end mt-1">รูปภาพทั้งหมด (4)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="text-light-grey text-tiny"><i class="fas fa-home me-2"></i>Room size: 20m x 20m</div>
                                <div class="text-light-grey text-tiny"><i class="fas fa-bed me-2"></i>1 king bed & 1 queen bed</div>
                                <div class="text-light-grey text-tiny"><i class="fas fa-swimming-pool me-2"></i>Private pool</div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="none-mobile">
                                <div class="row g-1 ">
                                    <div class="col-sm-6">
                                        <div class="row g-1">
                                            <div class="col-7">
                                                <div class="text-tiny text-bold text-grey">Benefit</div>
                                            </div>
                                            <div class="col-5">
                                                <div class="text-tiny text-bold text-grey">Sleep</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row g-1">
                                            <div class="col-4">
                                                <div class="text-tiny text-bold text-grey">Price per night</div>
                                            </div>
                                            <div class="col-2">
                                                <div class="text-tiny text-bold text-grey">Rooms</div>
                                            </div>
                                            <div class="col-6"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-white-detail ">
                                    <div class="row g-1">
                                        <div class="col-sm-6">
                                            <div class="row g-1">
                                                <div class="col-7">
                                                    <div class="text-tiny text-bold text-light-grey">Your price includes</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Beakfast for 4</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Free WIFI</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Cancellation policy</div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="vl-left facility">
                                                        <div class="text-tiny text-light-grey"><i class="fas fa-male text-small mx-2"></i>Adults X 4</div>
                                                        <div class="text-tiny text-light-grey"><i class="fas fa-child text-small mx-2"></i>Kids X 2</div>
                                                        <div class="text-small text-light-grey text-center">2 kids 4 - 10 years stay</div>
                                                        <div class="text-small text-green text-center">FREE</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row g-1">
                                                <div class="col-4">
                                                    <div class="vl-left facility">
                                                        <div class="box-save-red">Save 25%</div>
                                                        <div class="text-end">
                                                            <div class="text-light-grey text-small text-end">5,500</div>
                                                            <div class="line-th-price-room"></div>
                                                            <div class="text-tiny text-grey text-bold text-end mt-1 mb-4">THB<span class="text-red">3,500</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="vl-left facility">
                                                        <input class="input-number-room" id=demoInput type=number min=0 max=110 placeholder="1">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="vl-left facility">
                                                        <a href="booking-1.php" class="btn-book">Book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="for-mobile">
                                <div class="box-white-detail ">
                                    <div class="row g-1">
                                        <div class="col-sm-6">
                                            <div class="row g-1">
                                                <div class="col-sm-7">
                                                    <div class="text-tiny text-bold text-grey">Benefit</div>
                                                    <div class="text-tiny text-bold text-light-grey">Your price includes</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Beakfast for 4</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Free WIFI</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Cancellation policy</div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="text-tiny text-bold text-grey">Sleep</div>
                                                    <div class="">
                                                        <div class="text-tiny text-light-grey"><i class="fas fa-male text-small mx-2"></i>Adults X 4</div>
                                                        <div class="text-tiny text-light-grey"><i class="fas fa-child text-small mx-2"></i>Kids X 2</div>
                                                        <div class="text-small text-light-grey">2 kids 4 - 10 years stay</div>
                                                        <div class="text-small text-green ">FREE</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row g-1">
                                                <div class="col-sm-4 col-6">
                                                    <div class="">
                                                        <div class="text-tiny text-bold text-grey">Price per night</div>
                                                        <div class="box-save-red">Save 25%</div>
                                                        <div class="text-end">
                                                            <div class="text-light-grey text-small text-end">5,500</div>
                                                            <div class="line-th-price-room"></div>
                                                            <div class="text-tiny text-grey text-bold text-end mt-1 mb-4">THB<span class="text-red">3,500</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-6">
                                                    <div class="vl-left facility">
                                                        <div class="text-tiny text-bold text-grey">Rooms</div>
                                                        <input class="input-number-room" id=demoInput type=number min=0 max=110 placeholder="1">
                                                    </div>
                                                </div>
                                                <div class="col-sm6">
                                                    <div class="">
                                                        <a href="booking-1.php" class="btn-book">Book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-white-detail mt-2">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne1">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                                Room Facilities
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row g-2">
                                                    <div class="col-sm-6">
                                                        <div class="text-tiny text-bold text-grey">Bathroom and toiletries</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/hair-dryer.png" class="icon-facility me-2">Hair dryer</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/bath-tub.png" class="icon-facility me-2">Bathtub</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/towel.png" class="icon-facility me-2">Towels</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/skincare.png" class="icon-facility me-2">Toiletries</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/shower.png" class="icon-facility me-2">Shower</div>
                                                            </div>
                                                        </div>
                                                        <div class="text-tiny text-bold text-grey  mt-2">Entertainment</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/television.png" class="icon-facility me-2">TV</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/wifi.png" class="icon-facility me-2">Free Wi-Fi</div>
                                                            </div>
                                                        </div>
                                                        <div class="text-tiny text-bold text-grey  mt-2">Comforts</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/air-conditioner.png" class="icon-facility me-2">Air conditioner</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/alarm-clock.png" class="icon-facility me-2">Alarm clock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="text-tiny text-bold text-grey">Dining,drinking and snacking</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/water-drop.png" class="icon-facility me-2">Free bottle water</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/coffee-cup.png" class="icon-facility me-2">Complimentary tea</div>

                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/refrigerator.png" class="icon-facility me-2">Refrigerator</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/oven.png" class="icon-facility me-2">Kitchen</div>
                                                            </div>
                                                        </div>
                                                        <div class="text-tiny text-bold text-grey  mt-2">Layout and furnishings</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/desk-chair.png" class="icon-facility me-2">Desk</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/sofa.png" class="icon-facility me-2">Seating area</div>
                                                            </div>
                                                        </div>
                                                        <div class="text-tiny text-bold text-grey  mt-2">Clothing and laundry</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/closet.png" class="icon-facility me-2">Closet</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/iron.png" class="icon-facility me-2">Ironing facilies</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/hanger.png" class="icon-facility me-2">Clothes rack</div>
                                                            </div>
                                                        </div>

                                                        <div class="text-tiny text-bold text-grey  mt-2">Safety and security feathers</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/safe-box.png" class="icon-facility me-2">In-rooms safe box</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/first-aid-kit.png" class="icon-facility me-2">Firts-aid kit</div>
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
                <div class="box-grey my-2">
                    <div class="name-text text-bold text-grey">Rooms Type B</div>
                    <div class="row g-2">
                        <div class="col-sm-3">
                            <img src="images/roomb%20(3).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-room2">
                            <div class="row g-2 mt-1">
                                <div class="col-6">
                                    <img src="images/roomb%20(2).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-room2">
                                </div>
                                <div class="col-6">
                                    <img src="images/roomb%20(4).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-room2">
                                </div>
                            </div>
                            <div class="text-blue text-tiny mt-2" data-bs-toggle="modal" data-bs-target="#popup-img-room2">see more photo</div>
                            <!-- Modal -->
                            <div class="modal fade" id="popup-img-room2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content popup-img">
                                        <div class="modal-body">
                                            <div class="clearfix mb-2">
                                                <div class="float-end">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                            </div>
                                            <div id="carousel-room2" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="images/roomb%20(3).jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/rooma%20(2).jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/roomb%20(1).jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/roomb%20(4).jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-room2" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-room2" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>

                                            <div class="text-tiny text-grey text-end mt-1">รูปภาพทั้งหมด (4)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="text-light-grey text-tiny"><i class="fas fa-home me-2"></i>Room size: 20m x 20m</div>
                                <div class="text-light-grey text-tiny"><i class="fas fa-bed me-2"></i>1 king bed & 1 queen bed</div>
                                <div class="text-light-grey text-tiny"><i class="fas fa-swimming-pool me-2"></i>Private pool</div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="none-mobile">
                                <div class="row g-1">
                                    <div class="col-sm-6">
                                        <div class="row g-1">
                                            <div class="col-7">
                                                <div class="text-tiny text-bold text-grey">Benefit</div>
                                            </div>
                                            <div class="col-5">
                                                <div class="text-tiny text-bold text-grey">Sleep</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row g-1">
                                            <div class="col-4">
                                                <div class="text-tiny text-bold text-grey">Price per night</div>
                                            </div>
                                            <div class="col-2">
                                                <div class="text-tiny text-bold text-grey">Rooms</div>
                                            </div>
                                            <div class="col-6"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-white-detail">
                                    <div class="row g-1">
                                        <div class="col-sm-6">
                                            <div class="row g-1">
                                                <div class="col-7">
                                                    <div class="text-tiny text-bold text-light-grey">Your price includes</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Beakfast for 4</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Free WIFI</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Cancellation policy</div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="vl-left facility">
                                                        <div class="text-tiny text-light-grey"><i class="fas fa-male text-small mx-2"></i>Adults X 4</div>
                                                        <div class="text-tiny text-light-grey"><i class="fas fa-child text-small mx-2"></i>Kids X 2</div>
                                                        <div class="text-small text-light-grey text-center">2 kids 4 - 10 years stay</div>
                                                        <div class="text-small text-green text-center">FREE</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row g-1">
                                                <div class="col-4">
                                                    <div class="vl-left facility">
                                                        <div class="box-save-red">Save 25%</div>
                                                        <div class="text-end">
                                                            <div class="text-light-grey text-small text-end">5,500</div>
                                                            <div class="line-th-price-room"></div>
                                                            <div class="text-tiny text-grey text-bold text-end mt-1 mb-4">THB<span class="text-red">3,500</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="vl-left facility">
                                                        <input class="input-number-room" id=demoInput type=number min=0 max=110 placeholder="1">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="vl-left facility">
                                                        <a href="booking-1.php" class="btn-book">Book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="for-mobile">
                                <div class="box-white-detail ">
                                    <div class="row g-1">
                                        <div class="col-sm-6">
                                            <div class="row g-1">
                                                <div class="col-sm-7">
                                                    <div class="text-tiny text-bold text-grey">Benefit</div>
                                                    <div class="text-tiny text-bold text-light-grey">Your price includes</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Beakfast for 4</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Free WIFI</div>
                                                    <div class="text-tiny text-light-grey"><i class="fas fa-circle text-green text-small mx-2"></i>Cancellation policy</div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="text-tiny text-bold text-grey">Sleep</div>
                                                    <div class="">
                                                        <div class="text-tiny text-light-grey"><i class="fas fa-male text-small mx-2"></i>Adults X 4</div>
                                                        <div class="text-tiny text-light-grey"><i class="fas fa-child text-small mx-2"></i>Kids X 2</div>
                                                        <div class="text-small text-light-grey">2 kids 4 - 10 years stay</div>
                                                        <div class="text-small text-green">FREE</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row g-1">
                                                <div class="col-sm-4 col-6">
                                                    <div class="">
                                                        <div class="text-tiny text-bold text-grey">Price per night</div>
                                                        <div class="box-save-red">Save 25%</div>
                                                        <div class="text-end">
                                                            <div class="text-light-grey text-small text-end">5,500</div>
                                                            <div class="line-th-price-room"></div>
                                                            <div class="text-tiny text-grey text-bold text-end mt-1 mb-4">THB<span class="text-red">3,500</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-6">
                                                    <div class="vl-left facility">
                                                        <div class="text-tiny text-bold text-grey">Rooms</div>
                                                        <input class="input-number-room" id=demoInput type=number min=0 max=110 placeholder="1">
                                                    </div>
                                                </div>
                                                <div class="col-sm6">
                                                    <div class="">
                                                        <a href="booking-1.php" class="btn-book">Book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-white-detail mt-2">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne2">
                                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                Room Facilities
                                            </button>
                                        </h2>
                                        <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row g-2">
                                                    <div class="col-sm-6">
                                                        <div class="text-tiny text-bold text-grey">Bathroom and toiletries</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/hair-dryer.png" class="icon-facility me-2">Hair dryer</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/bath-tub.png" class="icon-facility me-2">Bathtub</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/towel.png" class="icon-facility me-2">Towels</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/skincare.png" class="icon-facility me-2">Toiletries</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/shower.png" class="icon-facility me-2">Shower</div>
                                                            </div>
                                                        </div>
                                                        <div class="text-tiny text-bold text-grey  mt-2">Entertainment</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/television.png" class="icon-facility me-2">TV</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/wifi.png" class="icon-facility me-2">Free Wi-Fi</div>
                                                            </div>
                                                        </div>
                                                        <div class="text-tiny text-bold text-grey  mt-2">Comforts</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/air-conditioner.png" class="icon-facility me-2">Air conditioner</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/alarm-clock.png" class="icon-facility me-2">Alarm clock</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="text-tiny text-bold text-grey">Dining,drinking and snacking</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/water-drop.png" class="icon-facility me-2">Free bottle water</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/coffee-cup.png" class="icon-facility me-2">Complimentary tea</div>

                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/refrigerator.png" class="icon-facility me-2">Refrigerator</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/oven.png" class="icon-facility me-2">Kitchen</div>
                                                            </div>
                                                        </div>
                                                        <div class="text-tiny text-bold text-grey  mt-2">Layout and furnishings</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/desk-chair.png" class="icon-facility me-2">Desk</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/sofa.png" class="icon-facility me-2">Seating area</div>
                                                            </div>
                                                        </div>
                                                        <div class="text-tiny text-bold text-grey  mt-2">Clothing and laundry</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/closet.png" class="icon-facility me-2">Closet</div>
                                                                <div class="text-small text-light-grey my-1"><img src="images/iron.png" class="icon-facility me-2">Ironing facilies</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/hanger.png" class="icon-facility me-2">Clothes rack</div>
                                                            </div>
                                                        </div>

                                                        <div class="text-tiny text-bold text-grey  mt-2">Safety and security feathers</div>
                                                        <div class="row g-2">
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/safe-box.png" class="icon-facility me-2">In-rooms safe box</div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="text-small text-light-grey my-1"><img src="images/first-aid-kit.png" class="icon-facility me-2">Firts-aid kit</div>
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
            </div>
            <div class="name-text text-bold text-grey my-3">Guest review</div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="reviewimg-box">
                        <div class="fitter-review">
                            <img src="images/4.2-place.jpg" class="w-100">
                        </div>
                        <div class="review-text">
                            <p class="name-text text-white">poolvilla</p>
                            <p class="detail-text text-white">cities , country</p>
                            <p class="card-text text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="review-text-name">
                            <p class="reviews-customer mt-3">Miss A</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="reviewimg-box">
                        <div class="fitter-review">
                            <img src="images/3-place.jpg" class="w-100">
                        </div>
                        <div class="review-text">
                            <p class="name-text text-white">poolvilla</p>
                            <p class="detail-text text-white">cities , country</p>
                            <p class="card-text text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="review-text-name">
                            <p class="reviews-customer mt-3">Miss A</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="reviewimg-box">
                        <div class="fitter-review">
                            <img src="images/recomment%20(1).jpg" class="w-100">
                        </div>
                        <div class="review-text">
                            <p class="name-text text-white">poolvilla</p>
                            <p class="detail-text text-white">cities , country</p>
                            <p class="card-text text-white mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="review-text-name">
                            <p class="reviews-customer mt-3">Miss A</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix mt-2">
                <div class="float-end">
                    <a href="review_hotel.php" class="btn-line-orange">Read all reviews</a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6">
                    <img src="images/room%20(3).jpg" class="w-100">
                </div>
                <div class="col-sm-6">
                    <div class="name-text text-bold text-grey my-3">More about poolvilla</div>
                    <div class="text-tiny text-grey my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus. Maecenas aliquet maximus dolor quis rutrum. Maecenas rutrum eros ac leo rhoncus, fringilla efficitur nibh ultrices. Suspendisse potenti. Duis aliquam nisl et elit facilisis, ac imperdiet ex tempor. Praesent egestas lobortis massa. Nullam velit lorem, luctus et metus sed, semper porttitor nunc. Vivamus ullamcorper leo id ipsum dictum suscipit eget ac dui. Sed quam nunc, fringilla eu pulvinar vel, lobortis quis turpis. Pellentesque semper dui ut lorem venenatis, ac fringilla sapien semper. Vivamus semper laoreet facilisis.</div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-7">
                    <!--accordion-->
                    <div class="name-text text-bold text-grey my-3">Frequently Asked Questions</div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button faq collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <i class="far fa-question-circle text-orange me-2"></i>FAQ#1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus. Maecenas aliquet maximus dolor quis rutrum. Maecenas rutrum eros ac leo rhoncus, fringilla efficitur nibh ultrices. Suspendisse potenti. Duis aliquam nisl et elit facilisis, ac imperdiet ex tempor. Praesent egestas lobortis massa.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button faq  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <i class="far fa-question-circle text-orange me-2"></i>FAQ#2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus. Maecenas aliquet maximus dolor quis rutrum. Maecenas rutrum eros ac leo rhoncus, fringilla efficitur nibh ultrices. Suspendisse potenti. Duis aliquam nisl et elit facilisis, ac imperdiet ex tempor. Praesent egestas lobortis massa.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button faq  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <i class="far fa-question-circle text-orange me-2"></i>FAQ#3
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus. Maecenas aliquet maximus dolor quis rutrum. Maecenas rutrum eros ac leo rhoncus, fringilla efficitur nibh ultrices. Suspendisse potenti. Duis aliquam nisl et elit facilisis, ac imperdiet ex tempor. Praesent egestas lobortis massa.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head-text-index">Based on properties you've viewed, you might like</div>
            <div class="line-bottom-head-text"></div>
            <!-- Recommend  slide -->
            <div class="">
                <div class="owl-carousel slide-carousel owl-theme  recommend">
                    <a class="" href="select-rooms.php">
                        <div class="card">
                            <div class="img-rec">
                                <img src="images/recomment%20(1).jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="name-text">poolvilla</p>
                                <p class="detail-text">cities , country</p>
                                <div class="row">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="" href="select-rooms.php">
                        <div class="card">
                            <div class="img-rec">
                                <img src="images/recomment%20(2).jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="name-text">poolvilla</p>
                                <p class="detail-text">cities , country</p>
                                <div class="row">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="" href="select-rooms.php">
                        <div class="card">
                            <div class="img-rec">
                                <img src="images/recomment%20(3).jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="name-text">poolvilla</p>
                                <p class="detail-text">cities , country</p>
                                <div class="row">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="" href="select-rooms.php">
                        <div class="card">
                            <div class="img-rec">
                                <img src="images/recomment%20(4).jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="name-text">poolvilla</p>
                                <p class="detail-text">cities , country</p>
                                <div class="row">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="star-rating">
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end of Recommend slide -->
        </div>
    </div>
    <div class="space-footer"></div>
    <?php require('inc_footer.php'); ?>
</body>

</html>

<script>
    $('.slide-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>'],
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
    $('.field').change(function() {
        unit = this.value;
    });
    $('.add').click(function() {
        unit++;
        var $input = $(this).prevUntil('.sub');
        $input.val(unit);
        unit = unit;
    });
    $('.sub').click(function() {
        if (unit > 0) {
            unit--;
            var $input = $(this).nextUntil('.add');
            $input.val(unit);
        }
    });
</script>

<script>
    $(function() {
        $("#datepicker").datepicker();
    });

    $(function() {
        $("#datepicker2").datepicker();
    });
</script>