<!doctype html>
<html lang="th">
<head>      
   <title>Poolvilla</title>
    @include('frontend/inc_header')
    <link rel="stylesheet" href="{{asset('assets_frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets_frontend/css/owl.theme.default.min.css')}}">
<script src="{{asset('assets_frontend/js/owl.carousel.min.js')}}"></script>
</head>
<body >
  @include('frontend/inc_navbar')
    <div class="container">
        <div class="banner">
            <img src="{{asset('assets_frontend/images/promotion.jpg')}}" class="banner-index">
        </div>
        <div class="clearfix">
            <div class="float-start">
                <div class="for-destop">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="bread" href="{{url('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">*promotion name*</li>
                    </ol>
                </nav>  
                </div>
            </div>
        </div>
            <div class="container">
                <div class="text-title text-bold text-grey">Promotion name</div>
                <div class="text-tiny text-grey my-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae dapibus mi. Vivamus congue sodales luctus. Maecenas aliquet maximus dolor quis rutrum. Maecenas rutrum eros ac leo rhoncus, fringilla efficitur nibh ultrices. Suspendisse potenti. Duis aliquam nisl et elit facilisis, ac imperdiet ex tempor. Praesent egestas lobortis massa. Nullam velit lorem, luctus et metus sed, semper porttitor nunc. Vivamus ullamcorper leo id ipsum dictum suscipit eget ac dui. Sed quam nunc, fringilla eu pulvinar vel, lobortis quis turpis. Pellentesque semper dui ut lorem venenatis, ac fringilla sapien semper. Vivamus semper laoreet facilisis.
                </div>
                <div class="name-text my-3 text-bold text-grey">Accommodation offer</div>
                <div class="row ">
                    <div class="col-sm-3 col-6">
                        <div class="mb-2">
                            <a href="{{url('select-rooms')}}">
                                <div class="img-cat-place">
                                    <img src="{{asset('assets_frontend/images/recomment%20(3).jpg')}}" class="img-des  pool" alt="...">
                                </div> 
                            </a>
                            <div class="box-body">
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{url('select-rooms')}}">
                                        <p class="name-text">poolvilla</p>
                                    </a>
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row no-gutter">
                                        <div class="col-4 px-2 ">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="small star-rating">4.9</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country</div>
                            <div class="text-green text-tiny">
                                <span class="text-bold me-1">FREE</span>Cancellation
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="small text-orange">8,000 ฿ / night</p>
                                </div>      
                            </div>
                              <div class="small text-light-grey" style="text-decoration: line-through;" >จากปกติ 20,000 ฿ </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-2">
                            <a href="{{url('select-rooms')}}">
                                <div class="img-cat-place">
                                    <img src="{{asset('assets_frontend/images/recomment%20(4).jpg')}}" class="img-des  pool" alt="...">
                                </div> 
                            </a>
                            <div class="box-body">
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{url('select-rooms')}}">
                                        <p class="name-text">poolvilla</p>
                                        
                                    </a>   
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row no-gutter">
                                        <div class="col-4 px-2 ">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 ">
                                            <div class="small star-rating">4.9</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country</div>
                            <div class="text-green text-tiny">
                                <span class="text-bold me-1">FREE</span>Cancellation
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="small text-orange">8,000 ฿ / night</p>
                                </div>      
                            </div>
                              <div class="small text-light-grey" style="text-decoration: line-through;" >จากปกติ 20,000 ฿ </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-2">
                            <a href="{{url('select-rooms')}}">
                                <div class="img-cat-place">
                                    <img src="{{asset('assets_frontend/images/recomment%20(1).jpg')}}" class="img-des  pool" alt="...">
                                </div> 
                            </a>
                            <div class="box-body">
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{url('select-rooms')}}">
                                        <p class="name-text">poolvilla</p>
                                    </a>
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row no-gutter">
                                        <div class="col-4 px-2 ">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="small star-rating">4.9</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                                <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country</div>
                            <div class="text-green text-tiny">
                                <span class="text-bold me-1">FREE</span>Cancellation
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="small text-orange">8,000 ฿ / night</p>
                                </div>      
                            </div>
                              <div class="small text-light-grey" style="text-decoration: line-through;" >จากปกติ 20,000 ฿ </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-2">
                            <a href="{{url('select-rooms')}}">
                                <div class="img-cat-place">
                                    <img src="{{asset('assets_frontend/images/recomment%20(2).jpg')}}" class="img-des  pool" alt="...">
                                </div> 
                            </a>
                            <div class="box-body">
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{url('select-rooms')}}">
                                        <p class="name-text">poolvilla</p>
                                    </a>
                                    
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row no-gutter">
                                        <div class="col-4 px-2 ">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="small star-rating">4.9</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                                <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country</div>
                            <div class="text-green text-tiny">
                                <span class="text-bold me-1">FREE</span>Cancellation
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="small text-orange">8,000 ฿ / night</p>
                                </div>      
                            </div>
                              <div class="small text-light-grey" style="text-decoration: line-through;" >จากปกติ 20,000 ฿ </div>
                          </div>
                      </div> 
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-2">
                            <a href="{{url('select-rooms')}}">
                                <div class="img-cat-place">
                                    <img src="{{asset('assets_frontend/images/recomment%20(1).jpg')}}" class="img-des  pool" alt="...">
                                </div> 
                            </a>
                            <div class="box-body">
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{url('select-rooms')}}">
                                        <p class="name-text">poolvilla</p>
                                    </a>
                                    
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row no-gutter">
                                        <div class="col-4 px-2 ">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="small star-rating">4.9</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                                <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country</div>
                            <div class="text-green text-tiny">
                                <span class="text-bold me-1">FREE</span>Cancellation
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="small text-orange">8,000 ฿ / night</p>
                                </div>      
                            </div>
                              <div class="small text-light-grey" style="text-decoration: line-through;" >จากปกติ 20,000 ฿ </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-2">
                            <a href="{{url('select-rooms')}}">
                                <div class="img-cat-place">
                                    <img src="{{asset('assets_frontend/images/recomment%20(2).jpg')}}" class="img-des  pool" alt="...">
                                </div> 
                            </a>
                            <div class="box-body">
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{url('select-rooms')}}">
                                        <p class="name-text">poolvilla</p>
                                    </a>
                                    
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row no-gutter">
                                        <div class="col-4 px-2 ">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="small star-rating">4.9</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                                <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country</div>
                            <div class="text-green text-tiny">
                                <span class="text-bold me-1">FREE</span>Cancellation
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="small text-orange">8,000 ฿ / night</p>
                                </div>      
                            </div>
                              <div class="small text-light-grey" style="text-decoration: line-through;" >จากปกติ 20,000 ฿ </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="mb-2">
                            <a href="{{url('select-rooms')}}">
                                <div class="img-cat-place">
                                    <img src="{{asset('assets_frontend/images/recomment%20(3).jpg')}}" class="img-des  pool" alt="...">
                                </div> 
                            </a>
                            <div class="box-body">
                            <div class="row">
                                <div class="col-9">
                                    <a href="{{url('select-rooms')}}">
                                        <p class="name-text">poolvilla</p>
                                    </a>
                                    
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row no-gutter">
                                        <div class="col-4 px-2 ">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="small star-rating">4.9</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                                <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country</div>
                            <div class="text-green text-tiny">
                                <span class="text-bold me-1">FREE</span>Cancellation
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="small text-orange">8,000 ฿ / night</p>
                                </div>      
                            </div>
                              <div class="small text-light-grey" style="text-decoration: line-through;" >จากปกติ 20,000 ฿ </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="">
                            <a href="{{url('select-rooms')}}">
                                <div class="img-cat-place">
                                    <img src="{{asset('assets_frontend/images/recomment%20(4).jpg')}}" class="img-des  pool" alt="...">
                                </div> 
                            </a>
                            <div class="box-body">
                            <div class="row">
                                <div class="col-9">
                                         <a href="{{url('select-rooms')}}">
                                        <p class="name-text">poolvilla</p>
                                    </a>
                                    
                                </div>
                                <div class="col-3 px-0">
                                    <div class="row no-gutter">
                                        <div class="col-4 px-2 ">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="small star-rating">4.9</div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                                <div class="text-blue text-tiny"><i class="fas fa-map-marker-alt me-1"></i>Location , Country</div>
                            <div class="text-green text-tiny">
                                <span class="text-bold me-1">FREE</span>Cancellation
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="small text-orange">8,000 ฿ / night</p>
                                </div>      
                            </div>
                              <div class="small text-light-grey" style="text-decoration: line-through;" >จากปกติ 20,000 ฿ </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            
    </div>
    <div class="space-footer"></div>
   @include('frontend/inc_footer')
</body>
</html>