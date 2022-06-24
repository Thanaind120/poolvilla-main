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
                <div class="vl-filter-hotel">
                    <div class="clearfix">
                        <div class="float-start">
                             <div class="text-filter text-grey mb-2 text-bold"><i class="far fa-address-card  text-orange me-2"></i>Profile</div>
                        </div>
                         <div class="float-end">
                            <a href="hotel_account_manage_edit_profile.php">
                                <div class="text-tiny text-red mb-2"><i class="fas fa-pencil-alt me-2"></i>Edit</div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="text-tiny  text-bold text-grey">First Name :</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-tiny  text-grey">NAME</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="text-tiny text-bold text-grey">Last Name :</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-tiny  text-grey">LAST NAME</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="text-tiny text-bold text-grey">Address :</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-tiny  text-grey">.....</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="text-tiny text-bold text-grey">Email :</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-tiny  text-grey">info@poolvilla.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="text-tiny text-bold text-grey">Phone :</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-tiny  text-grey">02-000-0000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vl-filter-hotel">
                    <div class="clearfix">
                        <div class="float-start">
                             <div class="text-filter text-grey mb-2 text-bold"><i class="far fa-comment-dots  text-orange me-2"></i>Contacts</div>
                        </div>
                         <div class="float-end">
                            <a href="hotel_account_manage_edit_contact.php">
                                <div class="text-tiny text-red mb-2"><i class="fas fa-pencil-alt me-2"></i>Edit</div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="text-tiny  text-bold text-grey">Contact :</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-tiny  text-grey">NAME</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="text-tiny  text-bold text-grey">Email :</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-tiny  text-grey">info@poolvilla.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="text-tiny text-bold text-grey">Phone :</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-tiny  text-grey">02-000-0000</div>
                            </div>
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

