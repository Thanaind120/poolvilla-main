<nav>
    <div class="for-destop">
        <div class="navigation">
            <div class="container">
                <div class="row  justify-content-between">
                    <div class="col-xl-4 col-2">
                        <a href="{{url('index')}}">
                            <img src="{{asset('assets_frontend/images/logo.svg')}}" class="logo">
                        </a>
                    </div>
                    <div class="col-xl-8 col-10">
                        <!-- non-login-->
                        <ul class="nav-list">

                            @if (Auth::user() != '')
                            <li class="nav-link scroll"><a></a></li>
                            <li class="nav-link scroll"><a></a></li>
                            <li class="nav-link scroll"><a href="{{url('index')}}">Home</a></li>
                            <li class="nav-link scroll"><a href="{{url('tourist-attraction')}}">Tourist Attraction</a>
                            </li>
                            <li class="nav-link scroll">
                                <div class="dropdown profile">
                                    <button class="btn btn-lang dropdown-toggle"><i
                                            class="fas fa-user-circle name-text me-2 text-orange"></i>Welcome,@if(Auth::user()!=null)
                                        {{Auth::user()->firstname}} @else Elle @endif</button>
                                    <div class="dropdown-content profile">
                                        <a href="{{url('profile')}}">My Profile</a>
                                        <a href="{{url('mybooking')}}">My Booking</a>
                                        <a href="{{ url('logout') }}">Log out</a>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="nav-link scroll"><a href="{{url('index')}}">Home</a></li>
                            <li class="nav-link scroll"><a href="{{url('tourist-attraction')}}">Tourist Attraction</a>
                            </li>
                            <li class="nav-link scroll"><a href="{{url('register')}}">Register</a></li>
                            <li class="nav-link scroll"><a href="{{url('signin')}}"><i
                                        class="fas fa-sign-in-alt text-orange pe-2"></i>Sign in</a></li>
                            @endif
                            <li class="nav-link non-scroll">
                                <div class="dropdown">
                                    <button class="btn btn-lang dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('assets_frontend/images/lang-en.png')}}" class="lang">EN
                                    </button>
                                    <ul class="dropdown-menu lang" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="{{asset('assets_frontend/images/090-thailand-1.png')}}"
                                                    class="lang">ไทย</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- non-login-->
                        <!-- when-login-->
                        <!--<ul class="nav-list">
                        <li class="nav-link"><a href="index.php">Home</a></li>
                        <li class="nav-link scroll"><a href="tourist-attraction.php">Tourist Attraction</a></li>
                        <li class="nav-link"><a href="#"><img src="images/lang-en.png" class="lang"></a></li>
                        <li class="nav-link">
                            <div class="dropdown profile">
                                <a class="dropbtn profile scroll"><i class="fas fa-user-circle name-text me-2 text-orange"></i>Welcome,Elle</a>
                                <div class="dropdown-content profile">
                                    <a href="profile.php">My Profile</a>
                                    <a href="mybooking.php">My Booking</a>
                                    <a href="">Log out</a>
                                </div>
                            </div>
                         </li>
                    </ul>-->
                        <!-- when-login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="for-mobile-tablet">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <button class="btn btn-nav-mobile" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"><i
                            class="fas fa-bars text-orange"></i></button>
                </div>
                <div class="col-4">
                    <a href="{{url('index')}}">
                        <img src="{{asset('assets_frontend/images/logo.svg')}}" class="logo">
                    </a>
                </div>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
                aria-labelledby="offcanvasWithBackdropLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel"></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <!-- non-login-->
                    <ul class="nav-list">
                        @if (Auth::user() != '')
                        <li class="nav-link"><a href="{{url('index')}}"><i
                                    class="fas fa-home text-orange pe-2"></i>Home</a>
                        </li>
                        <li class="nav-link"><a href="{{url('tourist-attraction')}}"><i
                                    class="fas fa-place-of-worship text-orange pe-2"></i>Tourist Attraction</a></li>
                        <li class="nav-link"><a href="{{url('logout')}}"><i
                                    class="fas fa-sign-in-alt text-orange pe-2"></i>Log out</a></li>
                        @else
                        <li class="nav-link"><a href="{{url('index')}}"><i
                                    class="fas fa-home text-orange pe-2"></i>Home</a>
                        </li>
                        <li class="nav-link"><a href="{{url('tourist-attraction')}}"><i
                                    class="fas fa-place-of-worship text-orange pe-2"></i>Tourist Attraction</a></li>
                        <li class="nav-link"><a href="{{url('register')}}"><i
                                    class="fas fa-user-plus text-orange pe-2"></i>Register</a></li>
                        <li class="nav-link"><a href="{{url('signin')}}"><i
                                    class="fas fa-sign-in-alt text-orange pe-2"></i>Sign in</a></li>
                        @endif
                    </ul>
                    <!-- non-login-->
                    <!-- when-login-->
                    <!--<ul class="nav-list">
                         <li class="nav-link- text-orange"></i>Welcome, Elle</li>
                        <li class="nav-link-"><a href="index.php"><i class="fas fa-home text-orange pe-2"></i>Home</a></li>
                        <li class="nav-link-"><a href="tourist-attraction.php"><i class="fas fa-place-of-worship text-orange pe-2"></i>Tourist Attraction</a></li>
                        <li class="nav-link-"> <a href="profile.php"><i class="far fa-id-card text-orange pe-2"></i>My Profile</a></li>
                        <li class="nav-link-"><a href="mybooking.php"><i class="fas fa-umbrella-beach text-orange pe-2"></i>My Booking</a></li>
                        <li class="nav-link-"><a href=""><i class="fas fa-door-open text-orange pe-2"></i>Log out</a></li>
                    </ul>-->
                    <!-- when-login-->
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var height = $(".navigation").height();
            var scrollTop = $(window).scrollTop();
            console.log("Scroll");

            if (scrollTop >= height - 40) {
                $(".navigation").css("background-color", "#ffff");
            } else {
                $(".navigation").css("background-color", "transparent");
                $(".nav-link a").css("color", "#fff");
            }
        });
    });

</script>
