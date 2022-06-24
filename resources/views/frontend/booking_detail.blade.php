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
        <div class="clearfix">
            <div class="float-end width-search">
                <input class="form-control empty orange" type="text" id="iconified" placeholder="&#xF002;  Where  are  you  looking for ?"aria-label="default input example">
            </div>
        </div>
    </div>
    <div class="bg-grey-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="none-mobile">
                        <div class="box-sidebaraccount mt-3">
                            <a  href="mybooking.php"  class="menu-account">
                                <div class="text-menu-account active">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-calendar"></i></div>
                                        <div class="col-10">My booking</div>
                                    </div>
                                </div>
                            </a>
                            <a  href="review.php"  class="menu-account">
                                <div class="text-menu-account">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-star"></i></div>
                                        <div class="col-10">Reviews</div>
                                    </div>
                                </div>
                            </a>
                            <a  href="profile.php"  class="menu-account">
                                <div class="text-menu-account">
                                    <div class="row">
                                        <div class="col-2"><i class="far fa-user"></i></div>
                                        <div class="col-10">Profile</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="mt-4"></div>
                    <a href="mybooking.php" class="text-sort-by"><i class="fas fa-chevron-left text-light-grey me-2"></i>Back to Bookings</a>
                    <div class="box-white my-4">
                        <div class="text-bold text-filter">Your booking is confirmed ,No re-confirmation required</div>
                        <div class="row mt-2">
                            <div class="col-sm-6">
                                <a class="text-tiny text-orange" data-bs-toggle="modal" data-bs-target="#confirmation">
  <i class="fas fa-envelope me-2"></i>Get booking confirmation
