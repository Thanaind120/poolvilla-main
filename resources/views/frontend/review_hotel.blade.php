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
    <div class="bg-orange-light2">
        <div class="row g-1">
            <div class="col-lg-2 col-12">
                <input class="form-control emptytwo orange" type="text" id="iconified" placeholder="&#xF002;  *country*"aria-   label="default input example">
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
                                        <label for="inputPassword" class="col-4 text-tiny text-orange">Kid</label>
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
                <input class="form-control empty orange" type="text" id="iconified" placeholder="&#xF002;  Where  are  you  looking for ?"aria-label="default input example">
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
                        <li class="breadcrumb-item"><a class="bread" href="select-rooms.php">pool villa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">reviews</li>
                    </ol>
                </nav>  
                </div>
            </div>
        </div>
        <div class="box-white">
            <div class="vl-bottom">
            <div class="row g-1">
                <div class="col-auto">
                    <div class="text-title text-bold text-grey mb-2">poolvilla</div>
                </div>
                <div class="col-auto">
                   <div class="point-badge">9.2</div>
                </div>
            </div>
            <div class="">
                    <div class="text-grey text-review">Exceptional</div>
                    <div class="text-light-grey text-tiny">562 reviews</div>
                </div>
                <div class="clearfix">
                    <div class="float-start">
                        <div class="text-medium text-bold textw-sort text-orange">Reviews from Customer</div>
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
            </div>
            <div class="vl-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-blue text-title text-bold">10</div>
                        <div class="text-grey text-tiny  "><i class="fas fa-user-edit me-2"></i>Miss A</div>
                        <div class="text-grey text-tiny "><i class="fas fa-home me-2"></i>Room type A</div>
                        <div class="text-grey text-tiny "><i class="fas fa-calendar me-2"></i>18 Jan 2019 - 23 Jan 2019</div>
                    </div>
                    <div class="col-sm-8">
                        <div class="box-grey my-2">
                           <div class="clearfix">
                               <img src="images/review.svg" class="float-end reviewpage-icon">
                            </div>
                            <div class="text-medium text-grey p-3 mt-3"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
                        </div>
                        <div class="row g-1">
                            <div class="col-sm-3 col-6">
                                <div class="img-a">
                                <img src="images/cities%20(1).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="img-a">
                                <img src="images/cities%20(2).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="img-a">
                                <img src="images/cities%20(3).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
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
                          <img src="images/cities%20(2).jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/cities%20(3).jpg" class="d-block w-100" alt="...">
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
                        <div class="text-tiny text-grey text-end mt-1">รูปภาพทั้งหมด (3)</div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="vl-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-blue text-title text-bold">8</div>
                        <div class="text-grey text-tiny  "><i class="fas fa-user-edit me-2"></i>Miss A</div>
                        <div class="text-grey text-tiny "><i class="fas fa-home me-2"></i>Room type A</div>
                        <div class="text-grey text-tiny "><i class="fas fa-calendar me-2"></i>18 Jan 2019 - 23 Jan 2019</div>
                    </div>
                    <div class="col-sm-8">
                        <div class="box-grey my-2">
                           <div class="clearfix">
                               <img src="images/review.svg" class="float-end reviewpage-icon">
                            </div>
                            <div class="text-medium text-grey p-3 mt-3"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="vl-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-blue text-title text-bold">10</div>
                        <div class="text-grey text-tiny  "><i class="fas fa-user-edit me-2"></i>Miss A</div>
                        <div class="text-grey text-tiny "><i class="fas fa-home me-2"></i>Room type A</div>
                        <div class="text-grey text-tiny "><i class="fas fa-calendar me-2"></i>18 Jan 2019 - 23 Jan 2019</div>
                    </div>
                    <div class="col-sm-8">
                        <div class="box-grey my-2">
                           <div class="clearfix">
                               <img src="images/review.svg" class="float-end reviewpage-icon">
                            </div>
                            <div class="text-medium text-grey p-3 mt-3"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </div>
                        </div>
                        <div class="row g-1">
                            <div class="col-sm-3 col-6">
                                <div class="img-a">
                                <img src="images/cities%20(1).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="img-a">
                                <img src="images/cities%20(2).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                                </div>
                            </div>
                            <div class="col-sm-3 col-6">
                                <div class="img-a">
                                <img src="images/cities%20(3).jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
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
                          <img src="images/cities%20(2).jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/cities%20(3).jpg" class="d-block w-100" alt="...">
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
                        <div class="text-tiny text-grey text-end mt-1">รูปภาพทั้งหมด (3)</div>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
        
    </div>
        <div class="space-footer"></div>
    <?php require('inc_footer.php'); ?> 
</body>
</html>


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
