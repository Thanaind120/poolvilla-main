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
            <div class="text-filter text-grey text-start text-bold">HOUSE RULES</div>
            <div class="vl-filter-hotel mt-3">
                <div class="row">
                    <div class="col-sm-6 col-8">
                        <div class="text-tiny text-grey">Smoking allowed</div>
                    </div>
                    <div class="col-sm-6 col-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-8">
                        <div class="text-tiny text-grey">Pets allowed</div>
                    </div>
                    <div class="col-sm-6 col-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-8">
                        <div class="text-tiny text-grey">Children allowed</div>
                    </div>
                    <div class="col-sm-6 col-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-8">
                        <div class="text-tiny text-grey">Parties/events allowed</div>
                    </div>
                    <div class="col-sm-6 col-4">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </div>
                </div>
            </div>
            <div class="vl-filter-hotel mt-2">
                <div class="text-tiny text-bold text-grey">Check-in</div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-tiny text-bold text-grey">From</div>
                            <select class="form-select" aria-label="Default select example">
                              <option selected>select</option>
                              <option value="1">time</option>
                              <option value="2">time</option>
                              <option value="3">time</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-tiny text-bold text-grey">Unit</div>
                            <select class="form-select" aria-label="Default select example">
                              <option selected>select</option>
                              <option value="1">time</option>
                              <option value="2">time</option>
                              <option value="3">time</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-tiny text-bold text-grey mt-4">Check-out</div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-tiny text-bold text-grey">From</div>
                            <select class="form-select" aria-label="Default select example">
                              <option selected>select</option>
                              <option value="1">time</option>
                              <option value="2">time</option>
                              <option value="3">time</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-tiny text-bold text-grey">Unit</div>
                            <select class="form-select" aria-label="Default select example">
                              <option selected>select</option>
                              <option value="1">time</option>
                              <option value="2">time</option>
                              <option value="3">time</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                 <div class="col-sm-4 ">
                      <a href="list_property6.php"><div class="btn-grey mt-3">Back</div></a>
                    </div>
                    <div class="col-sm-4 ">
                        <a href="list_property8.php"><div class="btn-orange mt-3">Next</div></a>
                    </div>
            </div>
        </div>
    </div>
        
        <div class="space-footer"></div>
    </div>
   <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>
