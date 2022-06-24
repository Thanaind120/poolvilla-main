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
                <div class="text-filter text-grey text-start text-bold">PROPERTY INFORMATION</div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="text-tiny text-grey text-start mt-3">Property Name (name displayed to clients)</div>
                        <input class="form-control mt-2" type="text">
                    </div>
                    <div class="col-sm-3">
                        <div class="text-tiny text-grey text-start mt-3">Number of Rooms</div>
                        <input class="form-control mt-2" type="text">
                    </div>
                    <div class="col-sm-4">
                        <div class="text-tiny text-grey text-start mt-3">Website</div>
                        <input class="form-control mt-2" type="text">
                    </div>
                    <div class="col-sm-5">
                        <div class="text-tiny text-grey text-start mt-3">Star Rating </div>
                        <div class="dropdown">
                          <button class="btn-star-hotel dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Pleases Select
                          </button>
                          <ul class="dropdown-menu hotel" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">
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
                                        <div class="star-rating text-tiny text-grey">( 5 stars )</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
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
                                        <div class="star-rating text-tiny text-grey">( 4 stars )</div>
                                    </div>
                                </a>
                              </li>
                            <li>
                                <a class="dropdown-item" href="#">
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
                                        <div class="star-rating text-tiny text-grey">( 3 stars )</div>
                                    </div>
                                </a>
                              </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="row">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                        </div>
                                          <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="star-rating text-tiny text-grey">( 2 stars )</div>
                                    </div>
                                </a>
                              </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="row">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="star-rating text-tiny text-grey">( 1 stars )</div>
                                    </div>
                                </a>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="text-filter text-grey text-start text-bold mt-5">PROPERTY ADDRESS</div>
                <div class="col-sm-4">
                       <div class="">
                          <label for="exampleFormControlInput3" class="form-label text-tiny text-grey">Address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="....">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-tiny text-grey text-start mt-3"></div>
                        <label for="exampleDataList" class="form-label text-tiny text-grey">Country</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                        </datalist>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-tiny text-grey text-start mt-3"></div>
                        <label for="exampleDataList" class="form-label text-tiny text-grey">City</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                        </datalist>
                    </div>
                     <div class="col-sm-4">
                        <div class="text-tiny text-grey text-start mt-3"></div>
                        <label for="exampleDataList" class="form-label text-tiny text-grey">Postal Code</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                            <option value="location">
                        </datalist>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-sm-4 ">
                        <a href="list_property3.php"><div class="btn-orange mt-3">Next</div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-footer"></div>
    </div>
   <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>

