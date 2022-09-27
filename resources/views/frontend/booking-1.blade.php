<!doctype html>
<html lang="th">
<head>      
     <title>Poolvilla</title>
    <?php require('inc_header.php'); ?> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="js/owl.carousel.min.js"></script>
</head>
<body >
    <?php require('inc_navbar.php'); ?> 
    <div class="bg-orange">
        <div class="booking-step">
            <div class="row g-0 justify-content-center">
                <div class="col-auto">
                    <div class="round-booking step">1</div>
                </div>
                <div class="col-4">
                    <div class="line-booking"></div>
                </div>
                <div class="col-auto">
                    <div class="round-booking">2</div>
                </div>
                <div class="col-4">
                    <div class="line-booking"></div>
                </div>
                <div class="col-auto">
                    <div class="round-booking">3</div>
                </div>
            </div>
            <div class="row g-0 justify-content-center">
                <div class="col-4">
                   <div class="text-tiny text-white text-star">Customer information</div>
                </div>
               
                <div class="col-4">
                    <div class="text-tiny text-white text-center">Customer information</div>
                </div>
                
                <div class="col-4">
                    <div class="text-tiny text-white text-end">Customer information</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row g-2">
        <div class="col-sm-9">
            <div class="box-white">
                <div class="row g-1">
                    <div class="col-auto">
                        <i class="fas fa-user-circle text-orange text-medium"></i>
                    </div>
                    <div class="col-auto">
                        <div class="text-orange  text-medium">Welcome, Elle !<!--(not Elle? <span><a href="signin.php" class="text-orange" style="text-decoration:underline">sing out</a></span>)--></div>
                    </div>
                </div>
            </div>
            <div class="for-mobile">
                <div class="box-white">
                    <div class="row g-2">
                    <div class="col-6">
                        <a href="#">
                            <img src="images/cities%20(4).jpg" class="img-fluid rounded-start" alt="...">
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="text-medium text+grey text-bold">poolvilla</div>
                        <div>
                            <i class="fas fa-star text-orange text-small"></i>
                            <i class="fas fa-star text-orange text-small"></i>
                            <i class="fas fa-star text-orange text-small"></i>
                            <i class="fas fa-star text-orange text-small"></i>
                            <i class="fas fa-star text-orange text-small"></i>
                        </div>
                        <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1 text-small"></i>Location , Country
                          
                        </div>
                    </div>
                </div>
                    <div class="row mt-1 g-2">
                    <div class="col-9">
                        <div class="text-bold text-tiny text-grey">25 Aug 2021 - 29 Aug 2021</div>
                    </div>
                    <div class="col-3">
                        <div class="text-bold text-tiny text-grey">3 nights</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-9">
                        <div class="text-bold text-tiny text-grey">1 X private pool</div>
                    </div>
                    <div class="col-3">
                        <a href="select-rooms.php" class="text-blue text-tiny" style="text-decoration:underline!important;">change</a>
                    </div>
                </div>
                <div class="text-grey text-small"><i class="fas fa-award me-2"></i>Room Special offer : Early Check-in 9 am and Late Check-out 2 pm.</div>
                <div class="text-grey text-small"><i class="fas fa-user me-2"></i>1 room,2 adults</div>
                <div class="text-grey text-small"><i class="fas fa-users me-2"></i>Max 2 adults, 2 children(0-3 years)</div>
                </div>
            </div>
            <div class="box-white">
                <div class="text-tiny text-bold">Choose your payment option</div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label text-tiny" for="flexRadioDefault1">
                    Pay later
                  </label>
                </div>
                <div class="box-green">
                    <div class="text-tiny">*Remark</div>
                    <div class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus</div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label text-tiny" for="flexRadioDefault2">
                    Pay now
                  </label>
                </div>
            </div>
            <div class="box-white">
                <div class="text-tiny text-bold">Contact detail</div>
                <label for="exampleFormControlInput1" class="form-label text-tiny">Full Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
                <label for="exampleFormControlInput1" class="form-label text-tiny mt-1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
                <div class="row mt-1">
                    <div class="col-sm-6">
                        <label for="exampleFormControlInput1" class="form-label text-tiny">Phone number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="col-sm-6">
                        <label for="exampleFormControlInput1" class="form-label text-tiny">Country/region of residence</label>
                        <div class="dropdown">
                            <button class="form-control dropdown-toggle" type="button" data-toggle="dropdown" id="exampleFormControlInput1">Select Country/region of residence
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu boxwhitedro">
                                <input class="form-control"  type="text"   placeholder="Search..">
                                <li><a href="#" class="dropdown-item division">Country a</a></li>
                                <li><a href="#" class="dropdown-item division">Country b</a></li>
                                <li><a href="#" class="dropdown-item division">Country c</a></li>
                                <li><a href="#" class="dropdown-item division">Country d</a></li>
                                <li><a href="#" class="dropdown-item    division">Country e</a></li>
                                <li><a href="#" class="dropdown-item division">Country f</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        please tics if you're making this booking for someone else
                    </label>
                </div>
                 <div class="text-tiny text-bold mt-2">Contact detail</div>
                <label for="exampleFormControlInput1" class="form-label text-tiny">Full Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
                <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label text-tiny">Country/region of residence</label>
                    <div class="dropdown">
                            <button class="form-control dropdown-toggle" type="button" data-toggle="dropdown" id="exampleFormControlInput1">Select Country/region of residence
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu boxwhitedro">
                                <input class="form-control"  type="text"   placeholder="Search..">
                                <li><a href="#" class="dropdown-item division">Country a</a></li>
                                <li><a href="#" class="dropdown-item division">Country b</a></li>
                                <li><a href="#" class="dropdown-item division">Country c</a></li>
                                <li><a href="#" class="dropdown-item division">Country d</a></li>
                                <li><a href="#" class="dropdown-item    division">Country e</a></li>
                                <li><a href="#" class="dropdown-item division">Country f</a></li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="box-white">
                <div class="text-tiny text-bold">Room upgrade deals</div>
                <div class="box-grey2">
                    <div class="row justify-content-between">
                        <div class="col-sm-8">
                            <div class="text-tiny text-bold">Deal A</div>
                            <div class="text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row g-2 justify-content-end">
                                <div class="col-auto">
                                    <div class="text-light-grey text-small text-end" style=" text-decoration: line-through">700</div>
                                </div>
                                <div class="col-auto">
                                    <div class="text-tiny text-green text-bold text-end">500 THB</div>
                                </div>
                            </div>
                            <button type="submit" class="btn-added ">added</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-white">
                 <div class="text-tiny text-bold">Traveling with kids?</div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        I'm traveling with kids (0-3 years)
                    </label>
                </div>
                 <div class="text-tiny text-bold mt-2 mb-1">Let us know when you are arriving</div>
                <div class="dropdown">
                    <button class="form-control dropdown-toggle" type="button" data-toggle="dropdown" id="exampleFormControlInput1">I don't sure
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item ">I don't sure</a></li>
                        <li><a href="#" class="dropdown-item ">00.00-01.00</a></li>
                        <li><a href="#" class="dropdown-item ">01.00-02.00</a></li>
                        <li><a href="#" class="dropdown-item ">02.00-03.00</a></li>
                        <li><a href="#" class="dropdown-item ">04.00-05.00</a></li>
                        <li><a href="#" class="dropdown-item ">05.00-06.00</a></li>
                        <li><a href="#" class="dropdown-item ">06.00-07.00</a></li>
                        <li><a href="#" class="dropdown-item ">07.00-08.00</a></li>
                        <li><a href="#" class="dropdown-item ">08.00-09.00</a></li>
                        <li><a href="#" class="dropdown-item ">09.00-10.00</a></li>
                        <li><a href="#" class="dropdown-item ">11.00-12.00</a></li>
                        <li><a href="#" class="dropdown-item ">12.00-13.00</a></li>
                        <li><a href="#" class="dropdown-item ">13.00-14.00</a></li>
                        <li><a href="#" class="dropdown-item ">14.00-15.00</a></li>
                        <li><a href="#" class="dropdown-item ">15.00-16.00</a></li>
                        <li><a href="#" class="dropdown-item ">16.00-17.00</a></li>
                        <li><a href="#" class="dropdown-item ">17.00-18.00</a></li>
                        <li><a href="#" class="dropdown-item ">18.00-19.00</a></li>
                        <li><a href="#" class="dropdown-item ">19.00-20.00</a></li>
                        <li><a href="#" class="dropdown-item ">20.00-21.00</a></li>
                        <li><a href="#" class="dropdown-item ">21.00-22.00</a></li>
                        <li><a href="#" class="dropdown-item ">22.00-23.00</a></li>
                        <li><a href="#" class="dropdown-item ">23.00-24.00</a></li>
                        <li><a href="#" class="dropdown-item ">00.00-01.00(Next day)</a></li>
                        <li><a href="#" class="dropdown-item ">01.00-02.00(Next day)</a></li>
                    </ul>
                </div>
            </div>
            <a class="btn-next" href="booking-2.php">Next</a>
        </div>
        <div class="col-sm-3">
            <div class="none-mobile">
            <div class="box-white">
                <div class="row g-2">
                    <div class="col-lg-5">
                        <a href="#">
                            <img src="images/cities%20(4).jpg" class="img-fluid rounded-start" alt="...">
                        </a>
                    </div>
                    <div class="col-lg-7">
                        <div class="text-medium text+grey text-bold">poolvilla</div>
                        <div>
                            <i class="fas fa-star text-orange text-small"></i>
                            <i class="fas fa-star text-orange text-small"></i>
                            <i class="fas fa-star text-orange text-small"></i>
                            <i class="fas fa-star text-orange text-small"></i>
                            <i class="fas fa-star text-orange text-small"></i>
                        </div>
                        <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1 text-small"></i>Location , Country
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-white">
                <div class="row g-2">
                    <div class="col-lg-9">
                        <div class="text-bold text-tiny text-grey">25 Aug 2021 - 29 Aug 2021</div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-bold text-tiny text-grey">3 nights</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-9">
                        <div class="text-bold text-tiny text-grey">1 X private pool</div>
                    </div>
                    <div class="col-lg-3">
                        <a href="select-rooms.php" class="text-blue text-tiny" style="text-decoration:underline!important;">change</a>
                    </div>
                </div>
                <div class="text-grey text-small"><i class="fas fa-award me-2"></i>Room Special offer : Early Check-in 9 am and Late Check-out 2 pm.</div>
                <div class="text-grey text-small"><i class="fas fa-user me-2"></i>1 room,2 adults</div>
                <div class="text-grey text-small"><i class="fas fa-users me-2"></i>Max 2 adults, 2 children(0-3 years)</div>
            </div>
            <div class="box-white">
                <div class="row g-2 justify-content-between">
                    <div class="col-sm-8">
                        <div class="text-tiny text-grey">Price(1 room X 3 nights)</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-tiny text-end text-grey">5,500 THB</div>
                    </div>
                </div>
                <div class="row g-2 justify-content-between vl-total">
                    <div class="col-sm-8">
                        <div class="text-tiny text-grey">Discount</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-tiny text-red text-end">2,000 THB</div>
                    </div>
                </div>
                <div class="row g-2 justify-content-between">
                    <div class="col-sm-8">
                        <div class="text-tiny text-grey">Total</div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-tiny text-end text-grey">3,500 THB</div>
                    </div>
                </div>
                <div class="text-small mt-1"><span class="text-bold">Inculded in price :</span>Service charge 10%, Tax 7%, City tax 1%</div>
                
            </div>

    </div>
        </div>
    </div>
    </div>
        <div class="space-footer"></div>
    <?php require('inc_footer.php'); ?> 
</body>
</html>
<script>
    
    $(document).ready(function(){
  $(".form-control").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>