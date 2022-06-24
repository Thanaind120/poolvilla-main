<!doctype html>
<html lang="th">
<head>      
    <title>หน้าแรก</title>
    <?php require('inc_header.php'); ?> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="js/owl.carousel.min.js"></script>
</head>
<body >
    <?php require('inc_navbar_hotel.php'); ?> 
    <div class="bg-grey">
    <div class="container">
        <div class="box-hotel">
            <div class="text-filter text-grey text-start text-bold">PRICE PER NIGHT</div>
            <div class="vl-filter-hotel mt-2">
                <div class="mt-3">
                    <div class="text-filter text-grey text-bold mt-3">Price guests pay</div>
                    <div class="col-sm-6">
                    <div class="input-group mt-2">
                        <span class="input-group-text hotel" id="inputGroup-sizing-default">THB</span>
                        <input type="number" class="form-control text-l " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <small class="text-light-grey">Including taxes, commission, and fees</small>
                    </div>
                </div>
            </div>
            <div class="vl-filter-hotel mt-2">
                <div class="mt-3">
                    <div class="text-filter text-grey text-bold mt-3">Want to lower your price by 20% for your first guests?</div>
                    <div class="">
                        <small class="text-grey">Get your first bookings quicker and reach the three reviews needed to display a guest review score. You can raise your price anytime.</small><br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                          <label class="form-check-label" for="inlineRadio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vl-filter-hotel mt-2">
                <div class="mt-3">
                    <div class="text-filter text-grey mt-3">15.00% Poolvilla commission</div>
                    <div class="col-sm-6 mt-3">
                        <li class="text-tiny"><i class="fas fa-check text-green me-2"></i>24/7 help in your language</li>
                        <li class="text-tiny"><i class="fas fa-check text-green me-2"></i>Save time with automatically confirmed bookings</li>
                        <li class="text-tiny"><i class="fas fa-check text-green me-2"></i>We promote your place on Google</li>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="text-filter text-red mt-3">THB 935.00 Your earnings (including taxes)</div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-sm-4 ">
                     <a href="list_property9.php"><div class="btn-grey mt-3">Back</div></a>
                </div>
                <div class="col-sm-4 ">
                    <a href="list_property11.php"><div class="btn-orange mt-3">Next</div></a>
                </div>
            </div>
        </div>
    </div>
        
        <div class="space-footer"></div>
    </div>
   <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>
