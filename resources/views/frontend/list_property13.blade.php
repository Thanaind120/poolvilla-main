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
            <div class="text-filter text-grey text-start text-bold">That’s it! You’ve done everything you need to before your first guest stays.</div>
            <div class="mt-2">
                <div class="mt-3">
                    <div class="text-tiny text-grey mt-3">Some important info before listing your property on Poolvilla</div>
                    <div class="col-sm-8 mt-4">
                        <div class="row mt-3 mb-2">
                            <div class="col-auto"><i class="far fa-calendar text-icon-hote"></i></div>
                            <div class="col-10">
                                <div class="text-tiny text-bold text-grey">Can I decide when I get bookings?</div>
                                <div class="text-tiny text-grey">Yes. The best way to do so is by keeping your calendar up to date. Close any dates you don’t want bookings. If you have bookings on other sites, close those dates, too.</div>
                            </div>
                        </div>
                        <div class="row mt-3 mb-2">
                            <div class="col-auto"><i class="far fa-check-circle  text-icon-hote"></i></div>
                            <div class="col-10">
                                <div class="text-tiny text-bold text-grey">Are bookings confirmed right away?</div>
                                <div class="text-tiny text-grey">Yes. They’re confirmed as soon as a guest makes a booking.</div>
                            </div>
                        </div>
                        <div class="row mt-3 mb-2">
                            <div class="col-auto"><i class="fas fa-users text-icon-hote"></i></div>
                            <div class="col-10">
                                <div class="text-tiny text-bold text-grey">Can I choose who stays at my place?</div>
                                <div class="text-tiny text-grey">No. If a date is open in your calendar, any guest using our site can book it.</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault0">
                              <label class="form-check-label" for="flexCheckDefault0">
                                I certify that this is a legitimate accommodation business with all necessary licenses and permits, which can be shown upon first request. Poolvilla reserves the right to verify and investigate any details provided in this registration.
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                              <label class="form-check-label" for="flexCheckChecked">
                                I have read, accepted, and agreed to the <a href="Terms_parther.php" class="text-blue">General Delivery Terms.</a>
                              </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-sm-6">
                     <a href="list_property_confirm.php"><div class="btn-orange mt-3">Open for bookings</div></a>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-grey mt-3">I'm not ready</button>
                </div>
            </div>
        </div>
    </div>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Any reason you don't want to open for bookings?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
              <label class="form-check-label" for="flexCheckDefault1">My property isn’t ready to accept guests</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
              <label class="form-check-label" for="flexCheckDefault2">I want to connect my channel manager</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
              <label class="form-check-label" for="flexCheckDefault3">I want to update my calendar</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
              <label class="form-check-label" for="flexCheckDefault4">I have more details to add (photos, facilities, pricing, etc.)</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
              <label class="form-check-label" for="flexCheckDefault5">Something else</label>
          </div>
          <div class="col-sm-6">
                <a href="list_property_confirm.php"><div class="btn-orange mt-3">Submit and continue registration</div></a>
          </div>
      </div>
    </div>
  </div>
</div>
        <div class="space-footer"></div>
    </div>
    <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>
