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
    <div class="container">
        <div class="banner">
            <img src="images/place-banner.jpg" class="banner-index">
        </div>
        <div class="clearfix">
            <div class="float-start">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="bread" href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="bread" href="tourist_attraction.php">Tourist Attraction</a></li>
                        <li class="breadcrumb-item active" aria-current="page">*country*</li>
                    </ol>
                </nav>  
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="text-title text-bold text-grey">Place</div>
                <div class="text-tiny text-grey my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus. Maecenas aliquet maximus dolor quis rutrum. Maecenas rutrum eros ac leo rhoncus, fringilla efficitur nibh ultrices. Suspendisse potenti. Duis aliquam nisl et elit facilisis, ac imperdiet ex tempor. Praesent egestas lobortis massa. Nullam velit lorem, luctus et metus sed, semper porttitor nunc. Vivamus ullamcorper leo id ipsum dictum suscipit eget ac dui. Sed quam nunc, fringilla eu pulvinar vel, lobortis quis turpis. Pellentesque semper dui ut lorem venenatis, ac fringilla sapien semper. Vivamus semper laoreet facilisis.</div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.3835136560165!2d100.39591701477933!3d13.75573079034492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e297021c8278b9%3A0x17123d2c4a3a5bcd!2sPrivate%20Club!5e0!3m2!1sen!2sth!4v1623052760020!5m2!1sen!2sth" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="name-text text-bold text-grey">title</div>
                <div class="text-tiny text-grey my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus. Maecenas aliquet maximus dolor quis rutrum.</div>
                <div class="name-text text-bold text-grey">title</div>
                <div class="text-tiny text-grey my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus. Maecenas aliquet maximus dolor quis rutrum.</div>
            </div>
            <div class="col-sm-4">
                <div class="name-text text-bold text-grey">Gallery</div>
                <div class="row">
                    <div class="col-6">
                        <img src="images/1-place.jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
                    </div>
                    
                    <div class="col-6">
                        <img src="images/1.2-place.jpg" style="width:100%" data-bs-toggle="modal" data-bs-target="#popup-img-head">
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
                          <img src="images/1-place.jpg" class="d-block w-100" alt="...">
                        </div>
                        
                          <div class="carousel-item">
                          <img src="images/1.2-place.jpg" class="d-block w-100" alt="...">
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
                        <div class="text-tiny text-grey text-end mt-1">รูปภาพทั้งหมด(2)</div>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="">
            
        </div>
    </div>
    <div class="space-footer"></div>
    <?php require('inc_footer.php'); ?> 
</body>
</html>