</a>
                               
                            </div>
                            <div class="col-sm-6">
                                <a class="text-tiny text-orange" data-bs-toggle="modal" data-bs-target="#guest"><i class="fas fa-user-tie me-2"></i>Manage guest</a>
                            </div>
                            <div class="col-sm-6">
                                 <a class="text-tiny text-orange" data-bs-toggle="modal" data-bs-target="#cancel"><i class="fas fa-ban me-2"></i>Cancle booking</a>
                            </div>
                            <div class="col-sm-6">
                                 <a class="text-tiny text-orange" data-bs-toggle="modal" data-bs-target="#policies"><i class="fas fa-file-alt me-2"></i>View propoty policies</a>
                            </div>
                        </div>
                    </div>
                     <!-- Modal confirmation-->
                    <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Get booking confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                           <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                          </div>
                          <div class="modal-footer">
                              <button type="submit" class="btn-search-booking">Send to Email</button>
                              <div class="text-light-grey text-center text-tiny">or</div>
                              <button type="submit" class="btn-blue">Download</button>
                          </div>
                        </div>
                      </div>
                    </div>
                     <!-- Modal guest-->
                    <div class="modal fade" id="guest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Manage guest</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput2" class="form-label text-bold text-tiny">First Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2">
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput3" class="form-label text-bold text-tiny">Last Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3">
                                </div>
                              </div>
                              <div id="Create" style="display:none">
                              <div class="row">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput2" class="form-label text-bold text-tiny">First Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2">
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput3" class="form-label text-bold text-tiny">Last Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3">
                                </div>
                              </div>
                            </div>
                            <div>
                                <input id="btn" class="text-small text-blue btn-anoter" value="Add another guest">
                            </div> 
                          </div>
                          <div class="modal-footer">
                              <div class="row g-1 justify-content-end">
                                  <div class="col-4">
                                    <button type="submit" class="btn-grey" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                  <div class="col-4">
                                    <button type="submit" class="btn-search-booking">Save</button>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <!-- Modal cancel-->
                    <div class="modal fade" id="cancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cancel booking</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <label for="exampleFormControlInput1" class="form-label text-bold text-tiny">Reason for cancellation</label>
                            <div class="dropdown">
                              <button class="btn-reason-cancel dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Select an option
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Booking was not confirmed quickly enough</a></li>
                                <li><a class="dropdown-item" href="#">Concers about reliability / trustworthiness</a></li>
                                <li><a class="dropdown-item" href="#">Concerns about safety at the hotel's location</a></li>
                                <li><a class="dropdown-item" href="#">Decided on a different hotel not offered by your site</a></li>
                                <li><a class="dropdown-item" href="#">Did not like cancellation terms</a></li>
                                <li><a class="dropdown-item" href="#">Did not like payment terms</a></li>
                                <li><a class="dropdown-item" href="#">Forced to cancel or postpone trip</a></li>
                                <li><a class="dropdown-item" href="#">Found lower price on the Internet</a></li>
                                <li><a class="dropdown-item" href="#">Found lower price through a local agent</a></li>
                                <li><a class="dropdown-item" href="#">Natural Disaster</a></li>
                                <li><a class="dropdown-item" href="#">will book a different hotel through your site</a></li>
                                <li><a class="dropdown-item" href="#">will book with hotel directly</a></li>
                                <li><a class="dropdown-item" href="#">Other</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="modal-footer">
                              <div class="row g-1 justify-content-end">
                                  <div class="col-4">
                                    <button type="submit" class="btn-grey" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                  <div class="col-4">
                                    <button type="submit" class="btn-search-booking" >cancel booking</button>
                                  </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    <!-- Modal policies-->
                    <div class="modal fade" id="policies" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Propoty policies</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                                <div class="text-small text-bold text-grey">Title</div>
                                <div class="text-small  text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nibh lacus, convallis nec ipsum at, consectetur rhoncus sem. Praesent sodales ipsum eget ipsum ultrices bibendum sit amet a tellus. Aenean vestibulum ligula magna, at iaculis ex scelerisque vel. Nullam ac elementum ipsum, at mattis sem. Aliquam sapien est, ullamcorper ac auctor vehicula, pulvinar id urna. Integer purus arcu, feugiat sit amet nibh vel, venenatis molestie odio. Aenean at odio luctus, scelerisque purus non, hendrerit lacus.</div>
                                <div class="text-small text-bold text-grey">Title</div>
                                <div class="text-small  text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nibh lacus, convallis nec ipsum at, consectetur rhoncus sem. Praesent sodales ipsum eget ipsum ultrices bibendum sit amet a tellus. Aenean vestibulum ligula magna, at iaculis ex scelerisque vel. Nullam ac elementum ipsum, at mattis sem. Aliquam sapien est, ullamcorper ac auctor vehicula, pulvinar id urna. Integer purus arcu, feugiat sit amet nibh vel, venenatis molestie odio. Aenean at odio luctus, scelerisque purus non, hendrerit lacus.</div>
                                
                          </div>
                          <div class="modal-footer">
                              
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-white my-4">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="images/cities%20(5).jpg" class="img-fluid" alt="...">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <div class="name-text">poolvilla</div>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-orange size-star"></i>
                                        <i class="fas fa-star text-orange size-star"></i>
                                        <i class="fas fa-star text-orange size-star"></i>
                                        <i class="fas fa-star text-orange size-star"></i>
                                        <i class="fas fa-star text-orange size-star"></i>
                                    </div>
                                    <div class="text-blue text-tiny"><i class="fas fa-phone me-2"></i>02-000-0000</div>
                                    <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-2"></i>Location , Country
                                    <span>
                                        <a href="https://www.google.com/maps/dir//16.487357,102.835101/@16.487645,102.843716,15z?hl=th-TH" class="btn-link-map" target="_blank">show on map</a>
                                    </span>
                                </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Booking ID</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">0000000000</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Check in</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">14.00 - 25 Auguest 2021</div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Check out</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">12.00 - 29 Auguest 2021</div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold"></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">4 Nights</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Contact detail</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">email</div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold"></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">090-000-0000</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Lead Guest</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">Thamonchanok Sangworavisit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Additional guest</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-booking-detail">Rooms</div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="images/cities%20(5).jpg" class="img-fluid" alt="...">
                                </a>
                                 <div class="text-small text-light-grey mt-2">Room size : 70 m / 753 ft</div>
                                 <div class="text-small text-light-grey mt-1">1 King bed & 1 Queen bed</div>
                                 <div class="text-small text-light-grey mt-1">Private pool</div>
                            </div>
                            <div class="col-md-9">
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Rooms Booked</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">privates pool(x1)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Booked capacity</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">2 adults</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Max capacity</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">3 adults</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Room type</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">Privated pool</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Room capacity</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="text-tiny">Max 3 adults</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title-booking-detail">Payment</div>
                        <div class="row mt-4">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Payment details</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-6"> <div class="text-tiny">Total amount charged</div></div>
                                                <div class="col-6"><div class="text-tiny">THB 3,500.00</div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vl-booking-detail">
                                    <div class="row mb-1">
                                        <div class="col-sm-4">
                                            <div class="text-tiny text-bold">Payment method</div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-6"> <div class="text-tiny">Card holder name</div></div>
                                                <div class="col-6"><div class="text-tiny">xxxxxxxxxxxxxx</div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-6"> <div class="text-tiny">Card type</div></div>
                                                <div class="col-6"><div class="text-tiny">Visa</div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-6"> <div class="text-tiny">Card number</div></div>
                                                <div class="col-6"><div class="text-tiny">xxxx-xxxx-xxxx-4363</div>
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
    <?php require('inc_footer.php'); ?> 
</body>
</html>

<script type="text/javascript">
$(document).ready(function () {
    $("#btn").click(function () {
        $("#Create").toggle();
    });
});
</script>