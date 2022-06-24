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
            <div class="text-filter text-grey text-start text-bold">TELL US ABOUT THE PARKING SITUATION AT YOUR VILLA</div>
            <div class="vl-filter-hotel">
                <div class="text-filter text-grey text-bold mt-3">Is parking available to guests?</div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                   Yes, free
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    yes, paid
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                  <label class="form-check-label" for="flexRadioDefault3">
                    No
                  </label>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                 <div class="col-sm-4 ">
                      <a href="list_property4.php"><div class="btn-grey mt-3">Back</div></a>
                    </div>
                    <div class="col-sm-4 ">
                        <a href="list_property6.php"><div class="btn-orange mt-3">Next</div></a>
                    </div>
               
        </div>
        </div>
    </div>
        
        <div class="space-footer"></div>
    </div>
   <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>
