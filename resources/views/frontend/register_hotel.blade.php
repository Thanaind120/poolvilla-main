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
    <?php require('inc_navbar_hotel_regis.php'); ?> 
    <div class="bg-grey">
    <div class="container">
        <div class="box-sign">
            <div class="text-head-sign text-orange">Create your partner account</div>
            <div class="space-footer mb-3">
              <label for="exampleFormControlInput1" class="form-label text-orange">First Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput2" class="form-label text-orange">Last Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput3" class="form-label text-orange">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput3">
            </div>
            <div class=" mb-3">
              <label for="exampleFormControlInput3" class="form-label text-orange">Phone</label>
              <input type="email" class="form-control" id="exampleFormControlInput3">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput4" class="form-label text-orange">Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput4">
                <small class="text-light-grey">Use a minimum of 10 characters, including uppercase letters, lowercase letters, and numbers.</small>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput4" class="form-label text-orange">Confirm Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput4">
            </div>
            <a class="btn-sign" href="register_hotel_2.php">Create</a>
            
            <div class="text-grey text-tiny text-start mt-5">Already have an account?<a href="signin_hotel.php" class="text-orange ms-2">Sign in</a></div>
             <div class="space-footer"></div>
        </div>
    </div>
        
        <div class="space-footer"></div>
    </div>
    <?php require('inc_footer_hotel_regis.php'); ?> 
</body>
</html>

