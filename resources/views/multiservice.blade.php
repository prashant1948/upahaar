
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <meta name="keywords" content="Online,Nepal, Let It Grow - Nepal, eCommerce">
    <meta name="robots" content="all">


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">


{{--    <link href="{{asset('eazy/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />--}}

    <link href="{{asset('eazy/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>

    <!--pop-up-box-->
    <link href="{{asset('eazy/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('css/multi.css')}}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">



</head>



<body>
@include('inc.navbar_multi')
{{--<nav id="navbar1" class="navbar navbar-expand-md navbar-light bg-light fixed-top">--}}
{{--    <div class="container">--}}
{{--        <span class="navbar-brand"><img src="{{asset('images/logoFull.png')}}"/></span>--}}

{{--        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <i class="fa fa-bars"></i>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent1">--}}
{{--            <ul class="nav navbar-nav ml-auto">--}}
{{--                <li class="nav-item"><a class="nav-link" id="active1" href="#section1">Home</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" id="active2" href="#section2">Our Services</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" id="active3" href="#section3">Contact</a></li>--}}
{{--                @guest--}}
{{--                <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal1">--}}
{{--                        <span class="fa fa-unlock-alt" aria-hidden="true"></span> Log In </a></li>--}}

{{--                @else--}}
{{--                    @if (Auth::user()->isStaff())--}}
{{--                        <li><a class="nav-link"  href="/admin/dashboard">Dashboard</a></li>--}}
{{--                        <li>--}}
{{--                            <a href="" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</nav>--}}

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In</h3>
{{--                    <p>--}}
{{--                        Sign In now, Let's start your Grocery Shopping. Don't have an account?--}}
{{--                        <a href="#" data-toggle="modal" data-target="#myModal2">--}}
{{--                            Sign Up Now</a>--}}
{{--                    </p>--}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="styled-input agile-styled-input-top">
                            <input type="email" class="le-input" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                            @error('email')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="styled-input">
                            <input type="password" class="le-input" name="password" placeholder="Password" value="{{ old('password') }}" required>
                            @error('password')
                            <span class="red-text" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <input type="submit" value="Sign In">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>

{{--<section class="hero" id="section1">--}}
{{--    <div class="content">--}}
{{--        <div class="row justify-content-center align-items-center">--}}
{{--            <div class="sign">--}}
{{--                <span class="fast-flicker">M</span>ulti<span class="flicker">service</span>Application--}}
{{--            </div>--}}
{{--            <h1>Multi Service Application</h1>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<section class="header-product content1 pt-5" id="section2">
    <div class="container headings text-center pt-5">
        <h1 class="font-weight-bold text-center">Our Services</h1>
        <div class="row">
{{--                    @foreach ($products as $product)--}}
                <div class="product-cards col-lg-4 col-md-4 col-12">
                    <a href="/ecommerce">
                        <div class="card">
                            <div class="overlay">
                                <img src="{{asset('images/ecommerce.png')}}"/>
                                <h2>Ecommerce</h2>
                                <p>We provide you with the best product. We assure you the quality.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="product-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3s"
                     data-wow-delay="1.5s">
                    <a href="{{route('job.index')}}">
                        <div class="card">
                            <div class="overlay">
                                <img src="{{asset('images/job.png')}}"/>
                                <h2>Job Portal</h2>
                                <p>We provide you with the best product. We assure you the quality.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="product-cards col-lg-4 col-md-4 col-12 wow slideInLeft" data-wow-duration="3s"
                     data-wow-delay="1.5s">
                    <a href="{{route('car.index')}}">
                        <div class="card">
                            <div class="overlay">
                                <img src="{{asset('images/car.png')}}"/>
                                <h2>Vehicle Rental</h2>
                                <p>We provide you with the best product. We assure you the quality.</p>
                            </div>
                        </div>
                    </a>
                </div>
{{--                    @endforeach--}}
        </div>
    </div>
</section>
<!-- special offers -->
@if($top_sales)
    <div class="featured-section" id="projects">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Top Sales
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    @foreach ($top_sales as $f)
                        <li>
                            <div class="w3l-specilamk">
                                <div class="speioffer-agile">
                                    <a href="/singleMart/{{$f->id}}">
                                        <img alt="" src="/storage/images/products/{{$f->image}}" style="width:70px;height:70px"/>
                                    </a>
                                </div>
                                <div class="product-name-w3l">
                                    <h4>
                                        <a href="/singleMart/{{$f->id}}">{{ Str::limit($f->name, 10) }}</a>
                                    </h4>
                                    <div class="w3l-pricehkj">
                                        <h6>Rs.{{$f->rate}}</h6>
                                        <p>Save {{$f->discount}} %</p>
                                    </div>
                                    @if(!Auth::user())
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal1">
                                            <a href="/ecommerce"><input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" /></a>
                                        </div>
                                    @else
                                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" data-toggle="modal" data-target="#myModal4">
                                            <a href="/ecommerce"><input type="submit" name="submit" onclick="addToCart({{$f->id}}, '<?php echo csrf_token() ?>')" value="Add to cart" class="button" /></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
<div class="ads-grid">
    <div class="container">
        <h3 class="tittle-w3l">Latest Jobs
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
    <div class="companies">
        @foreach($jobs as $job)
            <div class="company-list">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="company-logo p-3">
                            <img src="/storage/images/jobCompanyLogo/{{$job->logo}}" class="img-responsive" alt="" style="width:50px;height:50px"/>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="company-content">
                            <h3>{{$job->name}}<span class="full-time">{{$job->job_type}}</span></h3>
                            <p><span class="company-name"><i class="fa fa-briefcase"></i>{{$job->company_name}}</span><span class="company-location"><i class="fa fa-map-marker"></i> {{$job->company_address}}</span><span class="package"><i class="fa fa-money"></i>{{$job->salary}}</span></p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 pt-2">
                        @if(!Auth::user())
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out pr-3" data-toggle="modal" data-target="#myModal1">
                                <a href="/indexJob"><input type="submit" name="submit" value="Apply" class="button"/></a>
                            </div>

                        @else
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out pr-3" data-toggle="modal" data-target="#myModal4">
                                <a href="/indexJob"><input type="submit" name="submit" value="Apply" class="button"/></a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
    <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Rent a Vehicle
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
            </span>
            </h3>
            <div class="companies">
                @foreach($cars as $car)
                    <div class="company-list">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="company-logo p-3">
                                    <img src="/storage/images/carDetails/{{$car->image}}" class="img-responsive" alt=""  style="width:50px;height:50px"//>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="company-content">
                                    <h3>{{$car->model}}<span class="full-time">{{$car->category->car_category}}</span></h3>
                                    <p><span class="company-name"><i class="fa fa-seat"></i>{{$car->seats}} Seater</span><span class="company-location"><i class="fa fa-car"></i> {{$car->description}}</span></p>
                                    {{--                            <span class="package"><i class="fa fa-money"></i>{{$car->model}}</span>--}}
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 pt-2">
                                @if(!Auth::user())
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out pr-3" data-toggle="modal">
                                        <a href="/indexCar"><input type="submit" name="submit" value="Rent" class="button" /></a>
                                    </div>

                                @else
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out pr-3" data-toggle="modal">
                                        <a href="/indexCar"><input type="submit" name="submit" value="Rent" class="button" /></a>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{--<section class="content3" id="section3">--}}
{{--    <div class="container headings text-center">--}}
{{--        <div class="col-lg-12 col-md-12 col-12">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="image-banner col-lg-10 col-md-10 col-12">--}}
{{--                    <div class="row justify-content-center">--}}
{{--                        <img src="{{asset('images/networkbanner.jpg')}}"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="header-product content2" id="section3">
    <div class="container headings text-center">
        <h1 class="font-weight-bold text-center">Contact Us</h1>
        <div class="col-lg-12 col-md-12 col-12 pt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <h6>Email: info@letitgrownepal.com</h6>
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h6>Address: Pulchowk, Lalitpur</h6>
                    <i class="fa fa-home"></i>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h6>Phone Number: 01-5901614</h6>
                    <i class="fa fa-phone"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="content2" id="section2">--}}
<footer class="footer" id="footerDiv">
    <div class="copyright">
        <h6>Copyright @ 2021 - Let IT Grow Pvt. Ltd. All Rights Reserved</h6>
    </div>
</footer>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- jquery -->
<script src="{{asset('eazy/js/jquery-2.1.4.min.js')}}"></script>
{{--    <!-- ALL JS FILES -->--}}
<script src="{{asset('js/popper.min.js')}}"></script>

<!-- //jquery -->

<!-- popup modal (for signin & signup)-->
<script src="{{asset('eazy/js/jquery.magnific-popup.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- Large modal -->
<!-- <script>
    $('#').modal('show');
</script> -->
<!-- //popup modal (for signin & signup)-->

<!-- cart-js -->
<script src="{{asset('eazy/js/minicart.js')}}"></script>
<script>
    paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

    paypalm.minicartk.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();

        }

    });
</script>
<!-- //cart-js -->

<!-- price range (top products) -->
<script src="{{asset('eazy/js/jquery-ui.js')}}"></script>
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->

<!-- flexisel (for special offers) -->
<script src="{{asset('eazy/js/jquery.flexisel.js')}}"></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<script>
    $(window).load(function () {
        $("#frontCarousel").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- smoothscroll -->
<script src="{{asset('eazy/js/SmoothScroll.min.js')}}"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="{{asset('eazy/js/move-top.js')}}"></script>
<script src="{{asset('eazy/js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="{{asset('eazy/js/bootstrap.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
        $( "#searchProduct" ).autocomplete({

            source: function(request, response) {
                $.ajax({
                    url: "{{url('livesearch')}}",
                    data: {
                        term : request.term
                    },
                    dataType: "json",
                    success: function(data){
                        var resp = $.map(data,function(obj){

                            return obj.name;

                        });

                        response($.ui.autocomplete.filter(resp.slice(0,500), request.term));
                    }
                });
            },
            minLength: 3
        });
    });

</script>

</body>
</html>
