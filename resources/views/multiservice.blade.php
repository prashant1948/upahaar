
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

    <link rel="stylesheet" href="{{asset('css/multi.css')}}">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

</head>



<body>

<nav id="navbar1" class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
        <span class="navbar-brand"><img src="{{asset('images/logoFull.png')}}"/></span>

        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" id="active1" href="#section1">Home</a></li>
                <li class="nav-item"><a class="nav-link" id="active2" href="#section2">Our Services</a></li>
                <li class="nav-item"><a class="nav-link" id="active3" href="#section3">Contact</a></li>
            </ul>
        </div>

    </div>
</nav>
<section class="hero" id="section1">
    <div class="content">
        <div class="row justify-content-center align-items-center">
            <div class="sign">
                <span class="fast-flicker">M</span>ulti<span class="flicker">service</span>Application
            </div>
{{--            <h1>Multi Service Application</h1>--}}
        </div>
    </div>
</section>


<section class="header-product content1" id="section2">
    <div class="container headings text-center">
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
                    <a href="">
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
                    <a href="">
                        <div class="card">
                            <div class="overlay">
                                <img src="{{asset('images/car.png')}}" />
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
<section class="content3" id="section3">
    <div class="container headings text-center">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="row justify-content-center">
                <div class="image-banner col-lg-10 col-md-10 col-12">
                    <div class="row justify-content-center">
                        <img src="{{asset('images/networkbanner.jpg')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
