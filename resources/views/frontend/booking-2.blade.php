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
                    <div class="line-booking step"></div>
                </div>
                <div class="col-auto">
                    <div class="round-booking step">2</div>
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
        <div class="clearfix mt-2">
        <a href="booking-1.php" class="text-tiny text-light-grey mt-4"><i class="fas fa-chevron-left text-light-grey me-2"></i>back to Customer information</a>
            </div>
    <div class="row g-2">
        <div class="col-sm-9">
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
                <div class="row g-1">
                    <div class="col-auto">
                        <i class="fas fa-money-bill-wave text-orange text-medium"></i>
                    </div>
                    <div class="col-auto">
                        <div class="text-orange text-medium">Select payment gateway</div>
                    </div>
                    <div class="col-auto">
                        <div>
                            <select class="btn-payment">
                                <option value="1">Credit/Debit card</option><!--
                                <option value="2">Pay later</option>
                                <option value="3">Pay at hotel</option>-->
                            </select>
                        </div>
                     </div>
                </div>
                <div class="1 box-payment mt-2"> 
                    <div class="text-bold text-grey text-tiny">Credit/Debit card</div>
                    <div class="text-tiny text-grey mt-2 mb-1">Select a card type</div>
                    <div class="dropdown">
                    <button class="form-control dropdown-toggle" type="button" data-toggle="dropdown" id="exampleFormControlInput1">Visa / MasterCard / JCB / Amex
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item ">Visa / MasterCard / JCB / Amex</a></li>
                    </ul>
                </div>
                    <label for="exampleFormControlInput1" class="form-label text-tiny mt-2">Card holder name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                    <label for="exampleFormControlInput1" class="form-label text-tiny mt-2">Credit / Debit card name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label text-tiny">Expiry date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlInput1" class="form-label text-tiny">CVC/CVV</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"></div>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-tiny" for="flexCheckDefault">
                            Save this card to my account for faster booking
                        </label>
                    </div>
                    <div class="text-tiny mt-1">
                        By proceeding,I agree to Terms of Use,Privacy Policy
                    </div>
                    <div class="text-tiny mt-1">
                       <i class="fas fa-envelope-open-text text-orange me-2"></i>We'll send confirmation of ypur booking to *email*
                    </div>
                </div><!--
                <div class="2 box-payment mt-2">
                </div>
                <div class="3 box-payment mt-2">
                </div>-->
            </div>
            <a class="btn-next" href="booking-3.php">Book now</a>
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
                        <a href="select-rooms.php" class="text-blue text-tiny" text-decoration:underline!important;>change</a>
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
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box-payment").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box-payment").hide();
            }
        });
    }).change();
});
</script>