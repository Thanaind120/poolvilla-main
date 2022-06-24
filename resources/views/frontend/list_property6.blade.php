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
            <div class="text-filter text-grey text-start text-bold">What languages do you or your staff speak?</div>
            <div class="vl-filter-hotel">
                <div class="text-filter text-grey text-bold mt-3">Select languages</div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Thai</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">English</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Chinese</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">French</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">German</label>
                </div>
                <div class="col-sm-4">
                    <label class="form-check-label text-filter text-grey   text-bold mt-3" for="flexCheckDefault">Add additional languages</label>
                    <div class="dropdown mt-2">
                          <button class="btn-star-hotel dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Pleases Select
                          </button>
                          <ul class="dropdown-menu hotel" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                      <label class="form-check-label" for="flexCheckDefault">languages</label>
                                    </div>
                                </a>
                            </li>
                              <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                      <label class="form-check-label" for="flexCheckDefault">languages</label>
                                    </div>
                                </a>
                            </li>
                              <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                      <label class="form-check-label" for="flexCheckDefault">languages</label>
                                    </div>
                                </a>
                            </li>
                              <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                      <label class="form-check-label" for="flexCheckDefault">languages</label>
                                    </div>
                                </a>
                            </li>
                          </ul>
                        </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                 <div class="col-sm-4 ">
                      <a href="list_property5-2.php"><div class="btn-grey mt-3">Back</div></a>
                    </div>
                    <div class="col-sm-4 ">
                        <a href="list_property7.php"><div class="btn-orange mt-3">Next</div></a>
                    </div>
               
        </div>
        </div>
    </div>
        
        <div class="space-footer"></div>
    </div>
 <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>
