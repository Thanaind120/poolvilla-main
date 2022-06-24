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
    <div class="bg-orange">
         <?php require('inc_menu_bar_hotel.php'); ?> 
    </div>
    <div class="bg-grey">
        <div class="container">
            <div class="text-head-d text-grey  mt-3 mb-2 text-bold">Account Management</div>
            <div class="box-hotel-p">
                <div class="">
                    <div class="clearfix">
                        <div class="float-start">
                             <div class="text-filter text-grey mb-2 text-bold">Edit Profile</div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label text-grey">First Name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput2" class="form-label  text-grey">Last Name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlInput3" class="form-label  text-grey">Email</label>
                          <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Email">
                        </div>
                        <div class=" mb-3">
                          <label for="exampleFormControlInput3" class="form-label  text-grey">Phone</label>
                          <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Phone">
                        </div>
                        <div class="">
                          <label for="exampleFormControlInput3" class="form-label  text-grey">Address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="....">
                        </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-tiny text-grey text-start mt-3"></div>
                        <label for="exampleDataList" class="form-label  text-grey">Country</label>
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
                        <label for="exampleDataList" class="form-label  text-grey">City</label>
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
                        <label for="exampleDataList" class="form-label  text-grey">Postal Code</label>
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
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-sm-4">
                             <a href="hotel_account_manage.php"><div class="btn-grey mt-3">Cancel</div></a>
                        </div>
                        <div class="col-sm-4">
                             <a href="hotel_account_manage.php"><div class="btn-orange mt-3">Save</div></a>
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

