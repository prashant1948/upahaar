
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

</head>
<div class="navbar">
    <li><a class="logo bold" href="/"><img src="{{asset('images/logoFull.PNG')}}"/></a></li>
    <ul class="nav">
        <li><a href="#section1">Home</a></li>
        <li><a href="#section2">Our Services</a></li>
        <li><a href="#section3">Contact</a></li>
    </ul>
</div>
<body>
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
        <h1 class="font-weight-bold text-center" >Our
            Services</h1>

        <div class="row">
{{--                    @foreach ($products as $product)--}}
                <div class="product-cards col-lg-4 col-md-4 col-12">
                    <a href="/ecommerce">
                        <div class="card">
                            <div class="overlay">
                                <img src="{{asset('images/ecommerce.PNG')}}" />
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
                                <img src="{{asset('images/job.PNG')}}"/>
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
                                <img src="{{asset('images/car.PNG')}}" />
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
{{--<section class="content2" id="section2">--}}
<footer class="footer" id="footerDiv">
    <div class="copyright">
        <h6>Copyright @ 2021 - Let IT Grow Pvt. Ltd. All Rights Reserved</h6>
    </div>
</footer>



</body>
</html>
