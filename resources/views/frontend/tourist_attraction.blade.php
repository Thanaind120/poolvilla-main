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
    <div class="bg-orange">
        <div class="row justify-content-center">
        <div class="col-sm-8">
        <div class="text-title text-bold text-white">Fine a great experience</div>
        <input class="form-control empty orange" type="text" id="iconified" placeholder="&#xF002;  Where  are  you  looking for ?"aria-label="default input example">
        </div>
        </div>
    </div>
    <div class="container">
        <div class="clearfix">
            <div class="float-start">
                <div class="for-destop">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="bread" href="{{url('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tourist attraction</li>
                    </ol>
                </nav>  
                </div>
            </div>
        </div>
        <div class="head-text-index">Top Destinations</div>
        <div class="line-bottom-head-text"></div>
        <div class="row justify-content-center  my-5">
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">          
                        <img src="{{asset('assets_frontend/images/destination1.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">          
                        <img src="{{asset('assets_frontend/images/destination2.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-12">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">          
                        <img src="{{asset('assets_frontend/images/destination3.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="head-text-index">Explore more</div>
        <div class="line-bottom-head-text"></div>
        
        <div class="row my-5">
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">          
                        <img src="{{asset('assets_frontend/images/destination1.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">        
                        <img src="{{asset('assets_frontend/images/destination2.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">          
                        <img src="{{asset('assets_frontend/images/destination3.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">   
                        <img src="{{asset('assets_frontend/images/destination1.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">           
                        <img src="{{asset('assets_frontend/images/destination2.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="frame-item box-destination">
                    <a href="{{url('tourist_attraction_country')}}" class="">          
                        <img src="{{asset('assets_frontend/images/destination3.jpg')}}" class="img-des">
                        <div class="bottom-left">
                            <p class="name-text text-white">Cities , Country</p>
                            <p class="detail-text text-white">100 properties</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
       
    </div>
    <div class="space-footer"></div>
  @include('frontend/inc_footer')
</body>
</html>