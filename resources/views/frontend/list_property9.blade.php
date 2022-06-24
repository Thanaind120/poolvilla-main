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
            <div class="text-filter text-grey text-start text-bold">GUEST PAYMENT OPTIONS</div>
            <div class="mt-2">
                <div class="row">
                    <div class="col-sm-6 col-8">
                        <div class="text-tiny text-grey">Credit cards</div>
                    </div>
                    <div class="col-sm-6 col-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-8">
                        <div class="text-tiny text-grey">Paypal</div>
                    </div>
                    <div class="col-sm-6 col-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-8">
                        <div class="text-tiny text-grey">Bank transfer</div>
                    </div>
                    <div class="col-sm-6 col-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-sm-4 ">
                     <a href="list_property8.php"><div class="btn-grey mt-3">Back</div></a>
                </div>
                <div class="col-sm-4 ">
                    <a href="list_property10.php"><div class="btn-orange mt-3">Next</div></a>
                </div>
            </div>
        </div>
    </div>
        
        <div class="space-footer"></div>
    </div>
    <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>
